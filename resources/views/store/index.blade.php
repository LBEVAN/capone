@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/store.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="page-header">Products</div>

    @include('component.messages')

    <div class="row">
        @foreach($products as $product)
            <form method="POST" action="{{ route('cart.store') }}">
                {{ csrf_field() }}
                <input type="hidden" id="productId" name=" productId" value="{{ $product->id }}" />
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="product">
                        <a href="{{ route('store.show', $product) }}">
                            <img src="{{ '../' . $product->imagePath }}">
                        </a>
                        <div class="product-block">
                            <figure class="profile">
                                <img src="{{ '../' . $product->imagePath }}" class="profile-avatar" alt="">
                            </figure>

                            <span class="product-title">{{ $product->name }}</span> 
                            <span class="product-price">£{{ $product->price }}</span>

                            <div class="product-footer">
                                <div class="product-footer-left">
                                    <label for="sizeCode" style="padding-right: 5px;">Size:</label>
                                    <select id="sizeCode" name="sizeCode" class="form-control" style="width: 60%;" required="required">
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
            </form>
        @endforeach
    </div>
@stop