@extends('layouts.app')

@section('title', 'Wellness Baskets - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-6">
                Curated Wellness Baskets
            </h1>
            <p class="text-lg md:text-xl text-sage-green leading-relaxed">
                Thoughtfully designed produce bundles to support your family's health goals. Each basket combines nutrient-rich vegetables grown without fertilizers to target specific wellness needs.
            </p>
        </div>
    </div>
</section>

<!-- Trust Badges -->
<section class="py-8 bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm bg-earth-brown/10 text-deep-soil">
                <svg class="w-5 h-5 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                100% Organic
            </span>
            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm bg-earth-brown/10 text-deep-soil">
                <svg class="w-5 h-5 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Fertilizer-Free
            </span>
            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm bg-earth-brown/10 text-deep-soil">
                <svg class="w-5 h-5 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Fresh from Munyaka Farm
            </span>
            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm bg-earth-brown/10 text-deep-soil">
                <svg class="w-5 h-5 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Weekly or One-Time Delivery
            </span>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 bg-cream/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <!-- Category Filter -->
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 rounded-md bg-earth-brown text-white font-medium transition-colors">
                    All Baskets
                </button>
                <button class="px-4 py-2 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                    Family Wellness
                </button>
                <button class="px-4 py-2 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                    Detox & Cleanse
                </button>
                <button class="px-4 py-2 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                    Heart Health
                </button>
                <button class="px-4 py-2 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                    Immunity Boost
                </button>
            </div>
            
            <!-- Sort -->
            <div class="flex items-center gap-2">
                <label class="text-sm text-sage-green">Sort by:</label>
                <select class="px-4 py-2 rounded-md border border-sage-green/20 bg-white text-deep-soil focus:outline-none focus:ring-2 focus:ring-earth-brown">
                    <option>Popular</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Name: A-Z</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Baskets Grid -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($bundles ?? [] as $bundle)
                @include('components.bundle-card', ['bundle' => $bundle])
            @empty
                <!-- Empty State -->
                <div class="col-span-full text-center py-16">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-sage-green/10 rounded-full mb-6">
                        <svg class="w-10 h-10 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-3">No Baskets Available Yet</h3>
                    <p class="text-sage-green mb-8 max-w-md mx-auto">
                        We're carefully curating wellness baskets for you. Check back soon or explore our individual produce.
                    </p>
                    <a href="/produce" class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                        Shop Individual Produce
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if(isset($bundles) && $bundles->hasPages())
        <div class="mt-12">
            {{ $bundles->links() }}
        </div>
        @endif
    </div>
</section>

<!-- Why Choose Our Baskets Section -->
<section class="py-16 bg-gradient-to-br from-cream to-sage-green/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Why Choose Our Wellness Baskets?
            </h2>
            <p class="text-lg text-sage-green max-w-2xl mx-auto">
                More than just vegetables—each basket is a complete health solution
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-7 h-7 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-3">Targeted Health Benefits</h3>
                <p class="text-sage-green leading-relaxed">
                    Each basket is scientifically designed to address specific health goals, from heart health to immunity and detoxification.
                </p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-7 h-7 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-3">Convenient & Time-Saving</h3>
                <p class="text-sage-green leading-relaxed">
                    No more guessing what to buy. Get a perfectly balanced selection of organic vegetables delivered to your door weekly or one-time.
                </p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-7 h-7 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-3">Educational Guidance</h3>
                <p class="text-sage-green leading-relaxed">
                    Every basket includes recipes, preparation tips, and insights on how each vegetable supports your wellness journey.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">
            Not Sure Which Basket is Right for You?
        </h2>
        <p class="text-xl text-cream mb-8">
            Contact us for personalized recommendations based on your family's health goals.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold">
                Get Personalized Advice
            </a>
            <a href="/produce" class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white rounded-md hover:bg-white hover:text-earth-brown transition-colors duration-200 font-semibold">
                Shop Individual Produce
            </a>
        </div>
    </div>
</section>

@endsection