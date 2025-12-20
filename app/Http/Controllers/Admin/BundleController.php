<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bundle;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BundleController extends Controller
{
    public function index()
    {
        $bundles = Bundle::withCount('products')->latest()->paginate(10);
        return view('admin.bundles.index', compact('bundles'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.bundles.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:bundles,name',
            'price' => 'required|numeric',
            'product_ids' => 'required|array',
            'quantities' => 'required|array'
        ]);

        $bundle = Bundle::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price
        ]);

        // Attach products with their specific quantities to the pivot table
        foreach ($request->product_ids as $index => $productId) {
            $bundle->products()->attach($productId, [
                'quantity' => $request->quantities[$index]
            ]);
        }

        return redirect()->route('bundles.index')->with('success', 'Bundle created successfully');
    }

    public function edit(Bundle $bundle)
    {
        $products = Product::all();
        $bundleProducts = $bundle->products->pluck('id')->toArray();
        return view('admin.bundles.edit', compact('bundle', 'products', 'bundleProducts'));
    }

    public function update(Request $request, Bundle $bundle)
    {
        $request->validate([
            'name' => 'required|unique:bundles,name,' . $bundle->id,
            'price' => 'required|numeric',
            'product_ids' => 'required|array'
        ]);

        $bundle->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price
        ]);

        $bundle->products()->sync($request->product_ids);

        return redirect()->route('bundles.index')->with('success', 'Bundle updated successfully');
    }

    public function destroy(Bundle $bundle)
    {
        $bundle->products()->detach();
        $bundle->delete();
        return redirect()->route('bundles.index')->with('success', 'Bundle deleted');
    }
}