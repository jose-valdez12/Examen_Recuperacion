<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Ruta para la vista de Registros
Route::get('/home', [\App\Http\Controllers\LibroController::class, 'index'])->name('home');


//Rutas Registro
Route::get('/libro', [\App\Http\Controllers\LibroController::class, 'index'])->name('libro.index');
Route::get('/libro/create', [\App\Http\Controllers\LibroController::class, 'create'])->name('libro.create');
Route::post('/libro', [\App\Http\Controllers\LibroController::class, 'store'])->name('libro.store');
Route::get('/libro/{id}/edit', [\App\Http\Controllers\LibroController::class, 'edit'])->name('libro.edit');
Route::put('/libro/{id}', [\App\Http\Controllers\LibroController::class, 'update'])->name('libro.update');
Route::delete('/libro/{id}', [\App\Http\Controllers\LibroController::class, 'destroy'])->name('libro.destroy');

