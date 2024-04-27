<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProviderController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login.view');
    Route::post('login', [AuthController::class, 'authenticate'])->name('auth.login');
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
