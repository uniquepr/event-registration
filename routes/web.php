<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('address-istanbul', function () {
    return view('istanbulAddress');
});
Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'store'])->name('register.store');