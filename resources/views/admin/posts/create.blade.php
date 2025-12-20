@extends('layouts.app')

@section('title', 'Create New Post - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                Create New Post
            </h1>
            <p class="text-lg text-sage-green">
                Share your farming knowledge and stories with the community
            </p>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Please correct the following errors:</h3>
                        <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="bg-cream rounded-lg shadow-xl p-8">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Post Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-deep-soil mb-2">
                        Post Title <span class="text-earth-brown">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="title"
                        name="title" 
                        value="{{ old('title') }}"
                        required
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="Enter an engaging title for your post..."
                    >
                </div>

                <!-- Slug (auto-generated hint) -->
                <div class="mb-6">
                    <label for="slug" class="block text-sm font-semibold text-deep-soil mb-2">
                        URL Slug
                    </label>
                    <input 
                        type="text" 
                        id="slug"
                        name="slug" 
                        value="{{ old('slug') }}"
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="auto-generated-from-title"
                    >
                    <p class="mt-1 text-xs text-sage-green">Leave blank to auto-generate from title</p>
                </div>

                <!-- Category and Author Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-semibold text-deep-soil mb-2">
                            Category
                        </label>
                        <input 
                            type="text" 
                            id="category"
                            name="category" 
                            value="{{ old('category') }}"
                            class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                            placeholder="e.g., Farming Tips, Success Stories"
                        >
                    </div>

                    <!-- Author -->
                    <div>
                        <label for="author" class="block text-sm font-semibold text-deep-soil mb-2">
                            Author Name
                        </label>
                        <input 
                            type="text" 
                            id="author"
                            name="author" 
                            value="{{ old('author') }}"
                            class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                            placeholder="Enter author name"
                        >
                    </div>
                </div>

                <!-- Excerpt -->
                <div class="mb-6">
                    <label for="excerpt" class="block text-sm font-semibold text-deep-soil mb-2">
                        Excerpt
                    </label>
                    <textarea 
                        id="excerpt"
                        name="excerpt" 
                        rows="3"
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="Write a brief summary of your post (shown in post listings)..."
                    >{{ old('excerpt') }}</textarea>
                    <p class="mt-1 text-xs text-sage-green">Recommended: 150-200 characters</p>
                </div>

                <!-- Post Content -->
                <div class="mb-6">
                    <label for="content" class="block text-sm font-semibold text-deep-soil mb-2">
                        Post Content <span class="text-earth-brown">*</span>
                    </label>
                    <textarea 
                        id="content"
                        name="content" 
                        rows="12"
                        required
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="Write your story here... Share your insights, experiences, and knowledge with the community."
                    >{{ old('content') }}</textarea>
                </div>

                <!-- Featured Image -->
                <div class="mb-6">
                    <label for="featured_image" class="block text-sm font-semibold text-deep-soil mb-2">
                        Featured Image
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-sage-green/30 border-dashed rounded-md hover:border-earth-brown transition-colors">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-sage-green" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-sage-green">
                                <label for="featured_image" class="relative cursor-pointer bg-white rounded-md font-medium text-earth-brown hover:text-deep-soil focus-within:outline-none">
                                    <span>Upload a file</span>
                                    <input id="featured_image" name="featured_image" type="file" class="sr-only" accept="image/*">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-sage-green">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>

                <!-- Meta Description (SEO) -->
                <div class="mb-6">
                    <label for="meta_description" class="block text-sm font-semibold text-deep-soil mb-2">
                        Meta Description (SEO)
                    </label>
                    <textarea 
                        id="meta_description"
                        name="meta_description" 
                        rows="2"
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="SEO description for search engines..."
                    >{{ old('meta_description') }}</textarea>
                    <p class="mt-1 text-xs text-sage-green">Recommended: 150-160 characters for optimal SEO</p>
                </div>

                <!-- Status and Featured Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-semibold text-deep-soil mb-2">
                            Post Status
                        </label>
                        <select 
                            id="status"
                            name="status"
                            class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil"
                        >
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', 'published') == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                    </div>

                    <!-- Is Featured -->
                    <div class="flex items-start pt-8">
                        <div class="flex items-center h-5">
                            <input 
                                id="is_featured" 
                                name="is_featured" 
                                type="checkbox" 
                                value="1"
                                {{ old('is_featured') ? 'checked' : '' }}
                                class="focus:ring-earth-brown h-5 w-5 text-earth-brown border-sage-green/30 rounded"
                            >
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="is_featured" class="font-semibold text-deep-soil">Featured Post</label>
                            <p class="text-sage-green">Display this post prominently on the homepage</p>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="mb-6">
                    <label for="tags" class="block text-sm font-semibold text-deep-soil mb-2">
                        Tags
                    </label>
                    <input 
                        type="text" 
                        id="tags"
                        name="tags" 
                        value="{{ old('tags') }}"
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="organic, vegetables, sustainability (comma-separated)"
                    >
                    <p class="mt-1 text-xs text-sage-green">Separate tags with commas</p>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between pt-6 border-t border-sage-green/20">
                    <a 
                        href="{{ route('posts.index') }}" 
                        class="inline-flex items-center px-6 py-3 border-2 border-sage-green text-sage-green rounded-md hover:bg-sage-green hover:text-white transition-colors duration-200 font-semibold"
                    >
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Cancel
                    </a>
                    <div class="flex space-x-3">
                        <button 
                            type="submit" 
                            name="action" 
                            value="draft"
                            class="inline-flex items-center px-6 py-3 border-2 border-earth-brown text-earth-brown rounded-md hover:bg-earth-brown hover:text-white transition-colors duration-200 font-semibold"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                            </svg>
                            Save Draft
                        </button>
                        <button 
                            type="submit" 
                            name="action" 
                            value="publish"
                            class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Publish Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection