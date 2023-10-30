<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SaleManagerController extends Controller
{
    public function index() : View
    {
        return view('access.salemanager.dashboard');
    }
}
