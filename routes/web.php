<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Interactive\QuizController;

/*
|--------------------------------------------------------------------------
| Verifikasi Email dan Aktivasi Ulang Akun
|--------------------------------------------------------------------------
*/
Route::get('/verify-email/{id}/{hash}', function ($id, $hash, Request $request) {
    $user = User::findOrFail($id);
    if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        return redirect('/register')->withErrors(['message' => 'Link verifikasi tidak valid atau telah kadaluarsa.']);
    }
    if (! $user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
        event(new \Illuminate\Auth\Events\Verified($user));
    }
    // Login otomatis
    Auth::login($user);
    // Redirect ke form melengkapi biodata
    return redirect('/registerprofile')->with('status', 'Email berhasil diverifikasi. Silakan lengkapi biodata Anda.');
})->middleware(['signed'])->name('verification.verify');

Route::get('/reactivate-account', [RegisteredUserController::class, 'showReactivationForm'])->name('reactivate.form');
Route::post('/reactivate-account', [RegisteredUserController::class, 'reactivate'])->name('reactivate.submit');
Route::get('/reactivate/verify/{token}', [RegisteredUserController::class, 'verifyReactivation'])->name('reactivate.verify');


/*
|--------------------------------------------------------------------------
| Halaman Login, Register & RegisterProfile
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.loginpage');
})->name('login');

Route::get('/register', function () {
    return view('auth.registerpage');
})->name('register');

Route::get('/registerprofile', function () {
    $user = Auth::user();

    // Jika belum login, arahkan ke login
    if (!$user) {
        return redirect('/login');
    }

    // Jika profil sudah ada, redirect ke halaman utama
    if (\App\Models\Profile::where('phone', $user->phone)->exists()) {
        return redirect('/')->with('message', 'Biodata sudah lengkap.');
    }

    // Tampilkan halaman registerprofile dengan header no-cache
    return response()
        ->view('auth.registerprofile')
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
        ->header('Pragma', 'no-cache');
})->middleware('auth')->name('registerprofile');



/*
|--------------------------------------------------------------------------
| HALAMAN BERANDA / HALAMAN UTAMA + BAGIAN UTAMA LAINNYA
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $user = Auth::user();
    if ($user && ! \App\Models\Profile::where('phone', $user->phone)->exists()) {
        return redirect('/registerprofile');
    }
    return view('index');
});
Route::get('/news', fn() => view('news'));
Route::get('/article', fn() => view('article'));
Route::get('/articleexplore', fn() => view('includes/content/main/article/articleexplore'));
Route::get('/article1', fn() => view('includes/content/main/article/article1'));
Route::get('/article2', fn() => view('includes/content/main/article/article2'));
Route::get('/article3', fn() => view('includes/content/main/article/article3'));
Route::get('/article4', fn() => view('includes/content/main/article/article4'));
Route::get('/aboutus', fn() => view('about-us'));

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
    Route::get('/verify-delete-account/{token}', [AccountController::class, 'verifyDeletion']);
    Route::get('/account', [AccountController::class, 'show'])->name('account.show');
    Route::post('/account', [AccountController::class, 'update'])->name('account.update');
});

/*
|--------------------------------------------------------------------------
| Halamann Kuis Interaktif
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/popup-quiz', fn() => view('learning.course.interactive.test-popup'));
    Route::get('/quiz/{module_id}/{id}', [QuizController::class, 'index'])->name("quiz.show");
    Route::post('/quiz/{module_id}/{quiz_id}', [QuizController::class, 'update'])->name("quiz.post");
});

/*
|--------------------------------------------------------------------------
| BAGIAN E-LEARNING & COURSE
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
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
