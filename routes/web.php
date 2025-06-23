<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
})->name('home');

Route::get('/signup',[SignupController::class, 'create']);
Route::get('/login',[LoginController::class, 'create']);
