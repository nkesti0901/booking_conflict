<?php

namespace App\Http\Controllers\API\V1\Booking\Conflict;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingConfilictRequest;
use App\Http\Resources\BookingResource;
use App\Services\Booking\BookingService;

class BookingConflictController extends Controller
{
    public function __construct(private readonly BookingService $bookingService)
    {
    }
    public function index(BookingConfilictRequest $request) {
        return BookingResource::collection($this->bookingService->lookingConflictsByDate($request->date));
    }
}
