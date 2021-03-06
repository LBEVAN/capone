@section('nav') 
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;">
    <div class="container">
        <div class="navbar-header" style="float: left;">
            <button type="button" class="navbar-toggle collapsed" style="float: left; margin-left: 5px;" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div style="float: right; margin-left: 5px; margin-right: 5px;">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="fa fa-shopping-basket fa-lg dropdown-toggle clickable" id="cart" data-toggle="dropdown">
                        @if(Session::has('cart'))
                            <span class="basket-count">{{ Session::get('cart')->getTotalQuantity() }}</span>
                        @else
                            <span class="basket-count">0</span>
                        @endif
                    </a>
                    <ul class="dropdown-menu cart-dropdown" aria-labelledby="cart">
                        @component('component.cart', ['view' => 'partial', 'numToShow' => 5])@endcomponent
                    </ul>
                </li>
            </ul>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-left">
            <ul class="nav navbar-nav">
                <li><a style="font-size: 2.5rem;" href="{{ route('/') }}">CAPONE CLOTHING</a></li>
                <li><a href="{{ route('store.index') }}">STORE</a></li>
                <li><a href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
@show