<?php

use App\Http\Controllers\BookingConflictController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::get('/booking/conflict', [BookingConflictController::class, 'index'])->name('booking.conflict.index');
