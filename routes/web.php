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
Route::get('/', function () {
    return view('Index');
})->name('Index');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/Portofolio', function () {
    return view('portofolio');
})->name('Portofolio');




Route::get('/about_layout', function () {
    return view('about_layout');
});
