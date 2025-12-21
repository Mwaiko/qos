@extends('layouts.app')

@section('title', $bundle->name . ' - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex-1">
                <div class="flex items-center mb-4">
                    <a href="{{ route('bundles.index') }}" class="text-sage-green hover:text-deep-soil transition-colors mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </a>
                    @if($bundle->status)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                            Active
                        </span>
                    @else
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-800">
                            <span class="w-2 h-2 bg-gray-500 rounded-full mr-1.5"></span>
                            Inactive
                        </span>
                    @endif
                </div>
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                    {{ $bundle->name }}
                </h1>
                @if($bundle->description)
                    <p class="text-lg text-sage-green max-w-3xl">
                        {{ $bundle->description }}
                    </p>
                @endif
            </div>
            <div class="mt-6 md:mt-0 flex space-x-3">
                <a 
                    href="{{ route('bundles.edit', $bundle->id) }}" 
                    class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit Basket
                </a>
                <form action="{{ route('bundles.destroy', $bundle->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this basket? This action cannot be undone.');">
                    @csrf
                    @method('DELETE')
                    <button 
                        type="submit" 
                        class="inline-flex items-center px-6 py-3 border-2 border-red-500 text-red-600 rounded-md hover:bg-red-500 hover:text-white transition-colors duration-200 font-semibold"
                    >
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@if(session('success'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
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
    </div>
@endif

<!-- Basket Details Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Pricing Card -->
                <div class="bg-cream rounded-lg shadow-xl p-8">
                    <h2 class="text-2xl font-serif font-bold text-deep-soil mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-earth-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Pricing Details
                    </h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-4 border-b border-sage-green/20">
                            <span class="text-sage-green font-medium">Total Price</span>
                            <span class="text-3xl font-bold text-earth-brown">KES {{ number_format($bundle->price, 2) }}</span>
                        </div>
                        @if($bundle->discount_percentage)
                            <div class="flex justify-between items-center">
                                <span class="text-sage-green font-medium">Discount</span>
                                <span class="inline-flex items-center px-4 py-2 rounded-full text-lg font-bold bg-green-100 text-green-800">
                                    {{ $bundle->discount_percentage }}% OFF
                                </span>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t border-sage-green/20">
                                <span class="text-deep-soil font-bold text-lg">Final Price</span>
                                <span class="text-3xl font-bold text-green-700">
                                    KES {{ number_format($bundle->price * (1 - $bundle->discount_percentage / 100), 2) }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Products in Basket -->
                <div class="bg-white rounded-lg shadow-xl border border-sage-green/20">
                    <div class="px-8 py-6 border-b border-sage-green/20">
                        <h2 class="text-2xl font-serif font-bold text-deep-soil flex items-center">
                            <svg class="w-6 h-6 mr-3 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                            </svg>
                            Products in Basket
                            <span class="ml-3 text-lg font-normal text-sage-green">({{ $bundle->products->count() }} items)</span>
                        </h2>
                    </div>
                    <div class="p-6">
                        @if($bundle->products->isEmpty())
                            <div class="text-center py-8">
                                <svg class="mx-auto h-12 w-12 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                </svg>
                                <p class="mt-2 text-sage-green">No products in this basket yet</p>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach($bundle->products as $product)
                                <div class="flex items-start p-4 bg-cream/30 rounded-lg hover:bg-cream/50 transition-colors">
                                    @if($product->featured_image)
                                        <img src="{{ asset('storage/' . $product->featured_image) }}" alt="{{ $product->name }}" class="h-20 w-20 rounded-lg object-cover border border-sage-green/20 flex-shrink-0">
                                    @else
                                        <div class="h-20 w-20 rounded-lg bg-earth-brown/10 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-10 h-10 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="ml-4 flex-1">
                                        <h3 class="text-lg font-semibold text-deep-soil">{{ $product->name }}</h3>
                                        @if($product->description)
                                            <p class="text-sm text-sage-green mt-1">{{ $product->description }}</p>
                                        @endif
                                        <div class="flex items-center mt-2 space-x-3">
                                            @if($product->price)
                                                <span class="text-sm font-bold text-earth-brown">
                                                    KES {{ number_format($product->price, 2) }}
                                                    @if($product->unit)
                                                        <span class="text-xs font-normal text-sage-green">/ {{ $product->unit }}</span>
                                                    @endif
                                                </span>
                                            @endif
                                            @if($product->is_organic)
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                    </svg>
                                                    Organic
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- Featured Image -->
                @if($bundle->featured_image)
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden border border-sage-green/20">
                        <div class="px-6 py-4 bg-cream border-b border-sage-green/20">
                            <h3 class="text-lg font-serif font-bold text-deep-soil">Featured Image</h3>
                        </div>
                        <div class="p-4">
                            <img src="{{ asset('storage/' . $bundle->featured_image) }}" alt="{{ $bundle->name }}" class="w-full rounded-lg shadow-md">
                        </div>
                    </div>
                @endif

                <!-- Quick Stats -->
                <div class="bg-white rounded-lg shadow-xl border border-sage-green/20 p-6">
                    <h3 class="text-lg font-serif font-bold text-deep-soil mb-4">Quick Stats</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-3 border-b border-sage-green/10">
                            <span class="text-sm text-sage-green">Products</span>
                            <span class="text-lg font-bold text-deep-soil">{{ $bundle->products->count() }}</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-sage-green/10">
                            <span class="text-sm text-sage-green">Status</span>
                            @if($bundle->status)
                                <span class="text-sm font-semibold text-green-700">Active</span>
                            @else
                                <span class="text-sm font-semibold text-gray-600">Inactive</span>
                            @endif
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-sage-green/10">
                            <span class="text-sm text-sage-green">Created</span>
                            <span class="text-sm font-medium text-deep-soil">{{ $bundle->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-sage-green">Updated</span>
                            <span class="text-sm font-medium text-deep-soil">{{ $bundle->updated_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Actions Card -->
                <div class="bg-cream rounded-lg shadow-xl border border-sage-green/20 p-6">
                    <h3 class="text-lg font-serif font-bold text-deep-soil mb-4">Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('bundles.edit', $bundle->id) }}" class="flex items-center justify-center w-full px-4 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Basket
                        </a>
                        <a href="{{ route('bundles.index') }}" class="flex items-center justify-center w-full px-4 py-3 border-2 border-sage-green text-sage-green rounded-md hover:bg-sage-green hover:text-white transition-colors font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection