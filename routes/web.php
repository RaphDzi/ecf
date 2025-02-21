<?php

use App\Http\Controllers\CoursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

// toutes les routes de reservation
Route::resource('reservations', ReservationController::class);

// toutes les routes de cours
Route::resource('cours', CoursController::class);

// Route principale de la page d'accueil avec nom 'home'


// Route pour l'index avec le contrôleur
//Route::get('/cours/index', [CoursController::class, 'index'])->name('cours.index');
//Route::get('/cours/create', [CoursController::class, 'create'])->name('cours.create');
//Route::get('/cours/{cours}', [CoursController::class, 'show'])->name('cours.show');
//Route::post('/cours', [CoursController::class, 'store'])->name('cours.store');
//Route::get('/cours/{cour}/edit', [CoursController::class, 'edit'])->name('cours.edit');
//Route::put('/cours/{cours}', [CoursController::class, 'update'])->name('cours.update');
//Route::delete('/cours/{cours}', [CoursController::class, 'destroy'])->name('cours.destroy');


Route::view('/', 'welcome')->name('home');
