<?php

use App\Http\Controllers\BookingConflictController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::name('web.')->group(function () {
    Route::prefix('booking')->name('booking.')->group(function () {
        Route::controller(BookingConflictController::class)
            ->prefix('conflict')->name('conflict.')->group(function () {
                Route::get('/', 'index')->name('index');
            });
    });
});
