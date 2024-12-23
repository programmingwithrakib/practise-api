<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Docs;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('docs')->group(function () {
    Route::get('todo', [Docs\TodoController::class, 'index']);
});
