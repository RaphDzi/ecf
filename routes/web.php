<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;


// toutes les routes de reservation
Route::resource('reservations', ReservationController::class);

Route::get('/', function () {
    return view('index');
})->name('home');
