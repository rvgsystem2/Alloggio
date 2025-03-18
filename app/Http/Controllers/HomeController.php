<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function standardRoom()
    {
        return view('frontend.standard');
    }

    // public function deluxeRoom()
    // {
    //     return view('rooms.deluxe');
    // }

    // public function luxuryRoom()
    // {
    //     return view('rooms.luxury');
    // }
}
