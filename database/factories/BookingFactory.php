<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $reservationDate = Carbon::now()
            ->addDays(random_int(1, 30));
        $startTime = $reservationDate->addhours(random_int(9, 16));
        return [
            'patient_id' => User::factory()->create(),
            'date' => $reservationDate->toDateString(),
            'start_time' => $startTime->toTimeString(),
            'end_time' => $startTime->addHour()->toTimeString(),
            'comment' => fake()->text,
        ];
    }
}
