<?php

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

});
Route::get('/', [\App\Http\Controllers\BookController::class, 'index'])->name('home');
Route::post('create-book', [\App\Http\Controllers\BookController::class, 'create'])->name('book.create');
Route::get('book', [\App\Http\Controllers\BookController::class, 'editIndex'])->name('book.edit.index');
Route::post('book-edit', [\App\Http\Controllers\BookController::class, 'edit'])->name('book.edit');
Route::get('book-delete', [\App\Http\Controllers\BookController::class, 'delete'])->name('book.delete');
Route::get('issuance', [\App\Http\Controllers\IssuanceController::class, 'index'])->name('issuance');
Route::get('issuance-create', [\App\Http\Controllers\IssuanceController::class, 'createIndex'])->name('issuance.create.index');
Route::post('issuance-create-form', [\App\Http\Controllers\IssuanceController::class, 'create'])->name('issuance.create');


