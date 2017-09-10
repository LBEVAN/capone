@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="page-header">Checkout</div>

    <div class="col-md-6 col-md-push-6">
        @if(Session::has('cart') && count(Session::get('cart')->getEntries()) > 0)
            <table class="table">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

                @foreach(Session::get('cart')->getEntries() as $cartEntry)
                    <tr>
                        <td>{{ $cartEntry->getProduct()->name }} ({{ $cartEntry->getProductVariant()->size->description }})</td>

                        <td>{{ $cartEntry->getQuantity() }}</td>

                        <td>£{{ $cartEntry->getPrice() }}</td>
                    </tr>
                @endforeach
            </table>

            <div class="row subtotals">
                <div class="col-md-6">
                    <span>Subtotal</span>
                </div>
                <div class="col-md-6">
                    <span>£{{ Session::get('cart')->getTotalPrice() }}</span>
                </div>

                <div class="col-md-6">
                    <span>Shipping</span>
                </div>
                <div class="col-md-6">
                    <span>TODO</span>
                </div>

                <div class="col-md-6">
                    <span>Discount</span>
                </div>
                <div class="col-md-6">
                    <span>TODO</span>
                </div>
            </div>

            <div class="row totals">
                <div class="col-md-6">
                    <span>Total</span>
                </div>
                <div class="col-md-6">
                    <span>TODO</span>
                </div>
            </div>
        @endif
    </div>

    <div class="col-md-6 col-md-pull-6">
        <form>
            <div class="row">
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="firstName">
                            First name
                        </label>
                        <input type="text" class="form-control" id="firstName" placeholder="Please enter your first name" required />
                    </div>
                </div>
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="lastName">
                            Last name
                        </label>
                        
                        <input type="text" class="form-control" id="lastName" placeholder="Please enter your last name" required />
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>

                        <input type="email" class="form-control" id="email" placeholder="Please enter your email" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <div class="form-group">
                        <label for="address">
                            Address
                        </label>

                        <input type="address" class="form-control" id="address" placeholder="Please enter your address" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <div class="form-group">
                        <label for="city">
                            City
                        </label>

                        <input type="city" class="form-control" id="city" placeholder="Please enter your city" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="country">
                            Country
                        </label>
                        <select id="country" name="country" class="form-control" required="required">
                            <option value="UK">United Kingdom</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="postcode">
                            Postcode
                        </label>
                        
                        <input type="postcode" class="form-control" id="postcode" placeholder="Please enter your postcode" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContinueToShipping">
                        Continue to shipping
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop