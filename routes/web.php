<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
<<<<<<< HEAD

    // TICKET #005: só usuários logados podem enviar perguntas
    Route::post('/eventos/{id}/perguntas', [EventoController::class, 'storePergunta'])->name('eventos.perguntas.store');
=======
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3
});


Route::get('/', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');
<<<<<<< HEAD
=======
Route::post('/eventos/{id}/perguntas', [EventoController::class, 'storePergunta'])->name('eventos.perguntas.store');
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3


Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');


