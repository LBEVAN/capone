@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="home-header">
        <div class="home-header-heavy">CAPONE</div>
        <div class="home-header-light">CLOTHING</div>
        <a href="https://www.facebook.com/Capone-Clothing-1721731367854219/" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
        <a href="https://www.instagram.com/caponeclothing/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
    </div>
@stop