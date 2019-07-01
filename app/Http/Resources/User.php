<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'name' => $this->name,
            'email' => $this->email,
            'company' => $this->company,
            'address' => $this->address,
            'state' => $this->state,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'country' => $this->country,
            'phonenumber' => $this->phonenumber,
            'users' => User::collection($this->whenLoaded('users')),
            'enduser' => (count($this->resellers) ? 0 : 1)
        ];
    }
}
