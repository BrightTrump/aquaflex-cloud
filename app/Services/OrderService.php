<?php

namespace App\Services;

use App\Enums\OrderStatusEnum;
use App\Models\ShippingMethod;
use App\Enums\ShippingMethodEnum;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Facades\Paystack;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Address;
use App\Models\CartItem;
use App\Models\OrderLine;
use App\Models\OrderStatus;
use App\Models\ProductItem;
use App\Models\UserAddress;
use Illuminate\Support\Str;

class OrderService
{
    public function placeOrder($request){
        $data = [
            'amount' => $request->input("amount"),
            "reference" => Paystack::genTranxRef(),
            "email" => Auth::user()->email,
            "currency" => "NGN",
            "order_id" => "AQFL" . Str::random(7),
        ];


        // Transfer the cartItem to orderLine
        // Place Order Here
        // Save the order to database
        $order = new Order([
            'reference' => $data['reference'],
            'order_total' => $request->input('amount'),
            'order_id' => $data['order_id'],
        ]);
        $order->user()->associate(Auth::user());
        $order->shippingAddress()->associate(Address::findOrFail(UserAddress::where("user_id", Auth::user()->id)->first()->address_id));
        $order->shippingMethod()->associate(ShippingMethod::where('name', ShippingMethodEnum::HOME)->first());
        $order->orderStatus()->associate(OrderStatus::where('status', OrderStatusEnum::PENDING)->first());

        $order->save();

        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $cartItems = CartItem::where('cart_id', $cart->id)->with('productItem')->get();

        // Store individual cartItem in orderLine
        foreach ($cartItems as $cartItem) {
            $orderLine = new OrderLine([
                'qty' => $cartItem->qty,
                'price' => $cartItem->productItem->price * $cartItem->qty,
            ]);

            $orderLine->productItem()->associate(ProductItem::findOrFail($cartItem->product_item_id));
            $orderLine->order()->associate($order);

            $orderLine->save();
        }
        return Paystack::getAuthorizationUrl($data)->redirectNow();
    }
}
