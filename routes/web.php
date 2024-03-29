<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

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

Route::get('/', [GeneralController::class,'home'])->name('home');
Route::get('/article/create',[GeneralController::class,'create'])->name('article.create');
Route::get('/article/showAll',[GeneralController::class,'showA'])->name('article.showAll');
Route::get('/article/update/{article}',[GeneralController::class,'update'])->name('article.update');
Route::get('/article/delete/{article}',[GeneralController::class,'delete'])->name('article.delete');