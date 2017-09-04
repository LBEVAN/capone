<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';

    public function productStock() {
        return $this->hasMany('App\Model\ProductStock', 'productId');
    }

    /**
    * Get the route key for the model.
    *
    * @return string
    */
    public function getRouteKeyName() {
        return 'name';
    }
}
