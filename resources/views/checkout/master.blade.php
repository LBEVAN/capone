@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="page-header">CHECKOUT</div>

    @include('component.messages')

    <div class="col-md-6 col-md-push-6">
        <h2>Order Summary</h2>
        @if(Session::has('cart') && count(session('cart')->getEntries()) > 0)
            <table class="table">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

                @foreach(session('cart')->getEntries() as $cartEntry)
                    <tr>
                        <td>{{ $cartEntry->getProduct()->name }} ({{ $cartEntry->getProductVariant()->size->description }})</td>

                        <td>{{ $cartEntry->getQuantity() }}</td>

                        <td>£{{ $cartEntry->getPrice() }}</td>
                    </tr>
                @endforeach
            </table>

            <div class="row subtotals">
                <form method="POST" action="{{ route('checkout.applyDiscount') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 .col-md-8">
                            <div class="total">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="discount" name="discount" maxlength="20" placeholder="Please enter a discount code" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block pull-right" id="btnApplyDiscount">
                                        Apply discount
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row subtotals">
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="total">
                            <label>Subtotal</label>
                            <label>£{{ number_format(session('cart')->getTotalPrice(), 2) }}</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="total">
                            <label>Shipping</label>
                            @if(session('order') && session('order')->shippingOption)
                                <label>£{{ session('order')->shippingOption->price }}</label>
                            @else
                                <label>--</label>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if(session('order') && session('order')->discount && session('order')->shippingOption)
            <div class="row totals">
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="total">
                            <label>Discount Amount</label>
                                <label>£{{ number_format(session('cart')->getTotalPrice() - session('order')->getTotal() + session('order')->shippingOption->price, 2) }}</label>                               
                        </div>
                    </div>
                </div>
            </div>
            @elseif (session('order') && session('order')->discount)
            <div class="row totals">
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="total">
                            <label>Discount Amount</label>
                            <label>£{{ number_format(session('cart')->getTotalPrice() - session('order')->getTotal(), 2) }}</label>                               
                        </div>
                    </div>
                </div>
            </div>
            @else

            @endif

            <div class="row totals">
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="total">
                            <label>Total</label>
                            @if(session('order'))
                                <label>£{{ session('order')->getTotal() }}</label>
                            @else
                                <label>--</label>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @yield('checkout-content')

    </div>
    
@stop