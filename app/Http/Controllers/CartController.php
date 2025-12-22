<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = 0;
        
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        
        return view('products.cart', compact('cartItems', 'total'));
    }
    
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        
        $product = Product::findOrFail($productId);
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'price' => $product->price,
                'unit' => $product->unit,
                'image' => $product->featured_image,
                'quantity' => $quantity
            ];
        }
        
        session()->put('cart', $cart);
        
        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cartCount' => count($cart)
        ]);
    }
    
    public function update(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            if ($quantity > 0) {
                $cart[$productId]['quantity'] = $quantity;
            } else {
                unset($cart[$productId]);
            }
            
            session()->put('cart', $cart);
            
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Cart updated successfully!',
                'cartCount' => count($cart),
                'total' => $total
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Product not found in cart'
        ], 404);
    }
    
    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
            
            return response()->json([
                'success' => true,
                'message' => 'Product removed from cart',
                'cartCount' => count($cart)
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Product not found in cart'
        ], 404);
    }
    
    public function checkout()
    {
        $cartItems = session()->get('cart', []);
        
        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }
        
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        
        return view('products.checkout', compact('cartItems', 'total'));
    }
    
    public function processOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'notes' => 'nullable|string'
        ]);
        
        $cartItems = session()->get('cart', []);
        
        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }
        
        $total = 0;
        $itemsSummary = "ORDER DETAILS:\n";
        
        foreach ($cartItems as $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;
            $itemsSummary .= "- {$item['name']} ({$item['quantity']} {$item['unit']}) @ KSh " . number_format($item['price']) . "\n";
        }
        
        // Combine Address and Notes into the message field
        $fullMessage = $itemsSummary;
        $fullMessage .= "\nTOTAL: KSh " . number_format($total);
        $fullMessage .= "\n\nSHIPPING ADDRESS: " . $validated['address'];
        if (!empty($validated['notes'])) {
            $fullMessage .= "\nCUSTOMER NOTES: " . $validated['notes'];
        }

        // CREATE THE CONTACT RECORD
        Contact::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'],
            'message' => $fullMessage, // Saving all order details here
        ]);
        
        $orderData = [
            'customer' => $validated,
            'items' => $cartItems,
            'total' => $total,
            'order_date' => now()
        ];
        
        // Clear cart
        session()->forget('cart');
        
        return redirect()->route('order.success')->with('order', $orderData);
    }
        
    public function orderSuccess()
    {
        // Check flash data first
        $order = session('order');
        
        if (!$order) {
            return redirect()->route('home');
        }
        
        return view('products.order-success', compact('order'));
    }
    
    public function getCount()
    {
        $cart = session()->get('cart', []);
        return response()->json(['count' => count($cart)]);
    }
}