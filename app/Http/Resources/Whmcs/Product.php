<?php

namespace App\Http\Resources\Whmcs;

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
            'id' => $this->pid,
            'name' => $this->translated_name,
            'image' => 'office365.png',
        ];
    }
}
