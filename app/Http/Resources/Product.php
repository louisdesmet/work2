<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'image' => $this->image,
//            'brand' => new Brand($this->whenLoaded('brand')),
            'category' => new Category($this->whenLoaded('category')),
            'vendor' => new Vendor($this->whenLoaded('vendor')),
            'prices' => Price::collection($this->whenLoaded('prices')),
            'options' => ProductOption::collection($this->whenLoaded('productOptions'))
        ];
    }
}
