<?php

use App\Http\Controllers\AsesmenController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/rumah', function () {
   return view('dashboard');
});
Route::get('/assesment', function () {
   return view('assesment.index');
});
Route::get('/create', function () {
   return view('assesment.create');
});
Route::get('/', function () {
   return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('asesmen', AsesmenController::class);
