<?php

namespace Tests\Unit\Booking;

use App\Services\Booking\BookingDataRepository;
use App\Services\Booking\BookingService;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class BookingServiceTest extends TestCase
{
    private $repositoryMock;
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repositoryMock = $this->createMock(BookingDataRepository::class);
        $this->service = new BookingService($this->repositoryMock);
    }

    /**
     * @return void
     */
    public function testLookingConflictsByDate(): void
    {
        $date = fake()->date();
        $expectedResult = ['booking1', 'booking2'];

        $this->repositoryMock
            ->method('lookingConflictsByDate')
            ->with($date)
            ->willReturn($expectedResult);

        $result = $this->service->lookingConflictsByDate($date);

        $this->assertEquals($expectedResult, $result);
    }
}
