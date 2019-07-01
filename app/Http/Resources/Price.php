<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Price extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'billing' => $this->billing,
            'level' => $this->level,
            'price' => $this->price,
            'lang' => $this->lang,
            'users' => $this->users,
            'duration' => $this->duration,
            'system' => $this->system

        ];
    }
}
