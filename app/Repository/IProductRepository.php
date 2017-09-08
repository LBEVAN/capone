<?php

namespace App\Repository;

interface IProductRepository {

    public function getProducts();

    public function getProductById($id);

    public function getProductByName($name);
}