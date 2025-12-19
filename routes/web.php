<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController; // Add this import

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->group(function () {

    // Login form
Route::get('login', [AdminController::class, 'create'])->name('admin.login');
// Dashboard routes for admin
Route::resource('dashboard', AdminController::class)->only(['index']);
    
    // ... other admin routes
});

