<?php

namespace App\Http\Resources\Whmcs;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
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
            'first_name' => $this->firstname,
            'last_name' => $this->lastname,
            'name' => $this->firstname . ' ' . $this->lastname,
            'company' => $this->companyname,
            'address' => $this->address1,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'country' => $this->country,
            'phonenumber' => $this->phonenumber,
            'email' => $this->email,
            'state' => $this->state,
            //'enduser' => (count($this->resellers) ? 0 : 1)
        ];
    }


}
