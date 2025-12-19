{{-- 
    Usage: @include('components.bundle-card', ['bundle' => $bundle])
    
    Expected $bundle properties:
    - id
    - name
    - slug
    - image
    - description
    - benefit (main health benefit)
    - products (array/collection of products included)
    - price
    - for_whom (optional: "Families", "Individuals", etc.)
--}}

<div class="group bg-white rounded-lg overflow-hidden border-2 border-earth-brown/20 hover:border-earth-brown hover:shadow-xl transition-all duration-300">
    <!-- Bundle Image -->
    <div class="relative overflow-hidden bg-gradient-to-br from-cream to-sage-green/10 aspect-[4/3]">
        <img 
            src="{{ $bundle->image ?? '/images/placeholder-basket.jpg' }}" 
            alt="{{ $bundle->name }}"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
        >
        
        <!-- Featured Badge (if applicable) -->
        @if(isset($bundle->is_featured) && $bundle->is_featured)
        <div class="absolute top-4 left-4">
            <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-heritage-purple text-white">
                ⭐ Popular Choice
            </span>
        </div>
        @endif
        
        <!-- For Whom Badge -->
        @if(isset($bundle->for_whom))
        <div class="absolute top-4 right-4">
            <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-white/90 text-deep-soil backdrop-blur-sm">
                For {{ $bundle->for_whom }}
            </span>
        </div>
        @endif
    </div>
    
    <!-- Bundle Content -->
    <div class="p-6">
        <!-- Bundle Name -->
        <a href="/baskets/{{ $bundle->slug }}" class="block">
            <h3 class="text-2xl font-serif font-bold text-deep-soil mb-3 group-hover:text-earth-brown transition-colors">
                {{ $bundle->name }}
            </h3>
        </a>
        
        <!-- Description -->
        <p class="text-sage-green mb-4 leading-relaxed">
            {{ $bundle->description }}
        </p>
        
        <!-- Main Health Benefit -->
        <div class="bg-earth-brown/5 rounded-lg p-4 mb-4">
            <div class="flex items-start">
                <svg class="w-5 h-5 text-earth-brown mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                </svg>
                <div>
                    <p class="text-sm font-semibold text-deep-soil mb-1">Health Benefit</p>
                    <p class="text-sm text-sage-green">{{ $bundle->benefit }}</p>
                </div>
            </div>
        </div>
        
        <!-- What's Inside -->
        @if(isset($bundle->products) && count($bundle->products) > 0)
        <div class="mb-4">
            <p class="text-sm font-semibold text-deep-soil mb-2">What's Inside:</p>
            <div class="flex flex-wrap gap-2">
                @foreach($bundle->products->take(4) as $product)
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs bg-sage-green/10 text-deep-soil border border-sage-green/20">
                    {{ $product->name }}
                </span>
                @endforeach
                
                @if(count($bundle->products) > 4)
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs bg-sage-green/10 text-deep-soil border border-sage-green/20">
                    +{{ count($bundle->products) - 4 }} more
                </span>
                @endif
            </div>
        </div>
        @endif
        
        <!-- Trust Badges -->
        <div class="flex flex-wrap gap-2 mb-5 pt-4 border-t border-sage-green/10">
            <span class="inline-flex items-center text-xs text-sage-green">
                <svg class="w-4 h-4 mr-1 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                100% Organic
            </span>
            <span class="inline-flex items-center text-xs text-sage-green">
                <svg class="w-4 h-4 mr-1 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Fertilizer-Free
            </span>
            <span class="inline-flex items-center text-xs text-sage-green">
                <svg class="w-4 h-4 mr-1 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Fresh from Farm
            </span>
        </div>
        
        <!-- Price & CTA -->
        <div class="flex items-center justify-between">
            <div>
                <span class="text-2xl font-bold text-deep-soil">
                    KES {{ number_format($bundle->price, 2) }}
                </span>
                @if(isset($bundle->original_price) && $bundle->original_price > $bundle->price)
                <span class="text-sm text-sage-green line-through ml-2">
                    KES {{ number_format($bundle->original_price, 2) }}
                </span>
                @endif
            </div>
            
            <a href="/baskets/{{ $bundle->slug }}" class="inline-flex items-center px-5 py-2.5 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-medium">
                View Bundle
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>