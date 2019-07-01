<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    public function orderDetail() {
        return $this->hasOne('App\OrderDetail');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }

    public function prices() {
        return $this->hasMany('App\Price');
    }
}
