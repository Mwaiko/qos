@extends('layouts.app')

@section('title', 'Blog Posts - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                    Blog Posts
                </h1>
                <p class="text-lg text-sage-green">
                    Manage your blog content and articles
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <a 
                    href="{{ route('posts.create') }}" 
                    class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add New Post
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Overview -->
<section class="py-8 bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-cream rounded-lg p-6 shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-sage-green font-medium">Total Posts</p>
                        <p class="text-3xl font-bold text-deep-soil mt-1">{{ $posts->total() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-earth-brown/10 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="bg-green-50 rounded-lg p-6 shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-green-700 font-medium">Published</p>
                        <p class="text-3xl font-bold text-green-800 mt-1">{{ $posts->where('status', 'published')->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="bg-amber-50 rounded-lg p-6 shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-amber-700 font-medium">Drafts</p>
                        <p class="text-3xl font-bold text-amber-800 mt-1">{{ $posts->where('status', 'draft')->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="bg-blue-50 rounded-lg p-6 shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-blue-700 font-medium">This Month</p>
                        <p class="text-3xl font-bold text-blue-800 mt-1">{{ $posts->where('created_at', '>=', now()->startOfMonth())->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Posts Table Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 rounded-lg p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if($posts->isEmpty())
            <div class="text-center py-12 bg-cream rounded-lg">
                <svg class="mx-auto h-12 w-12 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <h3 class="mt-2 text-lg font-semibold text-deep-soil">No posts yet</h3>
                <p class="mt-1 text-sage-green">Get started by creating your first blog post.</p>
                <div class="mt-6">
                    <a href="{{ route('posts.create') }}" class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Create First Post
                    </a>
                </div>
            </div>
        @else
            <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-sage-green/20">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-sage-green/20">
                        <thead class="bg-cream">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Post
                                </th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Published
                                </th>
                                <th scope="col" class="px-6 py-4 text-right text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-sage-green/10">
                            @foreach($posts as $post)
                            <tr class="hover:bg-cream/50 transition-colors duration-150">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        @if($post->featured_image)
                                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="h-12 w-12 rounded-lg object-cover">
                                        @else
                                            <div class="flex-shrink-0 h-12 w-12 bg-earth-brown/10 rounded-lg flex items-center justify-center">
                                                <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-deep-soil">{{ $post->title }}</div>
                                            <div class="text-xs text-sage-green">{{ $post->slug }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-sage-green/10 text-sage-green">
                                        {{ $post->category ?? 'General' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    @if($post->status === 'published')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                            <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                                            Published
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-800">
                                            <span class="w-2 h-2 bg-amber-500 rounded-full mr-1.5"></span>
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-sage-green">
                                        {{ $post->created_at->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs text-sage-green/70">
                                        {{ $post->created_at->diffForHumans() }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-3">
                                        <a href="{{ route('posts.show', $post->id) }}" class="text-sage-green hover:text-deep-soil transition-colors" title="View">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="text-earth-brown hover:text-deep-soil transition-colors" title="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 transition-colors" title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @if($posts->hasPages())
                <div class="mt-6">
                    {{ $posts->links() }}
                </div>
            @endif
        @endif
    </div>
</section>

@endsection