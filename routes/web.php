<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Docs;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('docs')->group(function () {
    Route::prefix('todo')->group(function () {
        Route::get('get-all', [Docs\TodoController::class, 'index']);
        Route::get('add-new', [Docs\TodoController::class, 'store']);
        Route::get('update', [Docs\TodoController::class, 'update']);
        Route::get('delete', [Docs\TodoController::class, 'delete']);
        Route::get('show', [Docs\TodoController::class, 'show']);
    });

});
