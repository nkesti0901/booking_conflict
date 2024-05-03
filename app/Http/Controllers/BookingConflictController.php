<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingConfilictRequest;
use App\Http\Resources\BookingResource;
use App\Services\Booking\BookingService;
use Illuminate\Http\Request;

class BookingConflictController extends Controller
{
    public function __construct(private readonly BookingService $bookingService)
    {
    }
    public function index(BookingConfilictRequest $request) {
        return BookingResource::collection($this->bookingService->lookingConflictsByDate($request->date));
    }
}
