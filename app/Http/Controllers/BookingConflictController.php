<?php

namespace App\Http\Controllers;

use App\Helpers\InternalApiCall;
use App\Http\Requests\BookingConfilictRequest;
use App\Services\Booking\BookingService;

class BookingConflictController extends Controller
{
    public function __construct(private readonly BookingService $bookingService)
    {
    }
    public function index(BookingConfilictRequest $request) {
        $conflictsByDate = $this->bookingService->lookingConflictsByDate($request->date);
        return view('booking.conflicts.date.index')
            ->with('conflicts', $conflictsByDate);
    }
}
