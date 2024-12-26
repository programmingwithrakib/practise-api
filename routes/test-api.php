<?php

use App\Http\Controllers\Test\TestAPIController;
use Illuminate\Support\Facades\Route;

Route::any('/', [TestAPIController::class, 'getMethod']);

