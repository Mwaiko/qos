@extends('layouts.app')

@section('title', 'Munyaka Farm - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-sage-green/20 to-cream py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-6">
                Welcome to <span class="text-earth-brown">Munyaka Farm</span>
            </h1>
            <p class="text-xl text-sage-green leading-relaxed">
                A lush sanctuary along the Gilgil-Nyahururu Highway where the rhythms of the land are guided by generations of care.
            </p>
        </div>
    </div>
</section>

<!-- Farm Gallery Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <div class="rounded-lg overflow-hidden shadow-xl">
                <img src="{{ asset('Images/farm-wide.png') }}" alt="Munyaka Farm Overview" class="w-full h-96 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-xl">
                <img src="{{ asset('Images/farm-row.png') }}" alt="Farm Rows" class="w-full h-96 object-cover">
            </div>
        </div>
        
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('Images/farm-produce.png') }}" alt="Harvest Time" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('Images/farm-soil.png') }}" alt="Rich Soil" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('Images/fresh-vegetables.png') }}" alt="Fresh Vegetables" class="w-full h-64 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Farm Story Section -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-8 text-center">
                Where Tradition Meets Purpose
            </h2>
            <div class="space-y-6 text-sage-green leading-relaxed text-lg">
                <p>
                    Munyaka Farm lies quietly along the Gilgil-Nyahururu Highway, where the soil tells a story that begins with founder Jane Kariuki's parents, who instilled a deep respect for sustainable farming and the belief that the healthiest food comes from what you grow yourself.
                </p>
                <p>
                    Walking through the rows of vibrant Chinese cabbage, bok choy, beetroots, and other nutrient-rich vegetables, it is easy to feel the continuity of a family legacy — a philosophy of growing with intention, nurturing every plant, and honouring the land that sustains us.
                </p>
                <p>
                    Munyaka Farm is where tradition meets purpose: organic farming practices ensure produce free from fertilizers, while careful cultivation preserves the vitality of every harvest.
                </p>
                <p class="font-semibold text-deep-soil">
                    But Munyaka Farm is more than just fertile soil and thriving crops. It is a space where health, heritage, and community converge. Each vegetable harvested carries the promise of nourishing families, empowering local farmers, and cultivating a culture of mindful eating across Kenya.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Farm Stats Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                Our Farming Practices
            </h2>
            <p class="text-xl text-sage-green max-w-3xl mx-auto">
                Built on generations of wisdom and a commitment to sustainability
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-8 text-center shadow-lg">
                <div class="text-4xl font-bold text-earth-brown mb-2">100%</div>
                <p class="text-sm font-semibold text-deep-soil mb-2">Organic Practices</p>
                <p class="text-xs text-sage-green">No synthetic chemicals or pesticides used</p>
            </div>
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-8 text-center shadow-lg">
                <div class="text-4xl font-bold text-earth-brown mb-2">0</div>
                <p class="text-sm font-semibold text-deep-soil mb-2">Chemical Fertilizers</p>
                <p class="text-xs text-sage-green">Only natural composting methods</p>
            </div>
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-8 text-center shadow-lg">
                <div class="text-4xl font-bold text-earth-brown mb-2">3+</div>
                <p class="text-sm font-semibold text-deep-soil mb-2">Generations</p>
                <p class="text-xs text-sage-green">Of sustainable farming expertise</p>
            </div>
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-8 text-center shadow-lg">
                <div class="text-4xl font-bold text-earth-brown mb-2">Fresh</div>
                <p class="text-sm font-semibold text-deep-soil mb-2">Daily Harvests</p>
                <p class="text-xs text-sage-green">From soil to table in hours</p>
            </div>
        </div>
        
        <!-- Farming Process -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-10 h-10 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-3">Soil Preparation</h3>
                <p class="text-sage-green leading-relaxed">
                    We enrich our soil naturally through composting and crop rotation, maintaining the land's vitality without chemicals.
                </p>
            </div>
            
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-10 h-10 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-3">Organic Cultivation</h3>
                <p class="text-sage-green leading-relaxed">
                    Each plant is nurtured with care, using sustainable methods passed down through generations of farmers.
                </p>
            </div>
            
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-earth-brown/10 rounded-full mb-6">
                    <svg class="w-10 h-10 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-3">Fresh Harvest</h3>
                <p class="text-sage-green leading-relaxed">
                    We harvest at peak freshness and deliver quickly, ensuring maximum nutrition and flavor for your family.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="py-20 bg-gradient-to-br from-cream to-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-6">
                    Visit Munyaka Farm
                </h2>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-earth-brown mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-deep-soil">Location</p>
                            <p class="text-sage-green">Gilgil-Nyahururu Highway, Gilgil, Kenya</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-earth-brown mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-deep-soil">Visit Hours</p>
                            <p class="text-sage-green">Monday - Saturday: 8:00 AM - 5:00 PM</p>
                            <p class="text-sage-green">Sunday: Closed</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-earth-brown mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-deep-soil">Contact</p>
                            <p class="text-sage-green">Schedule a farm tour or bulk orders</p>
                        </div>
                    </div>
                </div>
                
                <a href="/contact" class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                    Schedule a Visit
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            
            <div class="bg-white rounded-lg shadow-xl p-4">
                <div class="aspect-w-16 aspect-h-12 bg-sage-green/10 rounded-lg flex items-center justify-center">
                    <div class="text-center p-8">
                        <svg class="w-16 h-16 text-earth-brown mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-sage-green">Interactive map coming soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
            Taste the Difference of Farm-Fresh Organic Produce
        </h2>
        <p class="text-xl text-cream mb-8">
            Every vegetable from Munyaka Farm carries generations of care and commitment to your health.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/produce" class="inline-flex items-center justify-center px-8 py-4 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold text-lg">
                Shop Our Produce
            </a>
            <a href="/about" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white rounded-md hover:bg-white hover:text-earth-brown transition-colors duration-200 font-semibold text-lg">
                Learn Our Story
            </a>
        </div>
    </div>
</section>

@endsection