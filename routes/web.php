<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;

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

Route::get('/jurusans', [JurusanController::class, 'index'])->name('jurusans.index');
Route::get('/jurusans/create', [JurusanController::class, 'create'])->name('jurusans.create');
Route::post('/jurusans/store', [JurusanController::class, 'store'])->name('jurusans.store');
Route::get('/jurusans/{ini}', [JurusanController::class, 'show'])->name('jurusans.show');
Route::get('/jurusans/{ini}/edit', [JurusanController::class, 'edit'])->name('jurusans.edit');
Route::patch('/jurusans/{ini}', [JurusanController::class, 'update'])->name('jurusans.update');
Route::delete('/jurusans/{ini}', [JurusanController::class, 'destroy'])->name('jurusans.destroy');

Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/dosens/create', [DosenController::class, 'create'])->name('dosens.create');
Route::post('/dosens/store', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/dosens/{ini}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('/dosens/{ini}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
Route::patch('/dosens/{ini}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/dosens/{ini}', [DosenController::class, 'destroy'])->name('dosens.destroy');