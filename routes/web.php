<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/my',function(){
// return view('mydashboard',['name'=>"My name is babu"]);
// });
Route::get('/', [FirstController::class, 'homepage']);
//Route::get('/index', [FirstController::class, 'index']);
Route::get('/welcome', [FirstController::class, 'welcome']);
Route::get('/about', [FirstController::class, 'about'])->name('about.page');
Route::get('/deshboard', [FirstController::class, 'deshboard'])->name('deshboardpage');
//Route::view ('/', 'homepage');
Route::get('/login', [FirstController::class, 'Login']);
Route::get('/index', [FirstController::class, 'Index']);
