<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return response()->json([
        'message' => 'Laravel PHPUnit Demo API',
        'status' => 'OK',
        'timestamp' => now()
    ]);
});

Route::get('/health', function () {
    return response()->json(['status' => 'healthy']);
});

Route::get('/add', [CalculatorController::class, 'add']);
Route::get('/subtract', [CalculatorController::class, 'subtract']);
