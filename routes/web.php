<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\SpendingController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/redes', [MediaController::class, 'show']);
Route::get('/verbas/{month}', [SpendingController::class, 'show']);
