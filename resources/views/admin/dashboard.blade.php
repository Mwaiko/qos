@extends('layouts.app')

@section('title', 'Admin Dashboard - Munyaka Farm')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cream to-sage-green/20 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-deep-soil mb-4">
                    Control Center
                </h1>
                <p class="text-lg text-sage-green">
                    Welcome back! Here's what's happening with Munyaka Farm today
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <div class="flex items-center space-x-2 text-sm text-sage-green">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-medium">{{ now()->format('l, F j, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Stats Overview -->
<section class="py-8 bg-white border-b border-sage-green/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-serif font-bold text-deep-soil mb-6">Website Analytics</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Total Visits -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100/50 rounded-lg p-6 shadow-lg border border-blue-200/50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-blue-700 font-medium">Total Visits</p>
                        <p class="text-3xl font-bold text-blue-900 mt-1">12,847</p>
                        <p class="text-xs text-blue-600 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                            </svg>
                            +12.5% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Average Duration -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100/50 rounded-lg p-6 shadow-lg border border-purple-200/50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-purple-700 font-medium">Avg. Duration</p>
                        <p class="text-3xl font-bold text-purple-900 mt-1">3m 42s</p>
                        <p class="text-xs text-purple-600 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                            </svg>
                            +8.3% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-purple-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Page Views -->
            <div class="bg-gradient-to-br from-emerald-50 to-emerald-100/50 rounded-lg p-6 shadow-lg border border-emerald-200/50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-emerald-700 font-medium">Page Views</p>
                        <p class="text-3xl font-bold text-emerald-900 mt-1">48,392</p>
                        <p class="text-xs text-emerald-600 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                            </svg>
                            +15.2% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-emerald-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-emerald-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Bounce Rate -->
            <div class="bg-gradient-to-br from-amber-50 to-amber-100/50 rounded-lg p-6 shadow-lg border border-amber-200/50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-amber-700 font-medium">Bounce Rate</p>
                        <p class="text-3xl font-bold text-amber-900 mt-1">32.4%</p>
                        <p class="text-xs text-amber-600 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                            </svg>
                            -3.2% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Management Navigation -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-serif font-bold text-deep-soil mb-6">Content Management</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Products Card -->
            <a href="{{ route('products.index') }}" class="group">
                <div class="bg-gradient-to-br from-cream to-sage-green/20 rounded-lg p-8 shadow-lg border-2 border-sage-green/20 hover:border-earth-brown hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 bg-earth-brown rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                            </svg>
                        </div>
                        <svg class="w-6 h-6 text-sage-green group-hover:text-earth-brown group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-2">Products</h3>
                    <p class="text-sage-green mb-4">Manage your organic produce inventory</p>
                    <div class="flex items-center justify-between pt-4 border-t border-sage-green/20">
                        <span class="text-sm text-sage-green font-medium">Total Items</span>
                        <span class="text-2xl font-bold text-earth-brown">{{ $totalProducts ?? 0 }}</span>
                    </div>
                </div>
            </a>

            <!-- Bundles Card -->
            <a href="{{ route('bundles.index') }}" class="group">
                <div class="bg-gradient-to-br from-cream to-earth-brown/10 rounded-lg p-8 shadow-lg border-2 border-earth-brown/20 hover:border-sage-green hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 bg-sage-green rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <svg class="w-6 h-6 text-earth-brown group-hover:text-sage-green group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-2">Baskets</h3>
                    <p class="text-sage-green mb-4">Create and manage product bundles</p>
                    <div class="flex items-center justify-between pt-4 border-t border-earth-brown/20">
                        <span class="text-sm text-sage-green font-medium">Active Bundles</span>
                        <span class="text-2xl font-bold text-sage-green">{{ $totalBundles ?? 0 }}</span>
                    </div>
                </div>
            </a>

            <!-- Posts Card -->
            <a href="{{ route('posts.index') }}" class="group">
                <div class="bg-gradient-to-br from-cream to-amber-50 rounded-lg p-8 shadow-lg border-2 border-amber-200/50 hover:border-deep-soil hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 bg-deep-soil rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"/>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"/>
                            </svg>
                        </div>
                        <svg class="w-6 h-6 text-amber-700 group-hover:text-deep-soil group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-deep-soil mb-2">Blog Posts</h3>
                    <p class="text-sage-green mb-4">Share stories and farming insights</p>
                    <div class="flex items-center justify-between pt-4 border-t border-amber-200">
                        <span class="text-sm text-sage-green font-medium">Published</span>
                        <span class="text-2xl font-bold text-deep-soil">{{ $totalPosts ?? 0 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Quick Stats & Recent Activity -->
<section class="py-12 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Top Visited Pages -->
            <div class="bg-white rounded-lg shadow-lg p-6 border border-sage-green/20">
                <h3 class="text-xl font-serif font-bold text-deep-soil mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                    </svg>
                    Top Visited Pages
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-cream rounded-lg">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-earth-brown/10 rounded-full flex items-center justify-center mr-3">
                                <span class="text-sm font-bold text-earth-brown">1</span>
                            </div>
                            <span class="text-sm font-medium text-deep-soil">/produce</span>
                        </div>
                        <span class="text-sm font-bold text-sage-green">5,234 views</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-cream rounded-lg">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-sage-green/10 rounded-full flex items-center justify-center mr-3">
                                <span class="text-sm font-bold text-sage-green">2</span>
                            </div>
                            <span class="text-sm font-medium text-deep-soil">/baskets</span>
                        </div>
                        <span class="text-sm font-bold text-sage-green">3,892 views</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-cream rounded-lg">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-sm font-bold text-amber-700">3</span>
                            </div>
                            <span class="text-sm font-medium text-deep-soil">/about</span>
                        </div>
                        <span class="text-sm font-bold text-sage-green">2,456 views</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-cream rounded-lg">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-slate-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-sm font-bold text-slate-600">4</span>
                            </div>
                            <span class="text-sm font-medium text-deep-soil">/learn</span>
                        </div>
                        <span class="text-sm font-bold text-sage-green">1,987 views</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 border border-sage-green/20">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-serif font-bold text-deep-soil flex items-center">
                        <svg class="w-6 h-6 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        Recent Messages
                    </h3>
                    <a href="{{ route('admin.messages') }}" class="text-sm text-earth-brown hover:text-deep-soil font-medium">
                        View All →
                    </a>
                </div>
                <div class="space-y-3">
                    @forelse($latestMessages as $message)
                        <div class="p-4 bg-cream rounded-lg border-l-4 {{ $loop->first ? 'border-earth-brown' : 'border-sage-green' }}">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-semibold text-deep-soil">{{ $message->name }}</span>
                                <span class="text-xs text-sage-green">{{ $message->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-sm text-sage-green">{{ Str::limit($message->message, 80) }}</p>
                        </div>
                    @empty
                        <div class="p-4 bg-cream rounded-lg text-center">
                            <p class="text-sm text-sage-green">No recent messages.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

@endsection