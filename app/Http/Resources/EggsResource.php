<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EggsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            "id" => (string)$this->id,
            "attributes" => 
            [
                "quantity" => (string)$this->quantity,
                "size" => (string)$this->size,
                "user" => (string)$this->user,
                
            ]
        ];
    }
}
