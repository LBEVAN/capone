<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repository\IProductRepository;
use App\Model\Cart;

class StoreController extends Controller {

    public function __construct(IProductRepository $productRepository) {
	    $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = $this->productRepository->getProducts();

        return View::make('store.index')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name) {
        $product = $this->productRepository->getProductByName($name);

        return View::make('store.show')->with('product', $product);
    }

    /**
     * Add the specified product to the cart.
     *
     * @param \Illuminate\Http\Request  $request
     * @param int $productId
     */
    public function addToCart(Request $request, $productId) {
        // get data
        $sizeCode = $request->get('size');
        $product = $this->productRepository->getProductById($productId);
        $productVariant = $product->getProductVariant($sizeCode);

        // update cart
        $cart = Cart::getCart();
        $cart->add($product, $productVariant);
        Cart::updateCart($cart);

        // redirect
        return redirect()->back();
    }

    /**
     * Remove the specified product to the cart.
     *
     * @param int $cartEntryId
     */
    public function removeFromCart($cartEntryId) {
        // update cart
        $cart = Cart::getCart();
        $cart->remove($cartEntryId);
        Cart::updateCart($cart);

        // redirect
        return redirect()->back();
    }
}
