<?php

namespace App\Http\Resources\Whmcs;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductOption extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->option,
        ];
    }
}
