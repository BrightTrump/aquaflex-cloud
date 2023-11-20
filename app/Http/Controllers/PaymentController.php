<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\CartItem;
use Illuminate\View\View;
use App\Models\OrderStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Enums\OrderStatusEnum;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    protected $uniqueTransactionId;

    public function __construct(){
        $this->uniqueTransactionId = "AQFL" . Str::random(7);
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want

        $data = $paymentDetails['data'];

        if($data['status'] == 'success'){
            $order = Order::where('reference', $data['reference'])->first();

            if ($order) {

                $order->payment_channel = $data['channel'];
                $order->receipt_no      = $this->uniqueTransactionId;
                $order->authorization_code = $data['authorization']['authorization_code'];

                $order->orderStatus()->associate(OrderStatus::where('status', OrderStatusEnum::PROCESSING)->first());

                $order->save();

                // Clear all cartItem
                $cart = Cart::where('user_id', Auth::user()->id)->first();
                $cartItem = CartItem::where('cart_id', $cart->id)->get();
                $cartItem->delete();


                return redirect('/payment/receipt')->with('order', $order);
            }

        }
    }

    public function receipt(): View
    {
        return view('shop.receipt');
    }

}
