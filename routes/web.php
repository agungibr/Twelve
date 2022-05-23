<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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
    return view('dashboard');
});

// Route::resource('/reservations', ReservationController::class);
Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/store', [ReservationController::class, 'store'])->name('reservation.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/index', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/edit/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::post('/update/{id}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/destroy/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

});


