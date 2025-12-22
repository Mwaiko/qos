@extends('layouts.app')

@section('title', 'Our Organic Produce - Quality Outsource Solutions')

@section('content')
</table>
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-6">
                Fresh Organic <span class="text-earth-brown">Produce</span>
            </h1>
            <p class="text-xl text-sage-green leading-relaxed">
                100% organic, fertilizer-free vegetables cultivated with care on Munyaka Farm. From our soil to your table.
            </p>
        </div>
    </div>
</section>

<!-- Trust Badges -->
<section class="py-8 bg-white border-y border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center items-center gap-8 text-center">
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold text-deep-soil">100% Organic</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold text-deep-soil">No Fertilizers</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold text-deep-soil">Freshly Harvested</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold text-deep-soil">Family Farm</span>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 bg-gradient-to-br from-sage-green/10 to-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex flex-wrap gap-3">
                <a href="?category=all" class="px-5 py-2 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold text-sm">
                    All Produce
                </a>
                <a href="?category=leafy-greens" class="px-5 py-2 bg-white text-earth-brown border border-earth-brown rounded-md hover:bg-earth-brown hover:text-white transition-colors duration-200 font-semibold text-sm">
                    Leafy Greens
                </a>
                <a href="?category=root-vegetables" class="px-5 py-2 bg-white text-earth-brown border border-earth-brown rounded-md hover:bg-earth-brown hover:text-white transition-colors duration-200 font-semibold text-sm">
                    Root Vegetables
                </a>
                <a href="?category=specialty" class="px-5 py-2 bg-white text-earth-brown border border-earth-brown rounded-md hover:bg-earth-brown hover:text-white transition-colors duration-200 font-semibold text-sm">
                    Specialty Items
                </a>
            </div>
            
            <div class="flex items-center gap-2">
                <label for="sort" class="text-sage-green font-semibold text-sm">Sort by:</label>
                <select id="sort" class="px-4 py-2 bg-white border border-sage-green/30 rounded-md text-deep-soil focus:outline-none focus:ring-2 focus:ring-earth-brown">
                    <option value="popular">Most Popular</option>
                    <option value="name">Name (A-Z)</option>
                    <option value="price-low">Price (Low to High)</option>
                    <option value="price-high">Price (High to Low)</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($products as $product)
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
                <div class="relative h-64 bg-sage-green/10 overflow-hidden">
                    <img src="{{ asset('storage/' . $product->featured_image) }}"  alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    
                    @if($product->is_featured)
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1 bg-earth-brown text-white rounded-full text-xs font-semibold">
                            Featured
                        </span>
                    </div>
                    @endif
                    
                    @if($product->is_new)
                    <div class="absolute top-4 right-4">
                        <span class="inline-block px-3 py-1 bg-deep-soil text-white rounded-full text-xs font-semibold">
                            New
                        </span>
                    </div>
                    @endif
                </div>
                
                <div class="p-6">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-earth-brown uppercase tracking-wide">
                            {{ $product->category }}
                        </span>
                    </div>
                    
                    <h3 class="text-xl font-serif font-bold text-deep-soil mb-2">
                        {{ $product->name }}
                    </h3>
                    
                    <p class="text-sm text-sage-green mb-4 line-clamp-2">
                        {{ $product->short_description }}
                    </p>
                    
                    <!-- Health Benefit Tag -->
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-4 h-4 text-earth-brown flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-xs text-sage-green italic">{{ $product->health_benefit }}</p>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-deep-soil">KSh {{ number_format($product->price) }}</span>
                            <span class="text-sm text-sage-green">/ {{ $product->unit }}</span>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="/produce/{{ $product->slug }}" class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold text-sm">
                            View Details
                        </a>
                        <button onclick="addToCart({{ $product->id }})" class="px-4 py-2 bg-sage-green/10 text-earth-brown rounded-md hover:bg-sage-green/20 transition-colors duration-200 font-semibold text-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        @if($products->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</section>

<!-- Info Section -->
<section class="py-20 bg-gradient-to-br from-cream to-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-serif font-bold text-deep-soil mb-2">Fresh Delivery</h3>
                <p class="text-sage-green text-sm">Delivered fresh from our farm to your doorstep within Nairobi and surrounding areas</p>
            </div>
            
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-serif font-bold text-deep-soil mb-2">Quality Guarantee</h3>
                <p class="text-sage-green text-sm">100% satisfaction guaranteed or we'll replace your produce at no cost</p>
            </div>
            
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-serif font-bold text-deep-soil mb-2">Expert Support</h3>
                <p class="text-sage-green text-sm">Need cooking tips or nutritional advice? Our team is here to help</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
            Can't Decide? Try Our Curated Baskets
        </h2>
        <p class="text-xl text-cream mb-8">
            Thoughtfully designed produce bundles to support your family's health goals.
        </p>
        <a href="/baskets" class="inline-flex items-center justify-center px-8 py-4 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold text-lg">
            View Wellness Baskets
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
<script>

function addToCart(productId, quantity = 1) {
    fetch('{{ route("cart.add") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            product_id: productId,
            quantity: quantity
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            alert(data.message);
            // Update cart count in header if you have one
            updateCartCount();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to add product to cart');
    });
}

function updateCartCount() {
    fetch('{{ route("cart.count") }}')
    .then(response => response.json())
    .then(data => {
        const cartBadge = document.querySelector('.cart-count');
        if (cartBadge) {
            cartBadge.textContent = data.count;
        }
    });
}
</script>
@endsection