<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/form', 'form');

Route::get('/auth/line', [App\Http\Controllers\Auth\LineOAuthController::class, 'redirectToProvider'])->name('auth_line');

Route::get('/auth/line/callback', [App\Http\Controllers\Auth\LineOAuthController::class, 'handleProviderCallback'])->name('auth_line_callback');
