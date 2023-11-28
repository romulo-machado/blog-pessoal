<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FortalezaController;
use App\Http\Controllers\DiarioController;
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

Route::get('/', function () {
    return redirect('/home');
});

// Controller página inicial

Route::get('/home', [BlogController::class,'index'])->name('home');

// Controller página fortaleza

Route::get('/fortaleza', [FortalezaController::class, 'index'])->name('fortaleza.index');

Route::post('/fortaleza', [FortalezaController::class, 'store'])->name('fortaleza.store');

//========= CONTROLE PÁGINA DIÁRIO ==========

Route::get('/diario', [DiarioController::class, 'index'])->name('diario.index');

Route::put('/diario/store', [DiarioController::class, 'store'])->name('diario.store');

Route::get('/diario/{item}/edit', [DiarioController::class, 'edit'])->name('diario.edit');

Route::put('/diario/{item}/update', [DiarioController::class, 'update'])->name('diario.update');

Route::delete('/diario/{item}/delete', [DiarioController::class, 'destroy'])->name('diario.destroy');

//============ CONTROLE DIÁRIO ===========//

Route::get('/controle', [DiarioController::class, 'controle'])->name('controle.diario');

