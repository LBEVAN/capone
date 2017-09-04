@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/store.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="page-header">Products</div>

    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="product">
                    <a href="{{ route('store.show', $product) }}">
                        <img src="images/items/babyPinkHoodie1.png">
                    </a>
                    <div class="product-block">
                        <figure class="profile">
                            <img src="images/items/babyPinkHoodie1.png" class="profile-avatar" alt="">
                        </figure>

                        <span class="product-title">{{ $product->name }}</span> 
                        <span class="product-price">£{{ $product->price }}</span>

                        <div class="product-footer">
                            <div class="product-footer-left">
                                <label for="size" style="padding-right: 5px;">Size:</label>
                                <select id="size" name="size" class="form-control" style="width: 60%;" required="required">
                                    @foreach($product->productStock as $productStock)
                                        <option value="{{ $productStock->size->code }}">{{ $productStock->size->description }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="product-footer-right">
                                <button class="btn btn-default">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop