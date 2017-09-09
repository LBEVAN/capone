@section('head')
    @parent
    <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
@stop

@if(Session::has('cart') && count(Session::get('cart')->getEntries()) > 0)
    <table class="table">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th><!-- empty to force a full width divider --></th>
        </tr>
        @if($numToShow == 0)
            @php $numToShow = count(Session::get('cart')->getEntries()); @endphp
        @endif
        @for ($i = 0; $i < $numToShow; $i++)
            @php $cartEntries = Session::get('cart')->getEntries(); @endphp
            @if(count($cartEntries) > $i)
                @php $cartEntry = array_values($cartEntries)[$i]; @endphp
                <form method="POST" action="{{ route('cart.destroy', $cartEntry->getId()) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <tr>
                        <td>{{ $cartEntry->getProduct()->name }} ({{ $cartEntry->getProductVariant()->size->description }})</td>
    
                        @if($view == 'full')
                            <td>@component('component.quantity-dropdown', ['currentQuantity' => $cartEntry->getQuantity(), 'cartEntryId' =>  $cartEntry->getId() ])@endcomponent</td>
                        @else
                            <td>{{ $cartEntry->getQuantity() }}</td>
                        @endif

                        <td>£{{ $cartEntry->getPrice() }}</td>

                        @if($view == 'full')
                            <td><button type="submit" class="btn btn-danger" action>Remove</button></td>
                        @endif
                    </tr>
                </form>
            @endif
        @endfor
    </table>

    <div class="cart-{{ $view }}-totals">
        Total Quantity: {{ Session::get('cart')->getTotalQuantity() }}
        Total Price: £{{ Session::get('cart')->getTotalPrice() }}
    </div>
    
    <div class="cart-{{ $view }}-actions">
        @if($view == 'full')
            <form method="POST" action="{{ route('cart.destroyAll') }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger btn-block">Remove All</button>
            </form>
        @endif

        @if($view == 'partial')
            <a class="btn btn-primary btn-block" href="{{ route('cart.index') }}">View All</a>
        @endif

        <a class="btn btn-success btn-block" href="">Checkout</a>
    </div>
@else
    Your cart is empty
@endif
