<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');   # Yes this is test
    }

    public function about()
    {
        return view('about');  # Yes this is test new
    }
}
