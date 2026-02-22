<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    function index() {
        return view('front.index');
    }

    function resume() {
        return view('front.resume');
    }

    function projects() {
        return view('front.projects');
    }
    function contact() {
        return view('front.contact');
    }
}
