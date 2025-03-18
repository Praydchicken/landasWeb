<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthenticateController;

Route:: middleware('guest')->group ( function () {





    // -------------------------- REGISTER ROUTE -------------------------- //
    Route::get('/register', [RegisterController::class, 'create'])->name('register');

    Route::post('/register', [RegisterController::class, 'store']);


    Route::get('/login', [AuthenticateController::class, 'create'])->name('login');

    Route::post('/login', [AuthenticateController::class, 'store']);

});
