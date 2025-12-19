{{-- 
    Usage: @include('components.product-card', ['product' => $product])
    
    Expected $product properties:
    - id
    - name
    - slug
    - image
    - health_benefit (short text)
    - price (optional)
--}}

<div class="group bg-white rounded-lg overflow-hidden border border-sage-green/20 hover:shadow-lg transition-all duration-300">
    <!-- Product Image -->
    <div class="relative overflow-hidden bg-cream aspect-square">
        <a href="/produce/{{ $product->slug }}">
            <img 
                src="{{ $product->image ?? '/images/placeholder-produce.jpg' }}" 
                alt="{{ $product->name }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
            >
        </a>
        
        <!-- Organic Badge -->
        <div class="absolute top-3 right-3">
            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-earth-brown text-white">
                🌱 Organic
            </span>
        </div>
    </div>
    
    <!-- Product Info -->
    <div class="p-5">
        <a href="/produce/{{ $product->slug }}" class="block">
            <h3 class="text-xl font-serif font-semibold text-deep-soil mb-2 group-hover:text-earth-brown transition-colors">
                {{ $product->name }}
            </h3>
        </a>
        
        <!-- Health Benefit -->
        <p class="text-sm text-sage-green mb-4 leading-relaxed">
            {{ $product->health_benefit ?? 'Nutrient-rich and organically grown' }}
        </p>
        
        <!-- Features -->
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="inline-flex items-center text-xs text-deep-soil/70">
                <svg class="w-4 h-4 mr-1 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                No Fertilizers
            </span>
            <span class="inline-flex items-center text-xs text-deep-soil/70">
                <svg class="w-4 h-4 mr-1 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Freshly Harvested
            </span>
        </div>
        
        <!-- Price & CTA -->
        <div class="flex items-center justify-between">
            @if(isset($product->price))
            <span class="text-lg font-semibold text-deep-soil">
                KES {{ number_format($product->price, 2) }}
            </span>
            @else
            <span class="text-sm text-sage-green">Contact for pricing</span>
            @endif
            
            <a href="/produce/{{ $product->slug }}" class="inline-flex items-center text-earth-brown hover:text-deep-soil font-medium text-sm transition-colors">
                Learn More
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>