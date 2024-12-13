<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

//Route::view('about','about');
//Route::redirect('/home','/');

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about',['name'=>$name]);
});
Route::get('username/{name}',[UserController::class,'getUser']);
// Route::get('user/{name}',[UserController::class,'getUserName']);