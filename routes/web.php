<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/admin',[UserController::class, 'index'])->name('admin');
Route::delete('/admin/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/{user}', [UserController::class, 'update'])->name('users.update');

Route::get('/book', [BookController::class, 'index'])->name('admin.books');
Route::post('/book/store', [BookController::class, 'store'])->name('store');
Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/book/{book}', [BookController::class, 'update'])->name('books.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
