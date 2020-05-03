<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sessie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'speaker' => [
                'id' => $this->spreker->id,
                'name' => $this->spreker->name
            ],
            'description' => $this->description,
            'date' => $this->date,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'location' => $this->location,
        ];
    }
}
