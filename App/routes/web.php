<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WrongTestController; 

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [WrongTestController::class, 'index']);
