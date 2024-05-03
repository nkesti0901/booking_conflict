<?php

namespace App\Services\Booking;

use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingDataRepository
{
    public function lookingConflictsByDate(string $date)
    {
        $conflictBookings = DB::select("SELECT
            a.id AS Booking1_ID,
            b.id AS Booking2_ID
        FROM
            bookings a,
            bookings b
        WHERE
            a.id < b.id  -- Ensures each pair is only listed once, in one order
          AND a.date = b.date
          AND a.date = '" . $date ."'
          AND (
            a.start_time < b.end_time AND a.end_time > b.start_time -- Overlap condition
            )
        ");

        $conflictsArray = [];
        foreach ($conflictBookings as $conflictBookings) {
            array_push($conflictsArray, $conflictBookings->Booking1_ID, $conflictBookings->Booking2_ID);
        }
        $conflictsArray = array_unique($conflictsArray);
        return Booking::whereIn('id', $conflictsArray)->get();
    }
}
