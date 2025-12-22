@extends('layouts.app')

@section('title', 'About Us - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-6">
                More Than a Farm.<br>
                <span class="text-earth-brown">A Family Legacy.</span>
            </h1>
            <p class="text-xl text-sage-green leading-relaxed">
                Quality Outsource Solutions was built on a simple truth: healthy individuals shape healthier communities. From our family farm in Gilgil, we're cultivating a movement rooted in wellness, heritage, and intention.
            </p>
        </div>
    </div>
</section>

<!-- Brand Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <img src="{{ asset('Images/Heritage.png')  }}" alt="Our Heritage" class="rounded-lg shadow-xl">
            </div>
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-6">
                    Our Story
                </h2>
                <div class="space-y-4 text-sage-green leading-relaxed">
                    <p>
                        Quality Outsource Solutions was born from a lineage of wisdom rooted in the founder's childhood. Raised by parents who believed deeply in the strength of the soil and the integrity of what we grow, she learned early that food is more than nourishment. It is heritage, health, and a profound act of care.
                    </p>
                    <p>
                        On the family farm in Gilgil, every meal began long before it reached the kitchen. It began on the earth. Her parents taught her that sustainable farming was not a trend but a way of life, and that growing what you eat is the surest path to wellness.
                    </p>
                    <p>
                        This philosophy echoes the timeless Kikuyu tradition that values the land as a living inheritance. In many African households, especially within Kikuyu culture, families grew everything they ate. Farming was an expression of responsibility, resilience, and love.
                    </p>
                    <p>
                        As lifestyle diseases rise and highly processed foods become more common, our founder felt called to return to these roots. Today, Quality Outsource Solutions stands as a continuation of a family philosophy, an honouring of Kikuyu heritage, and a visionary step toward a Kenya where every household has the opportunity to eat from the earth with intention.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Our Mission
            </h2>
            <p class="text-xl text-sage-green max-w-3xl mx-auto">
                To make clean eating attainable by offering nutrient-rich vegetables grown without fertilizers and nurtured using sustainable farming practices.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                        <path d="M3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-4">Health</h3>
                <p class="text-sage-green leading-relaxed">
                    Nurturing healthier homes through organic produce that supports long-term wellbeing and prevents lifestyle diseases.
                </p>
            </div>
            
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-4">Sustainability</h3>
                <p class="text-sage-green leading-relaxed">
                    Honouring the land through eco-conscious practices and sustainable agriculture that protects our environment.
                </p>
            </div>
            
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-4">Community</h3>
                <p class="text-sage-green leading-relaxed">
                    Empowering local farmers and building a movement where wellness is accessible to all Kenyan families.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <span class="inline-block px-4 py-1.5 bg-earth-brown/10 text-earth-brown rounded-full text-sm font-semibold mb-4">
                    The Founder
                </span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-6">
                    Jane Kariuki
                </h2>
                <p class="text-lg text-sage-green italic mb-6">
                    Wellness Advocate, Sustainability Champion, and Visionary
                </p>
                <div class="space-y-4 text-sage-green leading-relaxed">
                    <p>
                        From an early age, Jane was immersed in the values of healthy living and mindful eating, influenced deeply by her parents and her husband, who believed passionately that growing what you eat is the single most powerful way to nurture your body.
                    </p>
                    <p>
                        Her career has been defined by a commitment to sustainability, integrating eco-conscious practices into every space she inhabits. Even post-retirement, Jane continues to champion sustainable living, bridging her professional expertise with her personal mission to create a healthier, more resilient nation.
                    </p>
                    <p>
                        Through Quality Outsource Solutions, she has translated this lifelong passion into action, cultivating organic, wholesome produce that not only nourishes families but also empowers local farmers and communities economically.
                    </p>
                    <p class="font-semibold text-deep-soil">
                        At the heart of Jane's vision is a belief that health, sustainability, and community are inseparable. Every seed sown, every vegetable harvested, and every family educated about mindful eating carries forward her commitment to building a Kenya where wellness begins at the root.
                    </p>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <img src="/images/jane-kariuki-portrait.jpg" alt="Jane Kariuki" class="rounded-lg shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Munyaka Farm Section -->
<section class="py-20 bg-gradient-to-br from-sage-green/10 to-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Munyaka Farm
            </h2>
            <p class="text-xl text-sage-green max-w-3xl mx-auto">
                Where tradition meets purpose. A lush sanctuary along the Gilgil-Nyahururu Highway where the rhythms of the land are guided by generations of care.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
            <div>
                <img src="{{ asset('Images/Munyaka-farm.png')  }}" alt="Munyaka Farm" class="rounded-lg shadow-xl">
            </div>
            <div>
                <div class="space-y-4 text-sage-green leading-relaxed">
                    <p>
                        Munyaka Farm lies quietly along the Gilgil-Nyahururu Highway, where the soil tells a story that begins with founder Jane Kariuki's parents, who instilled a deep respect for sustainable farming and the belief that the healthiest food comes from what you grow yourself.
                    </p>
                    <p>
                        Walking through the rows of vibrant Chinese cabbage, bok choy, beetroots, and other nutrient-rich vegetables, it is easy to feel the continuity of a family legacy — a philosophy of growing with intention, nurturing every plant, and honouring the land that sustains us.
                    </p>
                    <p>
                        Organic farming practices ensure produce free from fertilizers, while careful cultivation preserves the vitality of every harvest. But Munyaka Farm is more than just fertile soil and thriving crops. It is a space where health, heritage, and community converge.
                    </p>
                    <p class="font-semibold text-deep-soil">
                        Each vegetable harvested carries the promise of nourishing families, empowering local farmers, and cultivating a culture of mindful eating across Kenya.
                    </p>
                </div>
                <a href="/farm" class="inline-flex items-center mt-6 text-earth-brown hover:text-deep-soil font-semibold transition-colors">
                    Visit Our Farm Page
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Farm Features -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-earth-brown mb-2">100%</div>
                <p class="text-sm text-sage-green">Organic Practices</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-earth-brown mb-2">0</div>
                <p class="text-sm text-sage-green">Chemical Fertilizers</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-earth-brown mb-2">3+</div>
                <p class="text-sm text-sage-green">Generations of Farming</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-earth-brown mb-2">Fresh</div>
                <p class="text-sm text-sage-green">Daily Harvests</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Commitments Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Our Commitments
            </h2>
            <p class="text-xl text-sage-green max-w-3xl mx-auto">
                More than promises. These are the values that guide every decision we make.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-earth-brown rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-deep-soil mb-2">100% Organic, Fertilizer-Free</h3>
                    <p class="text-sage-green">Every vegetable is grown using sustainable methods without any chemical fertilizers or harmful pesticides.</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-earth-brown rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-deep-soil mb-2">Family-Owned Excellence</h3>
                    <p class="text-sage-green">Generations of farming expertise ensure every harvest meets our high standards of quality and care.</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-earth-brown rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-deep-soil mb-2">Environmental Stewardship</h3>
                    <p class="text-sage-green">We partner with local suppliers who share our dedication to organic standards and protecting our environment.</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-earth-brown rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-deep-soil mb-2">Education & Empowerment</h3>
                    <p class="text-sage-green">We guide families with nutritional insights, recipes, and knowledge to make informed food choices for lasting wellness.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
            Join Us in Building Healthier Communities
        </h2>
        <p class="text-xl text-cream mb-8">
            Experience the difference of organic produce grown with generations of wisdom and care.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/produce" class="inline-flex items-center justify-center px-8 py-4 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold text-lg">
                Explore Our Produce
            </a>
            <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white rounded-md hover:bg-white hover:text-earth-brown transition-colors duration-200 font-semibold text-lg">
                Get in Touch
            </a>
        </div>
    </div>
</section>

@endsection