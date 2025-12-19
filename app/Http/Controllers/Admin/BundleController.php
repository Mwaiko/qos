<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Bundle;
use Illuminate\Http\Request;
class BundleController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'product_ids' => 'required|array', // Array of IDs from the pivot table
        ]);

        $bundle = Bundle::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price
        ]);

        // Syncing the bundle_items pivot table
        $bundle->products()->sync($request->product_ids);

        return redirect()->route('bundles.index');
    }
}
