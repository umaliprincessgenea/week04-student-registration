<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect()->route('registration.create');
});

Route::prefix('students')->name('registration.')->group(function () {
    Route::get('/register', [StudentController::class, 'create'])->name('create');
    Route::post('/register', [StudentController::class, 'store'])->name('store');
    Route::get('/saved', [StudentController::class, 'index'])->name('index');
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');
});