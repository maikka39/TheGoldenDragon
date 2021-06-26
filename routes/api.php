<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\MenuItemsController;
use Illuminate\Support\Facades\Route;

Route::get('/menuitems', [MenuItemsController::class, 'items']);
Route::get('/menuitems/pdf', [MenuItemsController::class, 'pdf']);

Route::post('/login', [AuthenticationController::class, 'login']);
