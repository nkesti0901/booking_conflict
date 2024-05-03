<?php

namespace App\Services\Booking;

class BookingService
{
    public function __construct(private readonly BookingDataRepository $bookingDataRepository)
    {
    }

    public function lookingConflictsByDate(string $date)
    {
        return $this->bookingDataRepository->lookingConflictsByDate($date);
    }
}
