<?php

namespace App\Http\Resources;

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
            'billing' => $this->billing,
            'domain' => $this->domain,
            'tenant' => $this->tenant,
            'email' => $this->email,
            'amount' => $this->amount,
            'date' => $this->date,
            'reference' => $this->reference,
            'product' => new Product($this->whenLoaded('product')),
            'user' => new User($this->whenLoaded('user')),
            'product_key' => new ProductKey($this->whenLoaded('productKey')),
            'order_details' => OrderDetail::collection($this->whenLoaded('orderDetails')),
        ];
    }
}
