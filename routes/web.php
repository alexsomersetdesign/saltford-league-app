<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@showDashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Player Routes
Route::post('/create-player', 'App\Http\Controllers\DashboardController@createPlayer');
Route::post('/edit-player', 'App\Http\Controllers\DashboardController@createPlayer');
Route::get('/player/{id}', 'App\Http\Controllers\DashboardController@playerDetails');

//Match Routes
Route::post('/complete-match', 'App\Http\Controllers\DashboardController@completeMatch');







require __DIR__.'/auth.php';
