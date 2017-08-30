@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="home-header">
        <div class="home-header-heavy">CAPONE</div>
        <div class="home-header-light">CLOTHING</div>
    </div>
@stop