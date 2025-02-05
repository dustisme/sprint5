<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user' => $this->user_id,
            'dice 1' => $this->dice_1,
            'dice 2' => $this->dice_2,
            'result' => $this->result,
            'played' => $this->created_at,
        ];
    }
}
