<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WorkspaceCategoriesController;
use Illuminate\Http\Request;
use App\Http\Requests\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/workspace', [WorkspaceController::class, 'workspace'])->name('workspace');
Route::get('/detailworkspace', [WorkspaceController::class, 'workspaceDetail'])->name('workspaceDetail');
Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');


// Route::get('/aboutus', function () {
//     return view('pages.aboutus', [
//     ]);
// });

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login.view');
    Route::post('login', [AuthController::class, 'authenticate'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('auth.register.view');
    Route::post('register', [AuthController::class, 'store'])->name('auth.register');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password.view');
    Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('auth.forgot-password');
    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('auth.reset-password');

    Route::get('/{provider}/redirect', [ProviderController::class, 'redirect'])->name('auth.provider.redirect');
    Route::get('/{provider}/callback', [ProviderController::class, 'callback'])->name('auth.provider.callback');
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('auth.login.view')
        ->with([
            'status' => 'success',
            'message' => 'Email verified successfully, please login.'
        ]);
})->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::group(['prefix' => 'v1'], function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('workspace_categories', WorkspaceCategoriesController::class)
        ->only(['index', 'show']);
});
