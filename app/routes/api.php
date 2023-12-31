<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\DealerCreditController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('banks', BankController::class)->except(['show', 'update']);
Route::apiResource('dealers', DealerController::class)->except(['show', 'update']);
Route::apiResource('dealer-credits', DealerCreditController::class);

