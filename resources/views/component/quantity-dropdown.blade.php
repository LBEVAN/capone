<input type="hidden" id="cartEntryId" value="{{ $cartEntryId }}" />
<select id="quantity" name="quantity" class="form-control" required="required">
    @for ($i = 1; $i < 10; $i++)
        @if($currentQuantity == $i) 
            <option value="{{ $i }}" selected>
        @else
            <option value="{{ $i }}">
        @endif
            {{ $i }}
        </option>
    @endfor
</select>