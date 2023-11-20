<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService){
        $this->orderService = $orderService;
    }
    public function placeOrder(Request $request){

        return $this->orderService->placeOrder($request);
        //return view("shop.checkout");
    }
}
