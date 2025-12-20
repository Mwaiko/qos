@extends('layouts.app')

@section('title', 'Product Baskets - Quality Outsource Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                    Product Baskets
                </h1>
                <p class="text-lg text-sage-green">
                    Curated bundles of organic produce from Munyaka Farm
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <a 
                    href="{{ route('bundles.create') }}" 
                    class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold shadow-lg"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Create New Basket
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Overview -->
<section class="py-8 bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-cream rounded-lg p-6 shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-sage-green font-medium">Total Baskets</p>
                        <p class="text-3xl font-bold text-deep-soil mt-1">{{ $bundles->total() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-earth-brown/10 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="bg-green-50 rounded-lg p-6 shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-green-700 font-medium">Active Baskets</p>
                        <p class="text-3xl font-bold text-green-800 mt-1">{{ $bundles->where('status', 1)->count() }}</p>
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
                        <p class="text-sm text-amber-700 font-medium">Total Products</p>
                        <p class="text-3xl font-bold text-amber-800 mt-1">{{ $bundles->sum('products_count') }}</p>
                    </div>
                    <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Baskets Table Section -->
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

        @if($bundles->isEmpty())
            <div class="text-center py-12 bg-cream rounded-lg">
                <svg class="mx-auto h-12 w-12 text-sage-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <h3 class="mt-2 text-lg font-semibold text-deep-soil">No baskets yet</h3>
                <p class="mt-1 text-sage-green">Get started by creating your first product basket.</p>
                <div class="mt-6">
                    <a href="{{ route('bundles.create') }}" class="inline-flex items-center px-6 py-3 bg-earth-brown text-white rounded-md hover:bg-deep-soil transition-colors duration-200 font-semibold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Create First Basket
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
                                    Basket Name
                                </th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Products
                                </th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-4 text-right text-xs font-semibold text-deep-soil uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-sage-green/10">
                            @foreach($bundles as $bundle)
                            <tr class="hover:bg-cream/50 transition-colors duration-150">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-12 w-12 bg-earth-brown/10 rounded-lg flex items-center justify-center">
                                            <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-deep-soil">{{ $bundle->name }}</div>
                                            @if($bundle->description)
                                                <div class="text-xs text-sage-green max-w-xs">{{ Str::limit($bundle->description, 60) }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-sage-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                                        </svg>
                                        <span class="text-sm font-medium text-deep-soil">{{ $bundle->products_count }} Products</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-earth-brown">
                                        KES {{ number_format($bundle->price, 2) }}
                                    </div>
                                    @if($bundle->discount_percentage)
                                        <div class="text-xs text-green-600 font-semibold">
                                            {{ $bundle->discount_percentage }}% off
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
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
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-3">
                                        <a href="{{ route('bundles.show', $bundle->id) }}" class="text-sage-green hover:text-deep-soil transition-colors" title="View">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('bundles.edit', $bundle->id) }}" class="text-earth-brown hover:text-deep-soil transition-colors" title="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>
                                        <form action="{{ route('bundles.destroy', $bundle->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this basket? This action cannot be undone.');">
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

            @if($bundles->hasPages())
                <div class="mt-6">
                    {{ $bundles->links() }}
                </div>
            @endif
        @endif
    </div>
</section>

@endsection