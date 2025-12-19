@extends('layouts.app')

@section('title', 'Quality Outsource Solutions - Organic Produce from Gilgil')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-deep-soil mb-6 leading-tight">
                    Organic Produce<br>
                    <span class="text-earth-brown">Grown With Intention</span>
                </h1>
                <p class="text-lg md:text-xl text-sage-green mb-8 leading-relaxed">
                    From our family farm in Gilgil to your table. Experience 100% organic vegetables, cultivated without fertilizers, and rooted in generations of sustainable farming.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/produce" class="inline-flex items-center justify-center px-8 py-4 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold text-lg">
                        🧺 Shop Produce
                    </a>
                    <a href="/learn" class="inline-flex items-center justify-center px-8 py-4 bg-white text-earth-brown border-2 border-earth-brown rounded-md hover:bg-earth-brown hover:text-white transition-colors duration-200 font-semibold text-lg">
                        📖 Learn About Clean Eating
                    </a>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="relative">
                <div class="rounded-lg overflow-hidden shadow-2xl">
                    <img src="/images/farm-hero.jpg" alt="Munyaka Farm" class="w-full h-full object-cover">
                </div>
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-6 bg-white rounded-lg shadow-xl p-6 max-w-xs">
                    <p class="text-sm font-semibold text-deep-soil mb-2">🌱 Munyaka Farm, Gilgil</p>
                    <p class="text-xs text-sage-green">Family-owned since generations. 100% organic practices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Badges Section -->
<section class="py-12 bg-white border-y border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-1">100% Organic</h3>
                <p class="text-sm text-sage-green">No chemicals or fertilizers</p>
            </div>
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-1">Family-Owned</h3>
                <p class="text-sm text-sage-green">Generations of expertise</p>
            </div>
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-1">Community First</h3>
                <p class="text-sm text-sage-green">Supporting local farmers</p>
            </div>
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-1">Education First</h3>
                <p class="text-sm text-sage-green">Empowering healthy choices</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="/images/jane-kariuki.jpg" alt="Jane Kariuki - Founder" class="rounded-lg shadow-xl">
            </div>
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-6">
                    Returning to the Wisdom of <span class="text-earth-brown">Growing What We Eat</span>
                </h2>
                <p class="text-sage-green leading-relaxed mb-6">
                    Quality Outsource Solutions was born from a lineage of wisdom rooted in sustainable farming and the belief that food is medicine, culture, and legacy. On our family farm in Gilgil, every harvest carries generations of care and respect for the land.
                </p>
                <p class="text-sage-green leading-relaxed mb-8">
                    Founded by Jane Kariuki, a wellness advocate and sustainability champion, we're building a movement that places health, sustainability, and community at the heart of every meal.
                </p>
                <a href="/about" class="inline-flex items-center text-earth-brown hover:text-deep-soil font-semibold transition-colors">
                    Read Our Story
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Produce Section -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Our Fresh Organic Produce
            </h2>
            <p class="text-lg text-sage-green max-w-2xl mx-auto">
                Nutrient-dense vegetables cultivated without fertilizers, harvested fresh from Munyaka Farm.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @foreach($featured_products ?? [] as $product)
                @include('components.product-card', ['product' => $product])
            @endforeach
        </div>
        
        <div class="text-center">
            <a href="/produce" class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                View All Produce
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Wellness Baskets Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Curated Wellness Baskets
            </h2>
            <p class="text-lg text-sage-green max-w-2xl mx-auto">
                Thoughtfully designed produce bundles to support your family's health goals.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach($featured_bundles ?? [] as $bundle)
                @include('components.bundle-card', ['bundle' => $bundle])
            @endforeach
        </div>
        
        <div class="text-center">
            <a href="/baskets" class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                Explore All Baskets
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Educational Content Section -->
<section class="py-20 bg-gradient-to-br from-sage-green/10 to-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-6">
                    Health Begins With What's On Your Plate
                </h2>
                <p class="text-sage-green leading-relaxed mb-6">
                    We believe knowledge is as powerful as nourishment. That's why we go beyond farming to empower families with insights on organic foods and their role in preventing lifestyle and chronic diseases.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-earth-brown mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sage-green">Nutritional guides for every vegetable</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-earth-brown mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sage-green">Easy-to-follow healthy recipes</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-earth-brown mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sage-green">Insights on preventing lifestyle diseases</span>
                    </li>
                </ul>
                <a href="/learn" class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                    Start Learning
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <div>
                <img src="/images/learning-content.jpg" alt="Educational Content" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
            Ready to Nourish Your Family with Organic Goodness?
        </h2>
        <p class="text-xl text-cream mb-8">
            Experience produce cultivated with generations of care. From our family to yours.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/produce" class="inline-flex items-center justify-center px-8 py-4 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold text-lg">
                Shop Now
            </a>
            <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white rounded-md hover:bg-white hover:text-earth-brown transition-colors duration-200 font-semibold text-lg">
                Contact Us
            </a>
        </div>
    </div>
</section>

@endsection