<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request) 
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'unit' => 'required|string',
            'description' => 'required',
            'health_benefits' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10240' // 10MB
        ]);

        $data['slug'] = Str::slug($request->name);

        // Explicitly handle the checkboxes
        $data['is_organic'] = $request->has('is_organic') ? 1 : 0;
        $data['status'] = $request->has('status') ? 1 : 0;

        // Handle the Image Upload
        if($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('products', 'public');
        }

        // Save to Database
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'unit' => 'required|string',
            'description' => 'required',
            'health_benefits' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10240' // 10MB
        ]);

        // Update slug if name changed
        if ($request->name !== $product->name) {
            $data['slug'] = Str::slug($request->name);
        }

        // Explicitly handle the checkboxes
        $data['is_organic'] = $request->has('is_organic') ? 1 : 0;
        $data['status'] = $request->has('status') ? 1 : 0;

        // Handle the Image Upload
        if($request->hasFile('featured_image')) {
            // Delete old image if exists
            if($product->featured_image) {
                Storage::disk('public')->delete($product->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('products', 'public');
        }

        // Update the product
        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // Delete image if exists
        if($product->featured_image) {
            Storage::disk('public')->delete($product->featured_image);
        }
        
        $product->delete();
        
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}