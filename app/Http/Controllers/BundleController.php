<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    public function index()
    {
        // Change .get() to .paginate()
        // 10 is the number of items per page
        $bundles = Bundle::with('products')->paginate(10); 
        
        return view('bundles.index', compact('bundles'));
    }

    public function show($slug)
    {
        $bundle = Bundle::with('products')->where('slug', $slug)->firstOrFail();
        return view('bundles.show', compact('bundle'));
    }
}
