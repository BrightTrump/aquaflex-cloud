<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = [];
        if(Auth::check()){
            $cart = Auth::user()->cart()->with('cartItems.product')->first();
            $cartItems = $cart ? $cart->cartItems : [];
            return view('shop.cart', compact('cartItems'));
        }
        return view('shop.cart', compact('cartItems'));
    }
    public function addToCart($id)
    {

        $product = Product::findOrFail($id);

        if (!Auth::check()) {
            return $this->addToSessionCart($id, $product);
        }

        return $this->addToDatabaseCart($product);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            if(Auth::check()){
                $cartItem = CartItem::findOrFail($request->id);
                $cartItem->quantity = $request->quantity;
                $cartItem->save();
            }else{
                $cart                           = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'Cart successfully updated!');
            }
        }
        return response('Cart successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory($id)
    {
        if ($id) {
            if(Auth::check()){
                $cartItem = CartItem::find($id);
                $cartItem->delete();
            }
            else{
                $cart = session()->get('cart');
                if (isset($cart[$id])) {
                    unset($cart[$id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product successfully removed!');
            }

        }
        return response('Product successfully removed!');
    }

    public function customerId(Request $request)
    {

        $response = Http::get('https://api.ipify.org?format=json');

        $userIp = $response->json('ip');

        if (!Auth::check()) {
            // Display the IP address
            $cart = CartItem::all();
            return response($cart);
        }

    }

    public function countQuantity()
    {
        if(Auth::check()){
            $cart      = Cart::where('user_id', auth()->user()->id)->first();
            $cartItems = CartItem::where('cart_id', $cart->id)->get();
            $totalQty  = 0;

            foreach ($cartItems as $cartItem) {
                $totalQty += $cartItem->quantity;
            }

            return $totalQty;
        }
    }

    private function addToDatabaseCart($product)
    {
        if (Auth::check()) {

            $cart = Cart::where('user_id', auth()->user()->id)->first();

            if ($cart) {

                $cartItem = CartItem::where('product_id', $product->id)->first();

                if ($cartItem) {
                    $cartItem->quantity = $cartItem->quantity + 1;
                    $cartItem->save();
                } else {
                    $cartItem = new CartItem();
                    $cartItem->cart()->associate($cart);
                    $cartItem->product()->associate($product);
                    $cartItem->save();
                }
            } else {

                $cart = new Cart([
                    'user_id' => auth()->user()->id,
                ]);

                $cart->save();
                $cartItem = new CartItem();
                $cartItem->cart()->associate($cart);
                $cartItem->product()->associate($product);
                $cartItem->save();

            }

            return redirect()->back()->with('success', 'Product add to cart successfully!');

        }
    }

    private function addToSessionCart($id, $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "category" => $product->category,
                "name" => $product->name,
                "price" => $product->price,
                "size" => $product->size,
                "contain" => $product->contain,
                "unit" => $product->unit,
                "thumbnail" => $product->thumbnail,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

}
