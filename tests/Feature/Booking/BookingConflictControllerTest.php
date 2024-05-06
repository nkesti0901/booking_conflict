<?php

namespace Tests\Feature\Booking;

use App\Models\Booking;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Random\RandomException;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class BookingConflictControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     * @throws RandomException
     */
    public function testIndexMethod(): void
    {
        $date = fake()->date();
        $startTime = fake()->time();
        $endTime = date('H:i:s', (strtotime($startTime) + 3600));
        $conflictCount = random_int(2, 5);
        Booking::factory($conflictCount)->create([
            'date' => $date,
            'start_time' => $startTime,
            'end_time' => $endTime,
        ]);
        $response = $this->get(route('booking.conflict.index', ['date' => $date]));
        $conflicts = json_decode($response->getContent(), true)['data'];
        $response->assertStatus(Response::HTTP_OK);
        $this->assertEquals($conflictCount, count($conflicts));
    }
}
