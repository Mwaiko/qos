@extends('layouts.app')

@section('title', $product->name . ' - Quality Outsource Solutions')

@section('content')

<!-- Breadcrumb -->
<section class="py-6 bg-cream border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-sage-green hover:text-earth-brown transition-colors">Home</a>
            <svg class="w-4 h-4 text-sage-green" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <a href="/produce" class="text-sage-green hover:text-earth-brown transition-colors">Produce</a>
            <svg class="w-4 h-4 text-sage-green" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-deep-soil font-semibold">{{ $product->name }}</span>
        </nav>
    </div>
</section>

<!-- Product Detail Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <div class="rounded-lg overflow-hidden shadow-2xl mb-4">
                    <img src="{{ asset('storage/' . $product->featured_image) }}"  alt="{{ $product->name }}" class="w-full h-96 object-cover" id="mainImage">
                </div>
                
                <!-- Thumbnail Gallery -->
                @if(isset($product->gallery) && count($product->gallery) > 0)
                <div class="grid grid-cols-4 gap-4">
                    @foreach($product->gallery as $image)
                    <div class="rounded-lg overflow-hidden shadow-lg cursor-pointer hover:ring-2 hover:ring-earth-brown transition-all">
                        <img src="{{ $image }}" alt="{{ $product->name }}" class="w-full h-24 object-cover" onclick="changeImage(this.src)">
                    </div>
                    @endforeach
                </div>
                @endif
                
                <!-- Trust Badges -->
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-4 bg-gradient-to-br from-cream to-sage-green/10 rounded-lg">
                        <svg class="w-8 h-8 text-earth-brown flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-deep-soil text-sm">100% Organic</p>
                            <p class="text-xs text-sage-green">No chemicals</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-gradient-to-br from-cream to-sage-green/10 rounded-lg">
                        <svg class="w-8 h-8 text-earth-brown flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-deep-soil text-sm">Farm Fresh</p>
                            <p class="text-xs text-sage-green">Daily harvest</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product Info -->
            <div>
                <div class="mb-4">
                    <span class="inline-block px-4 py-1.5 bg-earth-brown/10 text-earth-brown rounded-full text-sm font-semibold">
                        {{ $product->category }}
                    </span>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                    {{ $product->name }}
                </h1>
                
                <p class="text-xl text-sage-green leading-relaxed mb-6">
                    {{ $product->short_description }}
                </p>
                
                <!-- Health Benefit -->
                <div class="bg-gradient-to-br from-sage-green/10 to-cream rounded-lg p-6 mb-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-earth-brown mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="font-serif font-bold text-deep-soil mb-2">Health Benefits</h3>
                            <p class="text-sage-green leading-relaxed">{{ $product->health_benefit }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Price -->
                <div class="mb-8">
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-4xl font-bold text-deep-soil">KSh {{ number_format($product->price) }}</span>
                        <span class="text-xl text-sage-green">/ {{ $product->unit }}</span>
                    </div>
                    @if(isset($product->original_price))
                    <p class="text-sm text-sage-green">
                        <span class="line-through">KSh {{ number_format($product->original_price) }}</span>
                        <span class="text-earth-brown font-semibold ml-2">Save {{ $product->discount }}%</span>
                    </p>
                    @endif
                </div>
                
                <!-- Quantity Selector -->
                <div class="mb-6">
                    <label class="block font-semibold text-deep-soil mb-3">Quantity</label>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center border-2 border-sage-green/30 rounded-md">
                            <button class="px-4 py-3 text-earth-brown hover:bg-sage-green/10 transition-colors" onclick="decreaseQuantity()">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            <input type="number" id="quantity" value="1" min="1" class="w-20 text-center border-x-2 border-sage-green/30 py-3 focus:outline-none text-deep-soil font-semibold">
                            <button class="px-4 py-3 text-earth-brown hover:bg-sage-green/10 transition-colors" onclick="increaseQuantity()">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                        
                        @if(isset($product->stock_status))
                        <span class="text-sm">
                            @if($product->stock_status === 'in_stock')
                                <span class="text-earth-brown font-semibold">✓ In Stock</span>
                            @else
                                <span class="text-red-600 font-semibold">Out of Stock</span>
                            @endif
                        </span>
                        @endif
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <button class="flex-1 px-8 py-4 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold text-lg flex items-center justify-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Add to Cart
                    </button>
                    <button class="px-8 py-4 bg-white text-earth-brown border-2 border-earth-brown rounded-md hover:bg-sage-green/10 transition-colors duration-200 font-semibold text-lg">
                        <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Additional Info -->
                <div class="border-t border-sage-green/20 pt-6">
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                            </svg>
                            <span class="text-sage-green">Free delivery on orders over KSh 2,000</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sage-green">Harvested fresh daily from Munyaka Farm</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sage-green">100% satisfaction guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details Tabs -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Tabs -->
            <div class="border-b border-sage-green/20">
                <div class="flex">
                    <button class="px-8 py-4 font-semibold text-earth-brown border-b-2 border-earth-brown" onclick="showTab('description')">
                        Description
                    </button>
                    <button class="px-8 py-4 font-semibold text-sage-green hover:text-earth-brown transition-colors" onclick="showTab('nutrition')">
                        Nutrition Facts
                    </button>
                    <button class="px-8 py-4 font-semibold text-sage-green hover:text-earth-brown transition-colors" onclick="showTab('recipes')">
                        Recipe Ideas
                    </button>
                    <button class="px-8 py-4 font-semibold text-sage-green hover:text-earth-brown transition-colors" onclick="showTab('storage')">
                        Storage Tips
                    </button>
                </div>
            </div>
            
            <!-- Tab Content -->
            <div class="p-8">
                <div id="description" class="tab-content">
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-4">About This Produce</h3>
                    <div class="prose prose-lg text-sage-green leading-relaxed">
                        {!! $product->description !!}
                    </div>
                </div>
                
                <div id="nutrition" class="tab-content hidden">
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-4">Nutritional Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @if(isset($product->nutrition))
                            @foreach($product->nutrition as $nutrient => $value)
                            <div class="flex justify-between items-center py-3 border-b border-sage-green/20">
                                <span class="font-semibold text-deep-soil">{{ $nutrient }}</span>
                                <span class="text-sage-green">{{ $value }}</span>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                
                <div id="recipes" class="tab-content hidden">
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-4">How to Enjoy</h3>
                    <div class="space-y-4 text-sage-green leading-relaxed">
                        {!! $product->recipe_ideas ?? '<p>Recipe ideas coming soon!</p>' !!}
                    </div>
                </div>
                
                <div id="storage" class="tab-content hidden">
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-4">Storage & Freshness</h3>
                    <div class="space-y-4 text-sage-green leading-relaxed">
                        {!! $product->storage_tips ?? '<p>Store in a cool, dry place.</p>' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if(isset($related_products) && count($related_products) > 0)
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-12 text-center">
            You Might Also Like
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($related_products as $related)
                @include('components.product-card', ['product' => $related])
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
            Need Help Choosing?
        </h2>
        <p class="text-xl text-cream mb-8">
            Our wellness experts are here to guide you toward the best produce for your health goals.
        </p>
        <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold text-lg">
            Contact Us
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

<script>
function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

function increaseQuantity() {
    const input = document.getElementById('quantity');
    input.value = parseInt(input.value) + 1;
}

function decreaseQuantity() {
    const input = document.getElementById('quantity');
    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function showTab(tabName) {
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => tab.classList.add('hidden'));
    
    const buttons = document.querySelectorAll('button[onclick^="showTab"]');
    buttons.forEach(btn => {
        btn.classList.remove('text-earth-brown', 'border-b-2', 'border-earth-brown');
        btn.classList.add('text-sage-green');
    });
    
    document.getElementById(tabName).classList.remove('hidden');
    event.target.classList.remove('text-sage-green');
    event.target.classList.add('text-earth-brown', 'border-b-2', 'border-earth-brown');
}
</script>

@endsection