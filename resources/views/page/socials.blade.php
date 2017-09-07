@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/socials.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="content-fluid">
    <div class="page-header">
        Social Media
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            FACEBOOK
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            ISTAGRAM
        </div>
    </div>
</div>
@stop