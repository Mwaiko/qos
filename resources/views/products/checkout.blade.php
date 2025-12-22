@extends('layouts.app')

@section('title', 'Checkout - Quality Outsource Solutions')

@section('content')

<!-- Breadcrumb -->
<section class="py-6 bg-cream border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-sage-green hover:text-earth-brown transition-colors">Home</a>
            <svg class="w-4 h-4 text-sage-green" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <a href="{{ route('cart.index') }}" class="text-sage-green hover:text-earth-brown transition-colors">Cart</a>
            <svg class="w-4 h-4 text-sage-green" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-deep-soil font-semibold">Checkout</span>
        </nav>
    </div>
</section>

<!-- Checkout Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-12">Checkout</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Checkout Form -->
            <div class="lg:col-span-2">
                <form action="{{ route('checkout.process') }}" method="POST" class="bg-white rounded-lg shadow-lg p-8">
                    @csrf
                    
                    <h2 class="text-2xl font-serif font-bold text-deep-soil mb-6">Delivery Information</h2>
                    
                    @if($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-md">
                        <ul class="list-disc list-inside text-red-600 text-sm">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block font-semibold text-deep-soil mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 border-2 border-sage-green/30 rounded-md focus:outline-none focus:ring-2 focus:ring-earth-brown focus:border-transparent">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block font-semibold text-deep-soil mb-2">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required class="w-full px-4 py-3 border-2 border-sage-green/30 rounded-md focus:outline-none focus:ring-2 focus:ring-earth-brown focus:border-transparent" placeholder="+254 700 000 000">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block font-semibold text-deep-soil mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 border-2 border-sage-green/30 rounded-md focus:outline-none focus:ring-2 focus:ring-earth-brown focus:border-transparent">
                        </div>
                        
                        <!-- Address -->
                        <div>
                            <label for="address" class="block font-semibold text-deep-soil mb-2">Delivery Address *</label>
                            <textarea id="address" name="address" rows="4" required class="w-full px-4 py-3 border-2 border-sage-green/30 rounded-md focus:outline-none focus:ring-2 focus:ring-earth-brown focus:border-transparent">{{ old('address') }}</textarea>
                            <p class="text-sm text-sage-green mt-1">Please include any landmarks or delivery instructions</p>
                        </div>
                        
                        <!-- Notes -->
                        <div>
                            <label for="notes" class="block font-semibold text-deep-soil mb-2">Order Notes (Optional)</label>
                            <textarea id="notes" name="notes" rows="3" class="w-full px-4 py-3 border-2 border-sage-green/30 rounded-md focus:outline-none focus:ring-2 focus:ring-earth-brown focus:border-transparent" placeholder="Any special requests or delivery preferences?">{{ old('notes') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex gap-4">
                        <button type="submit" class="flex-1 px-8 py-4 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold text-lg">
                            Place Order
                        </button>
                        <a href="{{ route('cart.index') }}" class="px-8 py-4 bg-white text-earth-brown border-2 border-earth-brown rounded-md hover:bg-sage-green/10 transition-colors duration-200 font-semibold">
                            Back to Cart
                        </a>
                    </div>
                </form>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg shadow-lg p-6 sticky top-8">
                    <h2 class="text-2xl font-serif font-bold text-deep-soil mb-6">Order Summary</h2>
                    
                    <!-- Cart Items -->
                    <div class="space-y-4 mb-6 max-h-96 overflow-y-auto">
                        @foreach($cartItems as $item)
                        <div class="flex gap-4 pb-4 border-b border-sage-green/20">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover rounded-md">
                            <div class="flex-1">
                                <h4 class="font-semibold text-deep-soil text-sm">{{ $item['name'] }}</h4>
                                <p class="text-xs text-sage-green">Qty: {{ $item['quantity'] }}</p>
                                <p class="text-sm font-bold text-earth-brown mt-1">KSh {{ number_format($item['price'] * $item['quantity']) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Totals -->
                    <div class="space-y-3 border-t border-sage-green/20 pt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sage-green">Subtotal</span>
                            <span class="font-semibold text-deep-soil">KSh {{ number_format($total) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sage-green">Delivery Fee</span>
                            <span class="font-semibold text-deep-soil">TBD</span>
                        </div>
                        <div class="border-t border-sage-green/20 pt-3">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-deep-soil">Total</span>
                                <span class="text-2xl font-bold text-earth-brown">KSh {{ number_format($total) }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-xs text-sage-green mt-6 text-center">Final total including delivery will be confirmed via phone</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection