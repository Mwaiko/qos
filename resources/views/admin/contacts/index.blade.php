@extends('layouts.app')

@section('title', 'Contact Messages - Quality Outsource Solutions')

@section('content')

<!-- Header Section -->
<section class="bg-gradient-to-br from-cream to-sage-green/20 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-3xl md:text-4xl font-serif font-bold text-deep-soil mb-2">
                    Contact Messages
                </h1>
                <p class="text-sage-green">Manage and review customer inquiries</p>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center mt-4 sm:mt-0 text-earth-brown hover:text-deep-soil font-semibold transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Dashboard
            </a>
        </div>
    </div>
</section>

<!-- Messages Table Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-sage-green mb-1">Total Messages</p>
                        <p class="text-3xl font-bold text-earth-brown">{{ $messages->total() }}</p>
                    </div>
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-earth-brown/10 rounded-full">
                        <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-sage-green mb-1">This Page</p>
                        <p class="text-3xl font-bold text-earth-brown">{{ $messages->count() }}</p>
                    </div>
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-earth-brown/10 rounded-full">
                        <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-cream to-sage-green/10 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-sage-green mb-1">Latest Message</p>
                        <p class="text-lg font-semibold text-earth-brown">
                            {{ $messages->first() ? $messages->first()->created_at->diffForHumans() : 'No messages' }}
                        </p>
                    </div>
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-earth-brown/10 rounded-full">
                        <svg class="w-6 h-6 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Table -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden border border-sage-green/20">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-sage-green/20">
                    <thead class="bg-gradient-to-r from-sage-green/10 to-cream">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-serif font-semibold text-deep-soil uppercase tracking-wider">
                                Date & Time
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-serif font-semibold text-deep-soil uppercase tracking-wider">
                                Sender
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-serif font-semibold text-deep-soil uppercase tracking-wider">
                                Contact Info
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-serif font-semibold text-deep-soil uppercase tracking-wider">
                                Message
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-sage-green/10">
                        @forelse($messages as $message)
                            <tr class="hover:bg-cream/30 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-deep-soil">
                                        {{ $message->created_at->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs text-sage-green">
                                        {{ $message->created_at->format('h:i A') }}
                                    </div>
                                    <div class="text-xs text-sage-green/70 mt-1">
                                        {{ $message->created_at->diffForHumans() }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-earth-brown/10 rounded-full flex items-center justify-center">
                                            <span class="text-earth-brown font-semibold text-sm">
                                                {{ strtoupper(substr($message->name, 0, 2)) }}
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-deep-soil">
                                                {{ $message->name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-sage-green">
                                        <div class="flex items-center mb-1">
                                            <svg class="w-4 h-4 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                            </svg>
                                            {{ $message->email }}
                                        </div>
                                        @if($message->phone)
                                            <div class="flex items-center text-xs">
                                                <svg class="w-4 h-4 mr-2 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                                {{ $message->phone }}
                                            </div>
                                        @else
                                            <div class="text-xs text-sage-green/50 italic">No phone provided</div>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-sage-green max-w-md">
                                        <p class="line-clamp-3">{{ $message->message }}</p>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-16">
                                    <div class="text-center">
                                        <div class="inline-flex items-center justify-center w-16 h-16 bg-sage-green/10 rounded-full mb-4">
                                            <svg class="w-8 h-8 text-sage-green" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                            </svg>
                                        </div>
                                        <p class="text-lg font-semibold text-deep-soil mb-2">No Messages Yet</p>
                                        <p class="text-sage-green">Customer inquiries will appear here once received.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            @if($messages->hasPages())
                <div class="px-6 py-4 bg-gradient-to-r from-cream to-sage-green/10 border-t border-sage-green/20">
                    {{ $messages->links() }}
                </div>
            @endif
        </div>
    </div>
</section>

@endsection