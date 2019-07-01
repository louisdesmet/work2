<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductKey extends JsonResource
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
            'key' => $this->key,
            'language' => $this->language,
            'duration' => $this->duration,
            'users' => $this->users,
//            'user' => new User($this->whenLoaded('user')),
//            'product' => new Product($this->whenLoaded('product')),
        ];
    }
}
