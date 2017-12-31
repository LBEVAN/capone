@extends('checkout.master')

@section('checkout-content')
    <div class="col-md-6 col-md-pull-6">
        <h2>Customer Information</h2>

        <form method="POST" action="{{ route('checkout.completeCustomer') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="firstName">
                            First name
                        </label>
                        <input type="text" class="form-control" id="firstName" name="firstName" maxlength="50" placeholder="Please enter your first name" required />
                    </div>
                </div>
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="lastName">
                            Last name
                        </label>

                        <input type="text" class="form-control" id="lastName" name="lastName" maxlength="50" placeholder="Please enter your last name" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <div class="form-group">
                        <label for="address">
                            Address
                        </label>

                        <input type="text" class="form-control" id="address" name="address" maxlength="100" placeholder="Please enter your address" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <div class="form-group">
                        <label for="city">
                            City
                        </label>

                        <input type="text" class="form-control" id="city" name="city" maxlength="50" placeholder="Please enter your city" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="country">
                            Country
                        </label>
                        <select id="country" name="country" class="form-control" required>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->description }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 .col-md-4">
                    <div class="form-group">
                        <label for="postcode">
                            Postcode
                        </label>

                        <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Please enter your postcode" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 .col-md-8">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContinueToPayment">
                        Continue Checkout
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop