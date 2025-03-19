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

    public function blogs()
    {
        return view('frontend.blogs'); 
    }

    public function services()
    {
        return view('frontend.services'); 
    }

    public function faq()
    {
        return view('frontend.faq'); 
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function standardRoom()
    {
        return view('frontend.standard');
    }

    public function properties ()
    {
        return view('frontend.properties');
    }

    public function propertiesdetails ()
    {
        return view('frontend.propertiesdetails');
    }

}
