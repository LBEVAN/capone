<?php

namespace App\Model;

class CartEntry {

    private $id;
    private $product;
    private $productVariant;
    private $quantity;
    private $price;

    public function __construct($id, $product, $productVariant, $quantity, $price) {
        $this->id = $id;
        $this->product = $product;
        $this->productVariant = $productVariant;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getProductVariant() {
        return $this->productVariant;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        print_r($quantity);
        $this->quantity = $quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}