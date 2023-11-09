<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NavigationController extends Controller
{
    public function services(): View
    {
        return view("navigation.services");
    }

    public function about(): View
    {
        return view('navigation.about');
    }

    public function faqs(): View{
        return view('navigation.faqs');
    }
    public function team(): View{
        return view('navigation.team');
    }
    public function contact(): View{
        return view('navigation.contact');
    }
}
