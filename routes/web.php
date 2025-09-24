<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'store'])->name('register.store');