<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'body' => $this->resource->body,
            'sender' => [
                'id' => $this->resource->sender->id,
                'name' => $this->resource->sender->name,
                'avatar' => $this->resource->sender->avatar,
            ],
            'sender_id' => $this->resource->sender_id,
            'receiver_id' => $this->resource->receiver_id,
            'read_at' => $this->resource->read_at?->toISOString(),
            'created_at' => $this->resource->created_at?->toISOString(),
        ];
    }
}
