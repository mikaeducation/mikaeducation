<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

// MIKA-HOME 
Route::get('/login', function (){
    return view('loginpage');
});

Route::get('/register', function (){
    return view('registerpage');
});

Route::get('/profile', function (){
    return view('components/profile');
});

// MIKA-LEARNING
Route::get('/', function () {
    return view('learning/home');
});
Route::get('/home', function () {
    return view('learning/home');
});



Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/index', function () {
    return view('index');
});

Route::get('/preLearn', function (){
    return view('learning/preLearn');
});

Route::get('/event', function (){
    return view('learning/event');
});

Route::get('/cert', function (){
    return view('learning/cert');
});

Route::get('/other', function (){
    return view('learning/other');
});

Route::get('/course', function (){
    return view('learning/course/page1');
});

Route::get('/page2_0', function (){
    return view('learning/course/page2_0');
});
Route::get('/page2_1', function (){
    return view('learning/course/page2_1');
});
Route::get('/page2_2', function (){
    return view('learning/course/page2_2');
});
Route::get('/page2_3', function (){
    return view('learning/course/page2_3');
});

Route::get('/page3', function (){
    return view('learning/course/page3');
});

Route::get('/page4', function (){
    return view('learning/course/page4_0');
});
Route::get('/page4_1', function (){
    return view('learning/course/page4_1');
});
Route::get('/page4_2', function (){
    return view('learning/course/page4_2');
});
Route::get('/page4_3', function (){
    return view('learning/course/page4_3');
});
Route::get('/page4_4', function (){
    return view('learning/course/page4_4');
});

Route::get('/page5', function (){
    return view('learning/course/page5');
});

Route::get('/page6', function (){
    return view('learning/course/page6');
});

Route::get('/page7_0', function (){
    return view('learning/course/page7_0');
});
Route::get('/page7_1', function (){
    return view('learning/course/page7_1');
});
Route::get('/page7_2_0', function (){
    return view('learning/course/page7_2_0');
});
Route::get('/page7_2_1', function (){
    return view('learning/course/page7_2_1');
});
Route::get('/page7_2_2', function (){
    return view('learning/course/page7_2_2');
});

Route::get('/page8', function (){
    return view('learning/course/page8');
});

Route::get('/page9_0', function (){
    return view('learning/course/page9_0');
});
Route::get('/page9_1', function (){
    return view('learning/course/page9_1');
});
Route::get('/page9_2', function (){
    return view('learning/course/page9_2');
});
Route::get('/page9_3_0', function (){
    return view('learning/course/page9_3_0');
});
Route::get('/page9_3_1', function (){
    return view('learning/course/page9_3_1');
});
Route::get('/page9_3_2', function (){
    return view('learning/course/page9_3_2');
});
Route::get('/page9_3_3', function (){
    return view('learning/course/page9_3_3');
});





