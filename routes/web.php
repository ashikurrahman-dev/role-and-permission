<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'authLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'userAdmin'], function (){

    Route::get('/panel/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/panel/role', [RoleController::class, 'list']);
    Route::get('/panel/role/add', [RoleController::class, 'add']);
    Route::post('/panel/role/add', [RoleController::class, 'insert']);
    Route::get('/panel/role/edit/{id}', [RoleController::class, 'edit']);
    Route::post('/panel/role/edit/{id}', [RoleController::class, 'update']);
    Route::get('/panel/role/delete/{id}', [RoleController::class, 'delete']);

});