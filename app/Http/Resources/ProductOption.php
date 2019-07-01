<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductOption extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'msname' => $this->msname,
            'code' => $this->code,
            'group' => $this->group,
            'text' => $this->text,
            'prices' => Price::collection($this->whenLoaded('prices'))
        ];
    }
}
