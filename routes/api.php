<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\DiscountsController;
use App\Http\Controllers\Api\MenuItemsController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\DailyReportsController;
use Illuminate\Support\Facades\Route;

Route::get('/menuitems', [MenuItemsController::class, 'items']);
Route::put('/menuitems', [MenuItemsController::class, 'update']);
Route::get('/menuitems/pdf', [MenuItemsController::class, 'pdf']);

Route::get('/orders/items', [OrdersController::class, 'items']);
Route::post('/orders/create', [OrdersController::class, 'create']);

Route::get('/discounts/items', [DiscountsController::class, 'items']);
Route::post('/discounts/create', [DiscountsController::class, 'create']);

Route::get('/categories', [MenuItemsController::class, 'categories']);

Route::get('/daily_reports', [DailyReportsController::class, 'items']);

Route::post('/login', [AuthenticationController::class, 'login']);
