<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\AsessmentController;
use Illuminate\Auth\Notifications\VerifyEmail;


// MIKA-HOME 

//messages control
Route::post('/messages/store', [MessageController::class, 'store'])->name('message.store');


//login
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function (){
    return view('loginpage');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', function (){
    return view('registerpage');
});

// Rute untuk verifikasi email  
Route::get('/email/verify/{id}/{hash}', function (Request $request) {  
    // Logika verifikasi email  
    return app('auth')->user()->markEmailAsVerified();  
})->name('verification.verify');

Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified']);

Route::get('/registerprofile', [ProfileController::class, 'showProfileForm']);
Route::post('/complete-profile', [ProfileController::class, 'completeProfile'])->name('complete-profile');

Route::get('/profile', function (){
    return view('profile');
});
Route::put('/profile/update', [ProfileController::class, 'completeProfile'])->name('profile-update');
Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile-update');
Route::put('/profile-media-update', [ProfileController::class, 'updateProfileMedia'])->name('profile-media-update');


Route::post('/delete-account', [AccountController::class, 'deleteAccount'])->name('account.delete');
Route::middleware(['auth'])->group(function () {
    Route::get('/account', [AccountController::class, 'show'])->name('account.show');
    Route::get('/profile', [AccountController::class, 'show'])->name('account.show');
    Route::post('/account', [AccountController::class, 'update'])->name('account.update');
});
Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware(middleware: 'auth');


Route::get('/', function () {
    return view('index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/article', function () {
    return view('article');
});
Route::get('/articleexplore', function () {
    return view('includes/content/main/article/articleexplore');
});
Route::get('/article1', function () {
    return view('includes/content/main/article/article1');
});
Route::get('/article2', function () {
    return view('includes/content/main/article/article2');
});
Route::get('/article3', function () {
    return view('includes/content/main/article/article3');
});
Route::get('/article4', function () {
    return view('includes/content/main/article/article4');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


// MIKA-LEARNING
// web.php

Route::get('/learn', function () {
    return view('learning/home');
});
Route::get('/learn', [ModuleController::class, 'index']);
Route::get('/learn', [ModuleController::class, 'index'])->name('modules.index');

Route::get('/modules', function () {
    return view('learning/modules');
});
Route::get('/modules/{id}', [ModuleController::class, 'showModules'])->name('modules.show');

Route::get('/preLearn', function (){
    return view('learning/preLearn');
});
Route::get('/preLearn_1', function (){
    return view('learning/preLearn-1');
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



// Route::post('/start-course', [CourseController::class, 'startCourse']);
Route::get('/course', [CourseController::class, 'showCourse'])->name('course');
Route::post('/start-course', [CourseController::class, 'startCourse'])->name('start-course');
Route::post('/save-progress-exit', [CourseController::class, 'saveProgressOnExit'])->middleware('auth');

Route::get('/page2_0', [AsessmentController::class, 'asessmentHistoryUser'])->name('asessment.page2_0');
Route::get('/{page}', [CourseController::class, 'showCoursePage'])->where('page', '.*');

Route::middleware('auth:sanctum')->post('/track-progress', [ProgressController::class, 'trackProgress']);
Route::middleware('auth:sanctum')->post('/update-progress', [ProgressController::class, 'updateProgress']);

Route::post('/check-asessment-status', [AsessmentController::class, 'check'])->middleware('auth');

Route::post('/asessment-submit', [AsessmentController::class, 'submit'])
    ->name('asessment-submit')
    ->middleware('auth');

Route::post('/asessment-evaluasi-submit', [AsessmentController::class, 'submitEvaluasi'])
    ->name('asessment-evaluasi-submit')
    ->middleware('auth');
