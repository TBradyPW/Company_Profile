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
    return view('About');
})->name('About');

Route::get('/Portofolio', function () {
    return view('Portofolio');
})->name('Portofolio');

Route::get('/Services', function () {
    return view('Services');
})->name('Services');

Route::get('/News', function () {
    return view('News');
})->name('News');

Route::get('/Career', function () {
    return view('Career');
})->name('Career');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/News/Post', function () {
    return view('singlepost');
})->name('singlepost');





Route::get('/about_layout', function () {
    return view('about_layout');
});
