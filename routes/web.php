<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
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
//route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//route admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/book', [AdminController::class, 'book'])->name('admin.book')->middleware('auth');
Route::get('/admin/book/create', [AdminController::class, 'create'])->name('admin.book.create')->middleware('auth');
Route::post('/admin/book/create', [AdminController::class, 'store'])->name('admin.book.store')->middleware('auth');
Route::get('/admin/book/{id}/edit', [AdminController::class, 'edit'])->name('admin.book.edit')->middleware('auth');
Route::post('/admin/book/{id}/edit', [AdminController::class, 'update'])->name('admin.book.update')->middleware('auth');
Route::get('/admin/book/{id}/delete', [AdminController::class, 'delete'])->name('admin.book.delete')->middleware('auth');
// Route admin accept
Route::post('/admin/book/accept/{id}', [AdminController::class, 'accept'])->name('admin.accept')->middleware('auth');
// Route admin reject
Route::post('/admin/book/reject/{id}', [AdminController::class, 'reject'])->name('admin.reject')->middleware('auth');
// Route admin done
Route::post('/admin/book/done/{id}', [AdminController::class, 'done'])->name('admin.done')->middleware('auth');
// Route admin delete
Route::post('/admin/book/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware('auth');
// Route admin cancel
Route::post('/admin/book/cancel/{id}', [AdminController::class, 'cancel'])->name('admin.cancel')->middleware('auth');

//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

//route book
Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::post('/book', [BookController::class, 'booking']);
Route::resource('/mybook', MyBookController::class)->middleware('auth');

Route::get('/mybook/qrcode/{id}', [QrCodeController::class, 'index'])->name('qr.id')->middleware('auth');

Route::view("about", 'about', ["title" => "About"]);
Route::view("service", 'service', ["title" => "Service"]);
Route::view("cleaning", 'cleaning', ["title" => "Detail"]);
Route::view("detailing", 'detailing', ["title" => "Detail"]);
Route::view("coating", 'coating', ["title" => "Detail"]);
