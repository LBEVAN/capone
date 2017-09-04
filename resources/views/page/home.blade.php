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

    <div class="row" style="margin-top: 20px;">
        <div class="hidden-xs col-sm-4 col-lg-4">
            <figure class="profile">
                <img src="images/caponeHome2.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-4">
            <figure class="profile">
                <img src="images/caponeSwanseaNTM.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-4">
            <figure class="profile">
                <img src="images/caponeHome.png" class="profile-avatar" alt="profile-avatar">
            </figure>
        </div>
    </div>
@stop