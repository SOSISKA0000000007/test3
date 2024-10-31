<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', [BooksController::class, 'index']);
Route::get('/user/{id}', [BooksController::class, 'show'])->name('user');
