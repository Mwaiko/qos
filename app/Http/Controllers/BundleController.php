<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    public function index()
    {
        // Fetch bundles with their associated products (pivot)
        $bundles = Bundle::with('products')->get();
        return view('bundles.index', compact('bundles'));
    }

    public function show($slug)
    {
        $bundle = Bundle::with('products')->where('slug', $slug)->firstOrFail();
        return view('bundles.show', compact('bundle'));
    }
}
