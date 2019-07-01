<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function productOption()
    {
        return $this->belongsTo('App\ProductOption', 'product_option_id');
    }
}
