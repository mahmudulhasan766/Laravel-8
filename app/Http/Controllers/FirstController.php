<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('mydashboard');
    }

    public function about(){
        echo "My name is hasan";
    }
    public function babu(){
        echo "My name is Babu";
    }
    public function mamun(){
        echo "My name is mamun";
    }
}
