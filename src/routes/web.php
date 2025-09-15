<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

Route::get('/product', [ProductController::class, 'index']);

/* demo 01 */
Route::get('default-attribute-value', [TestController::class, 'defaultAttributeValue']);

/* demo 02 */
Route::get('boot-eloquent-trait', [TestController::class, 'bootEloquentTrait']);

/* demo 03 */
Route::get('appends', [TestController::class, 'appends']);

