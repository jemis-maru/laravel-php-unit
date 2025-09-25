<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [CalculatorController::class, 'add']);
Route::get('/subtract', [CalculatorController::class, 'subtract']);
