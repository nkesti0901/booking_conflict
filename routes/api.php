<?php

use App\Http\Controllers\BookingConflictController;
use Illuminate\Support\Facades\Route;


Route::get('/booking/conflict', [BookingConflictController::class, 'index'])->name('booking.conflict.index');
