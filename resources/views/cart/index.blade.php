@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="page-header">Cart</div>
        @component('component.cart', ['view' => 'full', 'numToShow' => 0])@endcomponent
    </div> 
@stop