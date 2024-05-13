<?php

use App\Http\Controllers\API\V1\Booking\Conflict\BookingConflictController;
use Illuminate\Support\Facades\Route;


Route::get('/booking/conflict', [BookingConflictController::class, 'index'])->name('booking.conflict.index');
