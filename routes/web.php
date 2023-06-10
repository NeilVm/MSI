<?php

use App\Http\Controllers\HojacontroldController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TPenalidadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/css/login.css', function () {
    return response(file_get_contents(public_path('css/login.css')), 200)
        ->header('Content-Type', 'text/css');
});

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('home');
//Route::resource('hojacontrolds', HojacontroldController::class);
Route::resource('users', UserController::class);
Route::resource('t-penalidads', TPenalidadController::class);
Route::get('/hojacontrolds', [HojacontroldController::class, 'index'])->name('hojacontrolds.index');
Route::get('/t-penalidads', [HojacontroldController::class, 'index'])->name('t-penalidads.index');
Route::get('/hojacontrolds/create', [HojacontroldController::class, 'create'])->name('hojacontrolds.create');
Route::delete('/hojacontrolds/{id}', [HojacontroldController::class, 'destroy'])->name('hojacontrolds.destroy');
Route::get('/hojacontrolds/{id}', [HojacontroldController::class, 'show'])->name('hojacontrolds.show');
Route::get('/hojacontrolds/{id}/edit', [HojacontroldController::class, 'edit'])->name('hojacontrolds.edit');
Route::get('/t-penalidads/create', [HojacontroldController::class, 'create'])->name('t-penalidads.create');
Route::delete('/t-penalidads/{id}', [HojacontroldController::class, 'destroy'])->name('t-penalidads.destroy');
Route::get('/t-penalidads/{id}', [HojacontroldController::class, 'show'])->name('t-penalidads.show');
Route::get('/t-penalidads/{id}/edit', [HojacontroldController::class, 'edit'])->name('t-penalidads.edit');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
