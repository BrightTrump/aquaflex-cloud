<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function account(): View
    {
        return view("customer.account", ['user' => auth()->user()]);
    }

    public function orders(): View
    {
        return view("customer.order.index");
    }
}
