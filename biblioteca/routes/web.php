<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarreraController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/show', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::get('/students/destroy', [StudentController::class, 'destroy'])->name('students.destroy');



Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');

Route::get('/carreras/show', [CarreraController::class, 'show'])->name('carreras.show');

Route::get('/carreras/edit', [CarreraController::class, 'edit'])->name('carreras.edit');

Route::get('/carreras/destroy', [CarreraController::class, 'destroy'])->name('carreras.destroy');
