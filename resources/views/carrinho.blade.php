<x-guestLayout>
    <div class="market-bag">
        <h2>Market Bag</h2>
        @php $cart = session('cart', []); @endphp

        @if(count($cart))
            <ul>
                @foreach($cart as $item)
                    <li>
                        {{ $item['name'] }} - {{ $item['quantity'] }} x R$ {{ number_format($item['price'], 2, ',', '.') }}
                    </li>
                @endforeach
            </ul>
            <p>
                <strong>Total:</strong>
                R$
                {{ number_format(collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']), 2, ',', '.') }}
            </p>
        @else
            <p>Your market bag is empty.</p>
        @endif
    </div>
</x-guestLayout>