@extends('layouts.app')

@section('title', 'Edit Post - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                Edit Post
            </h1>
            <p class="text-lg text-sage-green">
                Update your post content and settings
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
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Post Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-deep-soil mb-2">
                        Post Title <span class="text-earth-brown">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="title"
                        name="title" 
                        value="{{ old('title', $post->title) }}"
                        required
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="Enter an engaging title for your post..."
                    >
                </div>

                <!-- Slug -->
                <div class="mb-6">
                    <label for="slug" class="block text-sm font-semibold text-deep-soil mb-2">
                        URL Slug
                    </label>
                    <input 
                        type="text" 
                        id="slug"
                        name="slug" 
                        value="{{ old('slug', $post->slug) }}"
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
                            value="{{ old('category', $post->category) }}"
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
                            value="{{ old('author', $post->author) }}"
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
                    >{{ old('excerpt', $post->excerpt) }}</textarea>
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
                    >{{ old('content', $post->content) }}</textarea>
                </div>

                <!-- Featured Image -->
                <div class="mb-6">
                    <label for="featured_image" class="block text-sm font-semibold text-deep-soil mb-2">
                        Featured Image
                    </label>
                    
                    @if($post->featured_image)
                        <div class="mb-4">
                            <p class="text-sm text-sage-green mb-2">Current image:</p>
                            <div class="relative inline-block">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="h-32 w-auto rounded-lg shadow-md">
                            </div>
                            <p class="text-xs text-sage-green mt-2">Upload a new image to replace the current one</p>
                        </div>
                    @endif

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
                    >{{ old('meta_description', $post->meta_description) }}</textarea>
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
                            <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
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
                                {{ old('is_featured', $post->is_featured) ? 'checked' : '' }}
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
                        value="{{ old('tags', $post->tags) }}"
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
                            Save as Draft
                        </button>
                        <button 
                            type="submit" 
                            name="action" 
                            value="publish"
                            class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Update Post
                        </button>
                    </div>
                </div>
            </form>

            <!-- Delete Post Section -->
            <div class="mt-8 pt-8 border-t border-sage-green/20">
                <div class="bg-red-50 rounded-lg p-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                        <div class="ml-3 flex-1">
                            <h3 class="text-sm font-semibold text-red-800">Danger Zone</h3>
                            <p class="mt-1 text-sm text-red-700">
                                Once you delete this post, there is no going back. Please be certain.
                            </p>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-4" onsubmit="return confirm('Are you absolutely sure you want to delete this post? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button 
                                    type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors duration-200 font-semibold text-sm"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                    Delete Post
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection