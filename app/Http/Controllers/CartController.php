<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repository\IProductRepository;
use App\Model\Cart;

class CartController extends Controller {

    public function __construct(IProductRepository $productRepository) {
	    $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return View::make('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // get data
        $sizeCode = $request->get('sizeCode');
        $productId = $request->get('productId');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // get data
        $quantity = $request->get('quantity');

        // update cart
        $cart = Cart::getCart();
        $cart->updateQuantity($id, $quantity);
        Cart::updateCart($cart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // update cart
        $cart = Cart::getCart();
        $cart->remove($id);
        Cart::updateCart($cart);

        // redirect
        return redirect()->back();
    }

    /**
     * Remove all of resources from storage.
     *
     * @return \Illuminate\Http\Response
     */
     public function destroyAll() {
        // update cart
        $cart = Cart::getCart();
        $cart->removeAll();
        Cart::updateCart($cart);

        // redirect
        return redirect()->back();
    }
}
