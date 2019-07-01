<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productOptions() {
        return $this->hasMany('App\ProductOption');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }

    public function prices() {
        return $this->hasMany('App\Price');
    }

}
