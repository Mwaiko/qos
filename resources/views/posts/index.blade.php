@extends('layouts.app')

@section('title', 'Learn About Clean Eating - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-6">
                Food as Medicine, <span class="text-earth-brown">Knowledge as Power</span>
            </h1>
            <p class="text-lg md:text-xl text-sage-green leading-relaxed">
                Discover the nutritional value of organic foods, their role in preventing lifestyle diseases, and practical ways to incorporate them into your daily meals.
            </p>
        </div>
    </div>
</section>

<!-- Educational Philosophy -->
<section class="py-12 bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-2">Nutrition Science</h3>
                <p class="text-sm text-sage-green">Evidence-based insights on organic produce and health</p>
            </div>
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-2">Simple Recipes</h3>
                <p class="text-sm text-sage-green">Easy-to-follow meals for everyday cooking</p>
            </div>
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-earth-brown/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-deep-soil mb-2">Disease Prevention</h3>
                <p class="text-sm text-sage-green">How organic foods reduce lifestyle disease risks</p>
            </div>
        </div>
    </div>
</section>

<!-- Category Filter -->
<section class="py-8 bg-cream/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-2 justify-center">
            <button class="px-5 py-2.5 rounded-md bg-earth-brown text-white font-medium transition-colors">
                All Topics
            </button>
            <button class="px-5 py-2.5 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                Nutrition Guides
            </button>
            <button class="px-5 py-2.5 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                Recipes
            </button>
            <button class="px-5 py-2.5 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                Health Benefits
            </button>
            <button class="px-5 py-2.5 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                Disease Prevention
            </button>
            <button class="px-5 py-2.5 rounded-md bg-white text-deep-soil hover:bg-earth-brown/10 font-medium transition-colors">
                Sustainable Living
            </button>
        </div>
    </div>
</section>

<!-- Featured Article -->
@if(isset($featured_post))
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-earth-brown/5 to-sage-green/5 rounded-2xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <!-- Image -->
                <div class="relative h-64 lg:h-full">
                    <img 
                        src="{{ $featured_post->image ?? '/images/placeholder-post.jpg' }}" 
                        alt="{{ $featured_post->title }}"
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute top-6 left-6">
                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-heritage-purple text-white">
                            ⭐ Featured Article
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <div class="mb-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-earth-brown/10 text-earth-brown">
                            {{ $featured_post->category ?? 'Nutrition' }}
                        </span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-4">
                        {{ $featured_post->title }}
                    </h2>
                    
                    <p class="text-sage-green text-lg leading-relaxed mb-6">
                        {{ Str::limit($featured_post->excerpt, 200) }}
                    </p>
                    
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center text-sm text-sage-green">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            {{ $featured_post->published_at->format('M d, Y') }}
                        </div>
                        <div class="flex items-center text-sm text-sage-green">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $featured_post->read_time ?? '5' }} min read
                        </div>
                    </div>
                    
                    <a href="/learn/{{ $featured_post->slug }}" class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold w-fit">
                        Read Full Article
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Articles Grid -->
<section class="py-16 bg-cream/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts ?? [] as $post)
                <!-- Post Card -->
                <article class="group bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-all duration-300">
                    <!-- Image -->
                    <div class="relative overflow-hidden aspect-[16/10] bg-gradient-to-br from-cream to-sage-green/10">
                        <img 
                            src="{{ $post->image ?? '/images/placeholder-post.jpg' }}" 
                            alt="{{ $post->title }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        >
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-white/90 text-deep-soil backdrop-blur-sm">
                                {{ $post->category ?? 'Health' }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-serif font-bold text-deep-soil mb-3 group-hover:text-earth-brown transition-colors">
                            <a href="/learn/{{ $post->slug }}">{{ $post->title }}</a>
                        </h3>
                        
                        <p class="text-sage-green mb-4 leading-relaxed">
                            {{ Str::limit($post->excerpt, 120) }}
                        </p>
                        
                        <!-- Meta Info -->
                        <div class="flex items-center justify-between pt-4 border-t border-sage-green/10">
                            <div class="flex items-center text-xs text-sage-green">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $post->published_at->format('M d, Y') }}
                            </div>
                            <div class="flex items-center text-xs text-sage-green">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $post->read_time ?? '5' }} min
                            </div>
                        </div>
                        
                        <!-- Read More -->
                        <a href="/learn/{{ $post->slug }}" class="inline-flex items-center text-earth-brown hover:text-deep-soil font-semibold mt-4 transition-colors group">
                            Read More
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <!-- Empty State -->
                <div class="col-span-full text-center py-16">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-sage-green/10 rounded-full mb-6">
                        <svg class="w-10 h-10 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-3">Educational Content Coming Soon</h3>
                    <p class="text-sage-green mb-8 max-w-md mx-auto">
                        We're preparing valuable insights on organic nutrition and clean eating. Check back soon or explore our produce.
                    </p>
                    <a href="/produce" class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                        Shop Organic Produce
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if(isset($posts) && $posts->hasPages())
        <div class="mt-12">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-earth-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 rounded-full mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </div>
        <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">
            Stay Informed About Clean Eating
        </h2>
        <p class="text-xl text-cream mb-8">
            Get weekly nutrition tips, recipes, and insights delivered to your inbox.
        </p>
        
        <!-- Newsletter Form -->
        <form class="max-w-md mx-auto">
            <div class="flex flex-col sm:flex-row gap-3">
                <input 
                    type="email" 
                    placeholder="Enter your email" 
                    class="flex-1 px-5 py-3 rounded-md text-deep-soil focus:outline-none focus:ring-2 focus:ring-white"
                    required
                >
                <button 
                    type="submit" 
                    class="px-8 py-3 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold whitespace-nowrap"
                >
                    Subscribe
                </button>
            </div>
            <p class="text-sm text-cream/80 mt-3">
                We respect your privacy. Unsubscribe at any time.
            </p>
        </form>
    </div>
</section>

@endsection