<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
//insert data meggunakan post

Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update');
// update data menggunakan put atau patch

Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
// update data menggunakan put atau patch

Route::resource('book', BookController::class);

