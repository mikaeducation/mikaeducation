<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\AsessmentController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| HALAMAN BERANDA / HALAMAN UTAMA
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/news', fn() => view('news'));
Route::get('/article', fn() => view('article'));
Route::get('/articleexplore', fn() => view('includes/content/main/article/articleexplore'));
Route::get('/article1', fn() => view('includes/content/main/article/article1'));
Route::get('/article2', fn() => view('includes/content/main/article/article2'));
Route::get('/article3', fn() => view('includes/content/main/article/article3'));
Route::get('/article4', fn() => view('includes/content/main/article/article4'));
Route::get('/aboutus', fn() => view('aboutus'));

/*
|--------------------------------------------------------------------------
| FITUR PESAN
|--------------------------------------------------------------------------
*/

Route::post('/messages/store', [MessageController::class, 'store'])->name('message.store');

/*
|--------------------------------------------------------------------------
| HALAMAN PROFILE & ACCOUNT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/registerprofile', [ProfileController::class, 'showProfileForm']);
    Route::post('/complete-profile', [ProfileController::class, 'completeProfile'])->name('complete-profile');

    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('account.show');
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile-update');
    Route::put('/profile-media-update', [ProfileController::class, 'updateProfileMedia'])->name('profile-media-update');
    Route::post('/profile/notification/read/{id}', [ProfileController::class, 'markNotificationRead'])->name('notification.read');

    Route::post('/delete-account', [AccountController::class, 'deleteAccount'])->name('account.delete');
    Route::get('/account', [AccountController::class, 'show'])->name('account.show');
    Route::post('/account', [AccountController::class, 'update'])->name('account.update');
});

/*
|--------------------------------------------------------------------------
| E-LEARNING DAN COURSE
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/learn', [ModuleController::class, 'index'])->name('modules.index');
    Route::get('/modules', fn() => view('learning/modules'));
    Route::get('/modules/{id}', [ModuleController::class, 'showModules'])->name('modules.show');

    Route::get('/preLearn', [ProgressController::class, 'showPreLearn'])->name('preLearn');
    Route::get('/preLearn_1', fn() => view('learning/preLearn-1'));
    Route::get('/event', fn() => view('learning/event'));
    Route::get('/cert', fn() => view('learning/cert'));
    Route::get('/other', fn() => view('learning/other'));

    Route::get('/course', [CourseController::class, 'showCourse'])->name('course');
    Route::post('/start-course', [CourseController::class, 'startCourse'])->name('start-course');
    Route::post('/save-progress-exit', [CourseController::class, 'saveProgressOnExit']);

    Route::get('/api/progress-history', [ProgressController::class, 'getFinishedPages']);
    Route::post('/track-progress', [ProgressController::class, 'trackProgress']);
    Route::post('/update-progress', [ProgressController::class, 'updateProgress']);

    Route::get('/page2_0', [AsessmentController::class, 'asessmentHistoryUser'])->name('asessment.page2_0');
    Route::get('/page8_0', [AsessmentController::class, 'asessmentHistoryUser'])->name('asessment.page8_0');
    Route::get('/{page}', [CourseController::class, 'showCoursePage'])->where('page', '.*');

    Route::post('/check-asessment-status', [AsessmentController::class, 'check']);
    Route::post('/check-user-evaluation', [AsessmentController::class, 'checkUserEvaluation']);

    Route::post('/asessment-submit', [AsessmentController::class, 'submit'])->name('asessment-submit');
    Route::post('/asessment-evaluasi-submit', [AsessmentController::class, 'submitEvaluasi'])->name('asessment-evaluasi-submit');

    Route::post('/submit-review', [ModuleController::class, 'store'])->name('module.review.submit');
});

/*
|--------------------------------------------------------------------------
| ROUTE BAWAAN BREEZE (JANGAN DIHAPUS KARENA PERLU UNTUK RESET PASSWORD)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
