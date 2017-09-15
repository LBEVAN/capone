@extends('checkout.master')

@section('checkout-content')
    <div class="col-md-6 col-md-pull-6">
        <h2>Review Order Details</h2>

        <form method="GET" action="{{ route('checkout.completeOrder') }}">

            <h3>Customer Information</h3>
            @php $order = session('order') @endphp

            <div class="row">
                <div class="col-md-6 .col-md-4">
                    <p><strong>First name: </strong>{{ $order->firstName }}</p>
                </div>
                <div class="col-md-6 .col-md-4">
                    <p><strong>Last name: </strong>{{ $order->lastName }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <p><strong>Email: </strong>{{ $order->email }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <p><strong>Address: </strong>{{ $order->address }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <p><strong>City: </strong>{{ $order->city }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 .col-md-4">
                    <p><strong>Country: </strong>{{ $order->country->description }}</p>
                </div>
                <div class="col-md-6 .col-md-4">
                    <p><strong>Postcode: </strong>{{ $order->postcode }}</p>
                </div>
            </div>

            <h3>Shipping Information</h3>
            @php $shippingOption = $order->shippingOption @endphp

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <p><strong>Shipping option: </strong>{{ $shippingOption->description }}</p>
                </div>
            </div>

            <h3>Payment Information</h3>
            @php $paymentOption = session('order')->shippingOption @endphp

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <p><strong>Payment option: </strong>{{ $paymentOption->description }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <button type="submit" class="btn btn-success pull-right" id="btnCompleteOrder">
                        Complete order
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop