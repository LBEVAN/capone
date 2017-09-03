<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model {
    
    protected $table = 'productStock';

    public function size() {
        return $this->belongsTo('App\Model\Size', 'sizeId');
    }
}
