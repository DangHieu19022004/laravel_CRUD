<?php

use App\Models\Borrowing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowingController;

Route::get('/', [BorrowingController::class, 'index']);

Route::resource('borrowings', BorrowingController::class);
