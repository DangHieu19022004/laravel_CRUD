<?php

use App\Http\Controllers\FlowerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlowerController::class, 'index']);

Route::resource('flowers', FlowerController::class);
