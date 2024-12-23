<?php

use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::post('/store', [TodoController::class, 'store']);
Route::post('/delete/{id}', [TodoController::class, 'delete']);
Route::post('/update/{id}', [TodoController::class, 'update']);
