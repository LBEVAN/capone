<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';

    public function productStock() {
        return $this->hasMany('App\Model\ProductStock', 'productId');
    }

    public function getProductVariant($sizeCode) {
        $variants = $this->productStock;
        $variantToReturn = null;
        
        foreach($variants as $variant) {
            if($variant->size->code == $sizeCode) {
                $variantToReturn = $variant;
                break;
            }
        }

        return $variantToReturn;
    }

    public function isStockAvailable() {
        $count = 0;

        foreach($this->productStock as $productStock) {
            if($productStock->quantity > 0) {
                $count++;
            }
        }

        return $count > 0;
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
