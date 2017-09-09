@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@stop

@section('content')
    <form method="POST" action="{{ route('cart.store') }}">
        {{ csrf_field() }}
        <input type="hidden" id="productId"name=" productId" value="{{ $product->id }}" />
        <div class="product-container">
            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4" style="text-align: -webkit-center;">
                    <img src="{{ '../' . $product->imagePath }}">
                </div>

                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="product-title">{{ $product->name }}</div>
                    <div class="product-description">
                        @foreach(explode(',', $product->description) as $descLine)
                            <p>{{ $descLine }}</p>
                        @endforeach
                    </div>
                    <div>
                        <div class="col-sm-12 col-md-5 col-lg-5" style="margin-bottom:20px;">
                            <select id="sizeCode" name="sizeCode" class="form-control" required="required">
                                @foreach($product->productStock as $productStock)
                                    <option value="{{ $productStock->size->code }}">{{ $productStock->size->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
                            <button class="btn btn-primary btn-block" type="submit">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop