<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);
Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);
Route::get('hello/show', [HelloController::class, 'show']);
Route::get('person', [PersonController::class, 'index']);
Route::get('person/find', [PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);

