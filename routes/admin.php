<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'status', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'dashboard')->name('admin.dashboard');
    });
});
