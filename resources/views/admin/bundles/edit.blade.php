@extends('layouts.app')

@section('title', 'Edit Product Basket - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                Edit Product Basket
            </h1>
            <p class="text-lg text-sage-green">
                Update your organic produce bundle from Munyaka Farm
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
            <form action="{{ route('bundles.update', $bundle->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Basket Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-deep-soil mb-2">
                        Basket Name <span class="text-earth-brown">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name"
                        name="name" 
                        value="{{ old('name', $bundle->name) }}"
                        required
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="e.g., Starter Veggie Box, Family Salad Pack, Weekly Greens Bundle"
                    >
                </div>

                <!-- Basket Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-semibold text-deep-soil mb-2">
                        Description
                    </label>
                    <textarea 
                        id="description"
                        name="description" 
                        rows="4"
                        class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil placeholder-sage-green/50"
                        placeholder="Describe the basket, what's included, and who it's perfect for..."
                    >{{ old('description', $bundle->description) }}</textarea>
                </div>

                <!-- Price and Discount Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Price -->
                    <div>
                        <label for="price" class="block text-sm font-semibold text-deep-soil mb-2">
                            Total Price (KES) <span class="text-earth-brown">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-3 text-sage-green font-semibold">KES</span>
                            <input 
                                type="number" 
                                id="price"
                                name="price" 
                                step="0.01"
                                value="{{ old('price', $bundle->price) }}"
                                required
                                class="w-full pl-16 pr-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil"
                                placeholder="0.00"
                            >
                        </div>
                    </div>

                    <!-- Discount Percentage -->
                    <div>
                        <label for="discount_percentage" class="block text-sm font-semibold text-deep-soil mb-2">
                            Discount Percentage (Optional)
                        </label>
                        <div class="relative">
                            <input 
                                type="number" 
                                id="discount_percentage"
                                name="discount_percentage" 
                                min="0"
                                max="100"
                                step="0.01"
                                value="{{ old('discount_percentage', $bundle->discount_percentage) }}"
                                class="w-full px-4 py-3 border border-sage-green/30 rounded-md focus:ring-2 focus:ring-earth-brown focus:border-transparent bg-white text-deep-soil"
                                placeholder="0"
                            >
                            <span class="absolute right-4 top-3 text-sage-green font-semibold">%</span>
                        </div>
                        <p class="text-xs text-sage-green mt-1">Leave empty or set to 0 for no discount</p>
                    </div>
                </div>

                <!-- Current Featured Image -->
                @if($bundle->featured_image)
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-deep-soil mb-2">
                            Current Featured Image
                        </label>
                        <div class="relative inline-block">
                            <img src="{{ asset('storage/' . $bundle->featured_image) }}" alt="{{ $bundle->name }}" class="h-32 w-auto rounded-lg shadow-md border border-sage-green/20">
                        </div>
                    </div>
                @endif

                <!-- Select Products -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-deep-soil mb-2">
                        Select Products <span class="text-earth-brown">*</span>
                    </label>
                    <p class="text-xs text-sage-green mb-3">Choose the products to include in this basket</p>
                    
                    <div class="bg-white border border-sage-green/30 rounded-lg p-4 max-h-96 overflow-y-auto">
                        @if($products->isEmpty())
                            <p class="text-sage-green text-sm text-center py-4">No products available. Please add products first.</p>
                        @else
                            @php
                                // Get the selected product IDs
                                $selectedProducts = old('products', $bundle->products->pluck('id')->toArray());
                            @endphp
                            <div class="space-y-3">
                                @foreach($products as $product)
                                <div class="flex items-start p-3 hover:bg-cream/30 rounded-md transition-colors">
                                    <div class="flex items-center h-5">
                                        <input 
                                            id="product_{{ $product->id }}" 
                                            name="products[]" 
                                            type="checkbox" 
                                            value="{{ $product->id }}"
                                            {{ in_array($product->id, $selectedProducts) ? 'checked' : '' }}
                                            class="focus:ring-earth-brown h-5 w-5 text-earth-brown border-sage-green/30 rounded"
                                        >
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <label for="product_{{ $product->id }}" class="font-semibold text-deep-soil cursor-pointer">
                                            {{ $product->name }}
                                        </label>
                                        <div class="flex items-center mt-1 space-x-2">
                                            @if($product->price)
                                                <span class="text-sm text-earth-brown font-semibold">KES {{ number_format($product->price, 2) }}</span>
                                                @if($product->unit)
                                                    <span class="text-xs text-sage-green">per {{ $product->unit }}</span>
                                                @endif
                                            @endif
                                            @if($product->is_organic)
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-green-100 text-green-800">
                                                    Organic
                                                </span>
                                            @endif
                                        </div>
                                        @if($product->description)
                                            <p class="text-xs text-sage-green mt-1">{{ Str::limit($product->description, 80) }}</p>
                                        @endif
                                    </div>
                                    @if($product->featured_image)
                                        <img src="{{ asset('storage/' . $product->featured_image) }}" alt="{{ $product->name }}" class="h-12 w-12 rounded-lg object-cover border border-sage-green/20 ml-3">
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-6">
                    <label for="featured_image" class="block text-sm font-semibold text-deep-soil mb-2">
                        Update Featured Image (Optional)
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

                <!-- Status Checkbox -->
                <div class="mb-6">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input 
                                id="status" 
                                name="status" 
                                type="checkbox" 
                                value="1"
                                {{ old('status', $bundle->status) ? 'checked' : '' }}
                                class="focus:ring-earth-brown h-5 w-5 text-earth-brown border-sage-green/30 rounded"
                            >
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="status" class="font-semibold text-deep-soil">Active Status</label>
                            <p class="text-sage-green">Make this basket visible on the website</p>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between pt-6 border-t border-sage-green/20">
                    <a 
                        href="{{ route('bundles.index') }}" 
                        class="inline-flex items-center px-6 py-3 border-2 border-sage-green text-sage-green rounded-md hover:bg-sage-green hover:text-white transition-colors duration-200 font-semibold"
                    >
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="inline-flex items-center px-8 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg"
                    >
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Update Basket
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection