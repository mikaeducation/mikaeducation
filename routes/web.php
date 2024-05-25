<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function (){
    return view('loginpage');
});

Route::get('/register', function (){
    return view('registerpage');
});

Route::get('/profile', function (){
    return view('components/profile');
});