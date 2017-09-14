@extends('checkout.master')

@section('checkout-content')
    <div class="col-md-6 col-md-pull-6">
        <h2>Payment Information</h2>

        <form method="POST" action="{{ route('checkout.completePayment') }}">
            {{ csrf_field() }}

            @foreach($paymentOptions as $paymentOption)
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="paymentOption" value="{{ $paymentOption->id }}"/>
                                    {{ $paymentOption->description }}
                                </label>
                                <label><i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i> </label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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