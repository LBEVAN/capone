@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/store.css') }}" rel="stylesheet">
@stop

@section('content')

<div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
        <div class="itemStore">
            <a href="{{ route('contact') }}">
                <img class="itemStore-img-top" src="images/items/babyPinkHoodie1.png">
            </a>
            <div class="itemStore-block">
                <figure class="profile">
                    <img src="images/items/babyPinkHoodie1.png" class="profile-avatar" alt="">
                </figure>
                <div class="itemStore-title">Baby Pink Hoodie </div> 
                
                <div class="itemStore-price"> £20.00 </div>

                <div class="itemStore-footer">
                    <div class="footer-left">
                        <label for="size" style="padding-right: 5px;">
                            Size:
                        </label>
                        <select id="size" name="size" class="form-control" style="width: 60%;" required="required">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="xlarge">X-Large</option>
                        </select>
                    </div>

                    <div class="footer-right">
                        <button class="btn btn-default">+ basket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop