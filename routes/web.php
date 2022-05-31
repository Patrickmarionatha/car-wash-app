<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyBookController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::post('/book', [BookController::class, 'booking']);
Route::resource('/mybook', MyBookController::class)->middleware('auth');

Route::get('/mybook/qrcode/{id}', [QrCodeController::class, 'index'])->name('qr.id')->middleware('auth');

Route::view("about", 'about', ["title" => "About"]);
Route::view("service", 'service', ["title" => "Service"]);
Route::view("cleaning", 'cleaning', ["title" => "Detail"]);
Route::view("detailing", 'detailing', ["title" => "Detail"]);
Route::view("coating", 'coating', ["title" => "Detail"]);
