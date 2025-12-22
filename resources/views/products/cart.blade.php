@extends('layouts.app')

@section('title', 'Shopping Cart - Quality Outsource Solutions')

@section('content')

<!-- Breadcrumb -->
<section class="py-6 bg-cream border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-sage-green hover:text-earth-brown transition-colors">Home</a>
            <svg class="w-4 h-4 text-sage-green" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-deep-soil font-semibold">Shopping Cart</span>
        </nav>
    </div>
</section>

<!-- Cart Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-12">Your Cart</h1>
        
        @if(empty($cartItems))
        <!-- Empty Cart -->
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto text-sage-green/30 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            <h2 class="text-2xl font-serif font-bold text-deep-soil mb-4">Your cart is empty</h2>
            <p class="text-sage-green mb-8">Start adding some fresh organic produce!</p>
            <a href="/produce" class="inline-flex items-center justify-center px-8 py-4 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                Browse Products
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
        @else
        <!-- Cart Items -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items List -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    @foreach($cartItems as $item)
                    <div class="cart-item p-6 border-b border-sage-green/20 flex flex-col sm:flex-row gap-6" data-product-id="{{ $item['id'] }}">
                        <!-- Product Image -->
                        <div class="flex-shrink-0">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-32 h-32 object-cover rounded-lg">
                        </div>
                        
                        <!-- Product Details -->
                        <div class="flex-1">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-serif font-bold text-deep-soil mb-1">{{ $item['name'] }}</h3>
                                    <p class="text-sm text-sage-green">{{ $item['unit'] }}</p>
                                </div>
                                <button onclick="removeFromCart({{ $item['id'] }})" class="text-sage-green hover:text-red-600 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <!-- Quantity Control -->
                                <div class="flex items-center border-2 border-sage-green/30 rounded-md w-fit">
                                    <button onclick="updateQuantity({{ $item['id'] }}, -1)" class="px-3 py-2 text-earth-brown hover:bg-sage-green/10 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                        </svg>
                                    </button>
                                    <input type="number" value="{{ $item['quantity'] }}" min="1" class="w-16 text-center border-x-2 border-sage-green/30 py-2 focus:outline-none text-deep-soil font-semibold quantity-input" readonly>
                                    <button onclick="updateQuantity({{ $item['id'] }}, 1)" class="px-3 py-2 text-earth-brown hover:bg-sage-green/10 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </button>
                                </div>
                                
                                <!-- Price -->
                                <div class="text-right">
                                    <p class="text-2xl font-bold text-deep-soil item-total">KSh {{ number_format($item['price'] * $item['quantity']) }}</p>
                                    <p class="text-sm text-sage-green">KSh {{ number_format($item['price']) }} each</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg shadow-lg p-6 sticky top-8">
                    <h2 class="text-2xl font-serif font-bold text-deep-soil mb-6">Order Summary</h2>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-center">
                            <span class="text-sage-green">Subtotal</span>
                            <span class="font-semibold text-deep-soil subtotal">KSh {{ number_format($total) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sage-green">Delivery</span>
                            <span class="font-semibold text-deep-soil">Calculated at checkout</span>
                        </div>
                        <div class="border-t border-sage-green/20 pt-4">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-deep-soil">Total</span>
                                <span class="text-2xl font-bold text-earth-brown total">KSh {{ number_format($total) }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('checkout') }}" class="block w-full px-8 py-4 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold text-center mb-4">
                        Proceed to Checkout
                    </a>
                    
                    <a href="/produce" class="block w-full px-8 py-4 bg-white text-earth-brown border-2 border-earth-brown rounded-md hover:bg-sage-green/10 transition-colors duration-200 font-semibold text-center">
                        Continue Shopping
                    </a>
                    
                    <!-- Trust Badges -->
                    <div class="mt-6 pt-6 border-t border-sage-green/20 space-y-3">
                        <div class="flex items-center gap-2 text-sm text-sage-green">
                            <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>100% Organic Guarantee</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-sage-green">
                            <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Fresh Daily Harvest</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-sage-green">
                            <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Secure Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<script>
function updateQuantity(productId, change) {
    const cartItem = document.querySelector(`[data-product-id="${productId}"]`);
    const quantityInput = cartItem.querySelector('.quantity-input');
    let newQuantity = parseInt(quantityInput.value) + change;
    
    if (newQuantity < 1) return;
    
    fetch('{{ route("cart.update") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            product_id: productId,
            quantity: newQuantity
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        }
    });
}

function removeFromCart(productId) {
    if (!confirm('Are you sure you want to remove this item?')) return;
    
    fetch('{{ route("cart.remove") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            product_id: productId
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        }
    });
}
</script>

@endsection