<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::latest()->paginate(10); 

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'unit' => 'required|string',
            'description' => 'required',
            'health_benefits' => 'nullable|string',
            'featured_image' => 'nullable|image|max:2048' // Matching your requirement
        ]);

        // 1. Generate the URL-friendly slug
        $data['slug'] = Str::slug($request->name);

        // 2. Explicitly handle the checkboxes (Force 0 or 1)
        $data['is_organic'] = $request->has('is_organic') ? 1 : 0;
        $data['status'] = $request->has('status') ? 1 : 0;

        // 3. Handle the Image Upload
        if($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('products', 'public');
        }

    // 4. Save to Database
    Product::create($data);

    return redirect()->route('products.index')->with('status', 'Product Created Successfully!');
}

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}