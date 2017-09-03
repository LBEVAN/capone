<?php

namespace App\Repository;

use App\Model\Product;

class ProductRepository implements IProductRepository {

    public function getProducts() {
        return Product::all();
    }
}