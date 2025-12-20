@extends('layouts.app')

@section('title', $product->name . ' - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-6">
            <a 
                href="{{ route('products.index') }}" 
                class="inline-flex items-center text-sage-green hover:text-deep-soil transition-colors font-semibold"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Products
            </a>
            
            <div class="flex items-center space-x-3">
                <a 
                    href="{{ route('products.edit', $product->id) }}" 
                    class="inline-flex items-center px-4 py-2 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold"
                >
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit Product
                </a>
                
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button 
                        type="submit" 
                        class="inline-flex items-center px-4 py-2 border-2 border-red-600 text-red-600 rounded-md hover:bg-red-600 hover:text-white transition-colors duration-200 font-semibold"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>
        
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                {{ $product->name }}
            </h1>
            
            <div class="flex items-center justify-center space-x-4 mt-4">
                @if($product->is_organic)
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd"/>
                        </svg>
                        Certified Organic
                    </span>
                @endif
                
                @if($product->status)
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        Available
                    </span>
                @else
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 text-gray-800">
                        <span class="w-2 h-2 bg-gray-500 rounded-full mr-2"></span>
                        Unavailable
                    </span>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Product Details Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Product Image -->
            <div class="space-y-4">
                @if($product->featured_image)
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl border-4 border-sage-green/20">
                        <img 
                            src="{{ asset('storage/' . $product->featured_image) }}" 
                            alt="{{ $product->name }}" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                @else
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl border-4 border-sage-green/20 bg-gradient-to-br from-cream to-sage-green/20 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="mx-auto h-32 w-32 text-sage-green/40" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"/>
                            </svg>
                            <p class="mt-4 text-sage-green font-medium">No image available</p>
                        </div>
                    </div>
                @endif
                
                <!-- Quick Info Cards -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-cream rounded-lg p-4 text-center">
                        <p class="text-sm text-sage-green font-medium mb-1">Price</p>
                        <p class="text-2xl font-bold text-earth-brown">
                            @if($product->price)
                                KES {{ number_format($product->price, 2) }}
                            @else
                                <span class="text-lg text-sage-green">Not set</span>
                            @endif
                        </p>
                        @if($product->unit)
                            <p class="text-xs text-sage-green mt-1">per {{ $product->unit }}</p>
                        @endif
                    </div>
                    
                    <div class="bg-cream rounded-lg p-4 text-center">
                        <p class="text-sm text-sage-green font-medium mb-1">Unit</p>
                        <p class="text-2xl font-bold text-deep-soil">
                            @if($product->unit)
                                {{ ucfirst($product->unit) }}
                            @else
                                <span class="text-lg text-sage-green">Not set</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Product Information -->
            <div class="space-y-8">
                
                <!-- Description -->
                @if($product->description)
                    <div class="bg-cream rounded-lg p-6 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-earth-brown/10 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h2 class="text-xl font-serif font-bold text-deep-soil">Product Description</h2>
                        </div>
                        <p class="text-sage-green leading-relaxed">{{ $product->description }}</p>
                    </div>
                @endif
                
                <!-- Health Benefits -->
                @if($product->health_benefits)
                    <div class="bg-green-50 rounded-lg p-6 shadow-lg border border-green-100">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-green-200 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h2 class="text-xl font-serif font-bold text-green-800">Health Benefits</h2>
                        </div>
                        <p class="text-green-700 leading-relaxed">{{ $product->health_benefits }}</p>
                    </div>
                @endif
                
                <!-- Product Attributes -->
                <div class="bg-cream rounded-lg p-6 shadow-lg">
                    <h2 class="text-xl font-serif font-bold text-deep-soil mb-4">Product Attributes</h2>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between py-3 border-b border-sage-green/20">
                            <span class="text-sage-green font-medium">Product ID</span>
                            <span class="text-deep-soil font-semibold">#{{ $product->id }}</span>
                        </div>
                        
                        <div class="flex items-center justify-between py-3 border-b border-sage-green/20">
                            <span class="text-sage-green font-medium">Organic Status</span>
                            <span class="text-deep-soil font-semibold">
                                @if($product->is_organic)
                                    <span class="text-green-600">✓ Organic</span>
                                @else
                                    <span class="text-gray-600">Standard</span>
                                @endif
                            </span>
                        </div>
                        
                        <div class="flex items-center justify-between py-3 border-b border-sage-green/20">
                            <span class="text-sage-green font-medium">Availability</span>
                            <span class="text-deep-soil font-semibold">
                                @if($product->status)
                                    <span class="text-green-600">✓ Active</span>
                                @else
                                    <span class="text-gray-600">Inactive</span>
                                @endif
                            </span>
                        </div>
                        
                        @if($product->created_at)
                            <div class="flex items-center justify-between py-3 border-b border-sage-green/20">
                                <span class="text-sage-green font-medium">Added On</span>
                                <span class="text-deep-soil font-semibold">{{ $product->created_at->format('M d, Y') }}</span>
                            </div>
                        @endif
                        
                        @if($product->updated_at && $product->updated_at != $product->created_at)
                            <div class="flex items-center justify-between py-3">
                                <span class="text-sage-green font-medium">Last Updated</span>
                                <span class="text-deep-soil font-semibold">{{ $product->updated_at->format('M d, Y') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Actions Card -->
                <div class="bg-gradient-to-br from-earth-brown to-deep-soil rounded-lg p-6 shadow-lg text-white">
                    <h3 class="text-lg font-serif font-bold mb-3">Need to make changes?</h3>
                    <p class="text-cream/90 text-sm mb-4">You can edit this product's information or manage its availability status.</p>
                    <div class="flex space-x-3">
                        <a 
                            href="{{ route('products.edit', $product->id) }}" 
                            class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-white text-earth-brown rounded-md hover:bg-cream transition-colors duration-200 font-semibold"
                        >
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Product
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection