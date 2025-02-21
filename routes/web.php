<?php

use App\Http\Controllers\CoursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

// toutes les routes de reservation
Route::resource('reservations', ReservationController::class);


// toutes les routes de cours
Route::delete('/cours/{cours}', [CoursController::class, 'destroy'])->name('cours.destroy');
Route::resource('cours', CoursController::class);

// Route principale de la page d'accueil avec nom 'home'
Route::view('/', 'welcome')->name('home');
