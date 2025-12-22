@extends('layouts.app')

@section('title', 'Order Confirmation - Quality Outsource Solutions')

@section('content')
<section class="py-20 bg-gradient-to-br from-cream to-sage-green/20 min-h-screen flex items-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-24 h-24 bg-earth-brown/10 rounded-full mb-8">
            <svg class="w-12 h-12 text-earth-brown" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </div>

        <h1 class="text-4xl font-bold text-earth-brown mb-4">Order Confirmed!</h1>
        <p class="text-lg text-sage-green-800 mb-8">
            Thank you for your purchase. Your farm-fresh produce knowledge is on its way!
        </p>

        <div class="bg-white p-6 rounded-2xl shadow-xl mb-10 inline-block">
            <img src="{{ asset('path/to/your/board-image.jpg') }}" alt="Farm Produce Board" class="max-w-full h-auto rounded-lg">
        </div>

        <div class="space-y-4">
            <p class="text-sm text-gray-600 uppercase tracking-widest font-semibold">Order Details</p>
            <p class="text-xl font-mono text-earth-brown">#QOS-{{ str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT) }}</p>
        </div>

        <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ url('/') }}" class="px-8 py-3 bg-earth-brown text-white rounded-full font-semibold hover:bg-earth-brown/90 transition">
                Back to Home
            </a>
            <a href="#" class="px-8 py-3 border-2 border-earth-brown text-earth-brown rounded-full font-semibold hover:bg-earth-brown hover:text-white transition">
                View Receipt
            </a>
        </div>
    </div>
</section>
@endsection