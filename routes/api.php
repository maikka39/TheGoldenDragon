<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\MenuItemsController;
use App\Http\Controllers\Api\OrdersController;
use Illuminate\Support\Facades\Route;

Route::get('/menuitems', [MenuItemsController::class, 'items']);
Route::get('/menuitems/pdf', [MenuItemsController::class, 'pdf']);

Route::get('/orders/items', [OrdersController::class, 'items']);
Route::post('/orders/create', [OrdersController::class, 'create']);

Route::get('/categories', [MenuItemsController::class, 'categories']);

Route::post('/login', [AuthenticationController::class, 'login']);
