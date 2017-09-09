<?php

namespace App\Model;

use App\Model\CartEntry;
use Session;

class Cart {

    private static $CART_KEY = 'cart';

    private $entries = null;
    private $totalQuantity = 0;
    private $totalPrice = 0;

    /**
     * Add a product and its variant to the cart.
     *
     * @param App\Model\Product $product
     * @param App\Model\entriestock $product
     */
    public function add($product, $productVariant) {
        // generate unique id, and create the cart entry
        $storedId = $this->generateId($product->id, $product->name, $productVariant->size);
        $storedProduct = new CartEntry($storedId, $product, $productVariant, 0, $product->price);
        
        if($this->entries && array_key_exists($storedId, $this->entries)) {
            // get the existing product to update
            $storedProduct = $this->entries[$storedId];
        }

        // update cart entry details
        $quantity = $storedProduct->getQuantity();
        $storedProduct->setQuantity(++$quantity);
        $storedProduct->setPrice($product->price * $storedProduct->getQuantity());

        // set the new entry
        $this->entries[$storedId] = $storedProduct;

        // update cart details
        $this->totalQuantity++;
        $this->totalPrice += $product->price;
    }

    /**
     * Remove the specified cart entry from the cart.
     * 
     * @param int $cartEntryId
     */
    public function remove($cartEntryId) {
        // get the product to update the cart details
        $entry = $this->entries[$cartEntryId];

        $this->totalQuantity -= $entry->getQuantity();
        $this->totalPrice -= $entry->getPrice();

        unset($this->entries[$cartEntryId]);
    }

    /**
     * Remove all entries from the cart.
     */
    public function removeAll() {
        $this->entries = null;
        $this->totalQuantity = 0;
        $this->totalPrice = 0;
    }

    /**
     * Generate a unique Id for a cart entry.
     *
     * @param int $id
     * @param string $name
     * @param string $size
     */
    private static function generateId($id, $name, $size) {
        return md5($id . $name . $size);
    }

    /**
     * Get the cart from the session. 
     * If one doesn't exist, return a new cart.
     *
     * @return App\Model\Cart
     */
    public static function getCart() {
        if(Session::has(self::$CART_KEY)) {
            return Session::get(self::$CART_KEY);
        } else {
            return new Cart();
        }
    }

    /**
     * Set the updated cart to the session.
     *
     * @param App\Model\Cart $cart
     */
    public static function updateCart($cart) {
        Session::put(self::$CART_KEY, $cart);
    }


    /**
     * Getters and Setters
     */

    public function getEntries() {
        return $this->entries;
    }

    public function getTotalQuantity() {
        return $this->totalQuantity;
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }
}