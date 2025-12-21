@extends('layouts.app')

@section('title', $post->title . ' - Quality Outsource Solutions')

@section('content')

<!-- Hero Section with Post Title -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <!-- Category Badge -->
            @if($post->category)
                <div class="mb-4">
                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-semibold bg-sage-green/20 text-sage-green">
                        {{ $post->category }}
                    </span>
                </div>
            @endif

            <!-- Post Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-deep-soil mb-6 leading-tight">
                {{ $post->title }}
            </h1>

            <!-- Post Meta Information -->
            <div class="flex flex-wrap items-center justify-center gap-4 text-sage-green">
                <!-- Author -->
                @if($post->author)
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-medium">{{ $post->author }}</span>
                    </div>
                @endif

                <!-- Date -->
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>{{ $post->created_at->format('F d, Y') }}</span>
                </div>

                <!-- Reading Time (estimate based on content length) -->
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>{{ ceil(str_word_count($post->content) / 200) }} min read</span>
                </div>

                <!-- Status Badge (if draft) -->
                @if($post->status === 'draft')
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-800">
                            <span class="w-2 h-2 bg-amber-500 rounded-full mr-1.5"></span>
                            Draft
                        </span>
                    </div>
                @endif

                <!-- Featured Badge -->
                @if($post->is_featured)
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-earth-brown/10 text-earth-brown">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Featured
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($post->featured_image)
    <section class="py-8 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-2xl">
                <img 
                    src="{{ asset('storage/' . $post->featured_image) }}" 
                    alt="{{ $post->title }}"
                    class="w-full h-auto object-cover"
                >
            </div>
        </div>
    </section>
@endif

<!-- Post Content -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Excerpt (if available) -->
        @if($post->excerpt)
            <div class="mb-8 p-6 bg-sage-green/5 border-l-4 border-sage-green rounded-r-lg">
                <p class="text-lg text-sage-green italic leading-relaxed">
                    {{ $post->excerpt }}
                </p>
            </div>
        @endif

        <!-- Main Content -->
        <div class="prose prose-lg max-w-none">
            <div class="text-deep-soil leading-relaxed" style="white-space: pre-line;">
                {{ $post->content }}
            </div>
        </div>

        <!-- Tags -->
        @if($post->tags)
            <div class="mt-12 pt-8 border-t border-sage-green/20">
                <h3 class="text-sm font-semibold text-deep-soil mb-4">Tags:</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(explode(',', $post->tags) as $tag)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-cream text-sage-green border border-sage-green/20">
                            <svg class="w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                            {{ trim($tag) }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Share Section -->
        <div class="mt-8 pt-8 border-t border-sage-green/20">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <h3 class="text-sm font-semibold text-deep-soil">Share this post:</h3>
                <div class="flex gap-3">
                    <!-- Twitter/X -->
                    <a 
                        href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->url()) }}" 
                        target="_blank"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-sage-green/10 text-sage-green hover:bg-sage-green hover:text-white transition-colors duration-200"
                        title="Share on Twitter"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <!-- Facebook -->
                    <a 
                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                        target="_blank"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-sage-green/10 text-sage-green hover:bg-sage-green hover:text-white transition-colors duration-200"
                        title="Share on Facebook"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a 
                        href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" 
                        target="_blank"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-sage-green/10 text-sage-green hover:bg-sage-green hover:text-white transition-colors duration-200"
                        title="Share on LinkedIn"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <!-- Copy Link -->
                    <button 
                        onclick="copyToClipboard('{{ request()->url() }}')"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-sage-green/10 text-sage-green hover:bg-sage-green hover:text-white transition-colors duration-200"
                        title="Copy link"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Action Buttons -->
<section class="py-12 bg-cream">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
            <a 
                href="{{ route('posts.index') }}" 
                class="inline-flex items-center px-6 py-3 border-2 border-sage-green text-sage-green rounded-md hover:bg-sage-green hover:text-white transition-colors duration-200 font-semibold w-full sm:w-auto justify-center"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to All Posts
            </a>
            
            <div class="flex gap-3 w-full sm:w-auto">
                <a 
                    href="{{ route('posts.edit', $post->id) }}" 
                    class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg flex-1 sm:flex-initial justify-center"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit Post
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Related/Recent Posts Section (Optional) -->
<section class="py-16 bg-white border-t border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-serif font-bold text-deep-soil mb-8 text-center">
            More Articles
        </h2>
        <div class="text-center text-sage-green">
            <p>Check out more posts from our blog</p>
            <a href="{{ route('posts.index') }}" class="inline-flex items-center mt-4 text-earth-brown hover:text-deep-soil font-semibold">
                View All Posts
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Copy to Clipboard Script -->
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        // Show success feedback
        alert('Link copied to clipboard!');
    }, function(err) {
        console.error('Could not copy text: ', err);
    });
}
</script>

@endsection