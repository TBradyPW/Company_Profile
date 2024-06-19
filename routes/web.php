<?php

use App\Http\Controllers\MainController;
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
    // return redirect('/home');
    Route::get('/', [MainController::class, 'Index']);
})->name('Home');

Route::get('/home', function () {
    return view('Home');
})->name('Home');

Route::get('/about', function () {
    return view('about');
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

Route::get('/News/Post/{id}', function ($id) {
    return view('singlepost', ['id' => $id]);
});

Route::get('/about_layout', function () {
    return view('about_layout');
});
