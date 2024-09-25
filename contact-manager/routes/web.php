<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class,'index'])->name('index');
Route::get('/contact', [ContactController::class,'index'])->name('index');
Route::get('/contact/create', [ContactController::class,'create'])->name('create');

