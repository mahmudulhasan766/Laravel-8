<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/my',function(){
// return view('mydashboard',['name'=>"My name is babu"]);
// });

Route::get('/index', [FirstController::class, 'index']);
Route::get('/welcome', [FirstController::class, 'welcome']);
Route::get('/babu', [FirstController::class, 'babu']);
Route::get('/navber', [FirstController::class, 'navber']);
Route::view('/xyz', 'welcome');
