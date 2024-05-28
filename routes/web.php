<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
 Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
 Route::get('employee\show', [\App\Http\Controllers\employee_con::class, 'show'])->name('employee.show');
 Route::get('employee/{id}/edit', [\App\Http\Controllers\employee_con::class, 'edit']);
 Route::put('employee/{id}/edit', [\App\Http\Controllers\employee_con::class, 'update']);
Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

 
    Route::get('employee', [\App\Http\Controllers\employee_con::class, 'index'])->name('employee.index');
    Route::post('employee', [\App\Http\Controllers\employee_con::class, 'store']);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

});

