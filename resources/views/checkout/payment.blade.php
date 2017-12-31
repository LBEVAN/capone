@extends('checkout.master')

@section('checkout-content')
    <div class="col-md-6 col-md-pull-6">

        <form method="POST" action="{{ route('checkout.completePayment') }}">
            {{ csrf_field() }}

            <div class="row">
                <h2>Shipping Information</h2>

                @foreach($shippingOptions as $shippingOption)
                    <div class="row">
                        <div class="col-md-12 .col-md-8">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shippingOption" value="{{ $shippingOption->id }}"/>
                                        {{ $shippingOption->description }}
                                    </label>
                                    <label>£{{ $shippingOption->price }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">

                <h2>Payment Information</h2>

                @foreach($paymentOptions as $paymentOption)
                    <div class="row">
                        <div class="col-md-12 .col-md-8">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="paymentOption" value="{{ $paymentOption->id }}"/>
                                        {{ $paymentOption->description }}
                                    </label>
                                    <label><i class="{{ $paymentOption->icon }}" aria-hidden="true"></i> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <button type="submit" class="btn btn-primary pull-right" id="btnReviewOrder">
                        Review order
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop