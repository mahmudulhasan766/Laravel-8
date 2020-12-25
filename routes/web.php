<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/my',function(){
// return view('mydashboard',['name'=>"My name is babu"]);
// });

Route::get('/server', [FirstController::class, 'index']);
Route::get('/about', [FirstController::class, 'about']);
Route::get('/babu', [FirstController::class, 'babu']);
Route::get('/mamun', [FirstController::class, 'mamun']);
