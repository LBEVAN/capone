@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/socials.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="content-fluid">
    <div class="page-header">
        SOCIAL MEDIA
    </div>

    <div class="row">
        <div class="col-md-12 .col-md-8">
            Facebook
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 .col-md-8">
            Instagram
        </div>
    </div>
</div>
@stop