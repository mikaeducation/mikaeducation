<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginpage');
});

Route::get('/register', function (){
    return view('registerpage');
});