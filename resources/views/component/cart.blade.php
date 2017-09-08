<ul class="dropdown-menu cart-dropdown" aria-labelledby="cart">
    @if(Session::has('cart') && count(Session::get('cart')->getEntries()) > 0)
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th><!-- empty to force a full width divider --></th>
            </tr>
            @for ($i = 0; $i < $numToShow; $i++)
                @php $cartEntries = Session::get('cart')->getEntries(); @endphp
                @if(count($cartEntries) > $i)
                    @php $cartEntry = array_values($cartEntries)[$i]; @endphp
                    <form method="POST" action="{{ route('store.removeFromCart', $cartEntry->getId()) }}">
                    {{ csrf_field() }}
                    <tr>
                        <td>{{ $cartEntry->getProduct()->name }} ({{ $cartEntry->getProductVariant()->size->description }})</td>
                        <td>{{ $cartEntry->getQuantity() }}</td>
                        <td>£{{ $cartEntry->getPrice() }}</td>
                        <input type="hidden" id="size" name="size" value="{{ $cartEntry->getProductVariant()->size->code }}"></input>
                        <td><button type="submit" class="btn btn-danger" action>Remove</button></td>
                    </tr>
                    </form>
                @endif
            @endfor
        </table>
        Total Quantity: {{ Session::get('cart')->getTotalQuantity() }}
        Total Price: £{{ Session::get('cart')->getTotalPrice() }}
        <button type="submit" class="btn btn-success btn-block col-md-4">Checkout</button>
        @if(count(Session::get('cart')->getEntries()) > $numToShow)
            <button type="submit" class="btn btn-primary btn-block col-md-4">View All</button>
        @endif
        <button type="submit" class="btn btn-danger btn-block col-md-4">Remove All</button>
    @else
        Your cart is empty
    @endif
</ul>