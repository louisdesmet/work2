<?php

namespace App\Http\Resources\Whmcs;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
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
            'status' => $this->status,




            'billing' => null,
            'domain' => null,
            'tenant' => null,
            'email' => null,
            'amount' => null,
            'date' => $this->regdate,
            'reference' => null,


            'product' => new Product($this),



            'user' => [],
            'product_key' => null,
            'order_details' => OrderDetail::collection(collect($this->configoptions->configoption)),
        ];
    }
}
