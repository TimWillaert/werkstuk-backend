<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Partner extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'level' => $this->level,
            'website' => $this->website,
            'img' => $this->img
        ];
    }
}
