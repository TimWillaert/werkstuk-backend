<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Spreker extends JsonResource
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
            'description' => $this->description,
            'keywords' => [
                'keyword1' => $this->keywords[0]->name,
                'keyword2' => $this->keywords[1]->name,
                'keyword3' => $this->keywords[2]->name
            ],
            'website' => $this->website,
            'profilepic' => $this->profilepic,
            'keyimages' => [
                'keyimage1' => $this->images[0]->src,
                'keyimage2' => $this->images[1]->src,
                'keyimage3' => $this->images[2]->src,
            ]
        ];
    }
}
