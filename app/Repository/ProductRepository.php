<?php

namespace App\Repository;

use App\Model\Product;

class ProductRepository implements IProductRepository {

    public function getProducts() {
        return Product::all();
    }

    public function getProductById($id) {
        return Product::find($id);
    }

    public function getProductByName($name) {
        return Product::where('name', $name)->first();
    }
}