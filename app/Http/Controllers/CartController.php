<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = [];
        if (Auth::check()) {
            $cart = Auth::user()->cart()->with('cartItems.productItem.product')->first();
            return view('shop.cart', ['cartItems' => $cart ? $cart->cartItems : [], 'totalQty' => $this->countQuantity()]);
        }
        return view('shop.cart', compact('cartItems'));
    }

    public function addToCart($id)
    {

        $productItem = ProductItem::findOrFail($id);

        if (!Auth::check()) {
            return $this->addToSessionCart($id, $productItem);
        }

        return $this->addToDatabaseCart($productItem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            if (Auth::check()) {
                $cartItem      = CartItem::findOrFail($request->id);
                $cartItem->qty = $request->quantity;
                $cartItem->save();
            } else {
                $cart                      = session()->get('cart');
                $cart[$request->id]["qty"] = $request->quantity;
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
            if (Auth::check()) {
                $cartItem = CartItem::find($id);
                $cartItem->delete();
            } else {
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
        $totalQty = 0;
        if (Auth::check()) {
            $cart = Cart::where('user_id', auth()->user()->id)->first();
            if ($cart) {
                $cartItems = CartItem::where('cart_id', $cart->id)->get();

                foreach ($cartItems as $cartItem) {
                    $totalQty += $cartItem->qty;
                }
            }
        }
        return $totalQty;
    }

    private function addToDatabaseCart($productItem)
    {
        if (Auth::check()) {

            $cart = Cart::where('user_id', auth()->user()->id)->first();


            if ($cart) {

                $cartItem = CartItem::where('product_item_id', $productItem->id)->first();

                if ($cartItem) {
                    $cartItem->qty = $cartItem->qty + 1;
                    $cartItem->save();
                } else {
                    $this->createNewCartItem($cart, $productItem);
                }
            } else {
                $cart = Auth::user()->cart()->create();

                $this->createNewCartItem($cart, $productItem);
            }

            return redirect()->back()->with('success', 'Product add to cart successfully!');

        }
    }

    private function addToSessionCart($id, $productItem)
    {
        // Add ProductItem and Product
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {

            $product = Product::findOrFail($productItem->product_id);

            $cart[$id] = [
                'product' => $product,
                'product_image' => $productItem->product_image,
                'price' => $productItem->price,
                'size' => $productItem->size,
                'contain' => $productItem->contain,
                'unit' => $productItem->unit,
                'qty' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    private function createNewCartItem($cart, $productItem)
    {
        $cartItem = new CartItem();
        $cartItem->cart()->associate($cart);
        $cartItem->productItem()->associate($productItem);
        $cartItem->save();
    }

}
