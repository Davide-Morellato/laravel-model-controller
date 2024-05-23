<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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

Route::get('/',[PageController::class, 'index'])->name('movie');

Route::get('/joke', function () {
    return view('joke');
})->name('joke');


Route::get('/cat', function () {
    return view('cat');
})->name('cat');


Route::get('/secret', function () {
    return view('secret');
})->name('secret');


Route::get('/chiSiamo', function () {
    return view('chiSiamo');
})->name('noi');


Route::get('/servizioClienti', function () {
    return view('servizioClienti');
})->name('telefono');
