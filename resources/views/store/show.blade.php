@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/store.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="page-header">{{ $product->name }}</div>

    <div class="col-md-4">
        <img src="{{ '../' . $product->imagePath }}">
    </div>

    <div class="col-md-8">
        test
    </div>

   
@stop