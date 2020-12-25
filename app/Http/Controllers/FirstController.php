<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('mydashboard');
    }

    public function welcome(){
        return view('welcome');
    }
    public function babu(){
        echo "My name is Babu";
    }
    public function navber(){
        return view('navbar');
    }
}
