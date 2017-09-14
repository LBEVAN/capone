@extends('checkout.master')

@section('checkout-content')
    <div class="col-md-6 col-md-pull-6">
        <h2>Shipping Information</h2>

         <form method="POST" action="{{ route('checkout.completeShipping') }}">
             {{ csrf_field() }}

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

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContinueToPayment">
                        Continue to payment
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop