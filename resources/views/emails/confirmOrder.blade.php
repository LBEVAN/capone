@extends('emails.master')

@section('content')
<div class="container">
    <div class="row" style="text-align: center; margin-top: 30px;">
        <div style="margin-bottom: 20px;">
            <h3 style="text-align: center;"> ORDER SUCCESSFUL, Welcome to #CaponeClothing </h3>
            <p> Hi {{ $firstName }}, thanks for placing an order. </p>
            
            <p> If you require any more information please don't hesitate to contact us. 
                Your order is currently being processed by a member of the Capone Clothing team</p>
        </div>

        <table style="text-align: left; margin-bottom: 20px; width: 20%;">
            <tr>
                <th style="margin-right; 15px;">Name:</th>
                <td>{{ $firstName }} {{ $lastName }}</td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th rowspan="3" style="vertical-align: top;">Address:</th>
                <td>{{ $address }}</td>
            </tr>
            <tr>
                <td>{{ $city }}</td>
            </tr>
            <tr>
                <td>{{ $postcode }}</td>
            </tr>
        </table>

        <hr class="featurette-divider">

        <table style="text-align: left; float: center; width: 100%;">
            <tr>
                <th>Item Name</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Price</th>

            </tr>
            @foreach($items->getEntries() as $item)
            <tr>
                <td>{{ $item->getProduct()->name }}</td>
                <td>{{ $item->getProductVariant()->size->description }}</td>
                <td>{{ $item->getQuantity() }}</td>
                <td>£{{ $item->getPrice() / $item->getQuantity() }}</td>
            </tr>
            @endforeach

            <tr style="margin-top:10px;">
                <td></td>
                <td></td>
                <td colspan="2"><hr class="featurette-divider"></td>
            </tr>

            <tr style="margin-top:10px;">
                <td></td>
                <td></td>
                <td style="text-align: left;">Shipping Costs</td>
                <td style="text-align: left;">£{{ $shipping }}</td>
            </tr>

            <tr style="margin-top:5px;">
                <td></td>
                <td></td>
                <td style="text-align: left;"><strong>Total price</strong></td>
                <td style="text-align: left;"><strong>£{{ $items->getTotalPrice() }}</strong></td>
            </tr>
        </table>
    </div>

    <hr class="featurette-divider">
</div>
@stop