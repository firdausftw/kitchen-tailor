<?php

namespace App\Http\Controllers;

class CollaborationsController extends Controller
{
    public function index()
    {
        return view('collaborations.index');
    }
    public function gerobokCendayam()
    {
        return view('collaborations.gerobok-cendayam');
    }
    public function kimptonNaluria()
    {
        return view('collaborations.kimpton-naluria');
    }
}