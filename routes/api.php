<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

Route::get('/books', [BookController::class, 'list']);

Route::post('/loans', [LoanController::class, 'store']);

Route::post('/returns/{loan_id}', [LoanController::class, 'update']);