<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');
Route::get('/salma', function () {
    return view('first');
});
Route::get('/book', [BookController::class, 'index'])->name('admin.books');
Route::post('/book/store', [BookController::class, 'store'])->name('store');
Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/book/{book}', [BookController::class, 'update'])->name('books.update');