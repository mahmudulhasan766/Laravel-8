<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function welcome(){
        return view('welcome');
    }

    public function deshboard(){
        return view('mydashboard');
    }

    public function about(){
        return view('myabout');
    }
}
