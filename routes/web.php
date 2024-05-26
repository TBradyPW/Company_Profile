<?php

use App\Http\Controllers\Data;
use App\Http\Controllers\homecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/' , [homecontroller::class ,'dashboard']);
Route::get('/user' , [homecontroller::class,'GetData'])->name('index');
Route::get('/create' , [homecontroller::class, 'create'])->name('New.User');
route::post('/store' , [homecontroller::class, 'store'])->name('Store.User');

route::get('/edit/{id}' , [homecontroller::class, 'Edit'])->name('Edit.User');
route::put('/edit/{id}' , [homecontroller::class, 'update'])->name('Update.User');



