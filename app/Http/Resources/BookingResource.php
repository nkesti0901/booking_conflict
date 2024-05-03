<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'time' => $this->start_time . ' - ' . $this->end_time,
            'patient' => $this->patient->name,
            'cell_number' => $this->patient->cell_number,
            'comment' => $this->comment
        ];
    }
}
