<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'status', 'role:user')->group(function () {

    Route::controller(UserController::class)->group(function () {
       Route::get('/user', 'dashboard')->name('user.dashboard');
    });

});
