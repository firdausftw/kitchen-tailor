<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function inquiry()
    {
        return view('inquiry');
    }
}