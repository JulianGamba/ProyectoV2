<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing-acond', function () {
    return view('landing-acond');
});

Route::get('/landing-camp', function () {
    return view('landing-camp');
});

Route::get('/landing-entre', function () {
    return view('landing-entre');
});

Route::get('/landing', function () {
    return view('landing');
});

// Rutas del modulo de campeonatos

// Route::get('/vercampeonato', function () {
//     return view('vercampeonato');
// });

Route::get('/crearcampeonato', function () {
    return view('crearcampeonato');
});

// Route::get('/editarcampeonato/{id_campeonato}', function () {
//     return view('editarcampeonato');
// });

// Rutas del controlador de login, register y logout, con rutas de login, register y dashboard 

use App\Http\Controllers\Auth\LoginRegisterController;

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
    Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});

// Rutas del controlador del CRUD
// Ruta del Read para mostrar información del campeonato
Route::get('/vercampeonato', [App\Http\Controllers\CrudController::class, 'index'])->name('crud.index');
// Ruta del crear campeonato

// Route::get('/crearcampeonato', [App\Http\Controllers\CrudController::class, 'create'])->name('crud.create');

// Ruta del Create para registrar
Route::post('/crearcampeonato', [App\Http\Controllers\CrudController::class, 'create'])->name('crud.create');

// Ruta del editar para modificar
// Route::post('/actualizarcampeonato', [App\Http\Controllers\CrudController::class, 'update'])->name('crud.update');

// Route::post('/editarcampeonato', [App\Http\Controllers\CrudController::class, 'update'])->name('crud.update');

// Route::get('/editarcampeonato/{id_campeonato}', [App\Http\Controllers\CrudController::class, 'edit'])->name('crud.edit');

Route::get('/campeonato/{id_campeonato}/edit', [App\Http\Controllers\CrudController::class, 'edit'])->name('campeonato.edit');
Route::put('/campeonato/{id_campeonato}', [App\Http\Controllers\CrudController::class, 'update'])->name('campeonato.update');
