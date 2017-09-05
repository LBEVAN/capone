@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@stop

@section('content')
    <form method="POST">
        <div class="product-container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ '../' . $product->imagePath }}">
                </div>

                <div class="col-md-8">
                    <div class="product-title">{{ $product->name }}</div>
                    <div class="product-description">
                        @foreach(explode(',', $product->description) as $descLine)
                            <p>{{ $descLine }}</p>
                        @endforeach
                    </div>
                    <div>
                        <div class="col-md-6">
                            <select id="size" name="size" class="form-control" required="required">
                                @foreach($product->productStock as $productStock)
                                    <option value="{{ $productStock->size->code }}">{{ $productStock->size->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block">Add to Basket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop