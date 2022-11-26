<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;

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


Route::get('/', [Productos::class,'index']);
Route::POST('/store' , [App\Http\Controllers\Productos::class, 'store'])->name('store');

Route::get('/edit/{id}', [Productos::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Productos::class, 'update'])->name('update');
Route::get('/show/{id}', [Productos::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Productos::class, 'destroy'])->name('destroy');
