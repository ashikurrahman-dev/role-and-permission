<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'authLogin']);


Route::get('/panel/dashboard', [DashboardController::class, 'dashboard']);