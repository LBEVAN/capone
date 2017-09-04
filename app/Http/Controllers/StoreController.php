<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repository\IProductRepository;

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
}
