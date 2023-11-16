<?php

namespace App\Jobs;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\ProductItem;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MigrateCartJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userId;
    /**
     * Create a new job instance.
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // insert each session cartItem into database
        foreach (session('cart') as $id => $details) {
            $productItem = ProductItem::findOrFail($id);

            // check if user cart exist
            $cart = Cart::where("user_id", $this->userId)->first();

            if ($cart) {

                // check if productItem is already added
                $cartItem = CartItem::where('product_item_id', $productItem->id)
                                        ->where('cart_id', $cart->id)->first();

                if ($cartItem) {
                    $cartItem->qty = $details['qty'];
                    $cartItem->save();
                } else {
                    $cartItem = new CartItem();
                    $cartItem->cart()->associate($cart);
                    $cartItem->productItem()->associate($productItem);
                    $cartItem->qty = $details['qty'];
                    $cartItem->save();
                }
            } else {
                $cart = Auth::user()->cart()->create();

                $cartItem = new CartItem();
                $cartItem->cart()->associate($cart);
                $cartItem->productItem()->associate($productItem);
                $cartItem->qty = $details['qty'];
                $cartItem->save();
            }
        }
        // Destroy session
        Session::forget('cart');

    }
}
