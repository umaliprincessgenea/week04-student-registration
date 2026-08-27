<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect()->route('registration.create');
});


Route::prefix('students')->name('registration.')->group(function () {
    Route::get('/register', function () {
        return view('pages.registration');
    })->name('create');

    Route::get('/saved', function () {
        return view('pages.saved-registrations');
    })->name('index');
});