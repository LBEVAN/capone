<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';

    public function productStock() {
        return $this->hasMany('App\Model\ProductStock', 'productId');
    }
}
