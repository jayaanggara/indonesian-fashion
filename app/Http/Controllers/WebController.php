<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function membership(){
        return view('page.membership');
    }

    public function about(){
        return view('page.about');
    }

    public function ContactUs(){
        return view('page.contact');
    }
}
