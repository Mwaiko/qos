<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Contact;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->category = $request->category;

        if ($request->hasFile('featured_image')) {
            $imageName = time().'.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('images/posts'), $imageName);
            $post->featured_image = 'images/posts/' . $imageName;
        }

        $post->published_at = now();
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'nullable|string',
        ]);

        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->category = $request->category;

        if ($request->hasFile('featured_image')) {
            $imageName = time().'.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('images/posts'), $imageName);
            $post->featured_image = 'images/posts/' . $imageName;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

    public function dashboard()
    {
        $totalProducts = \App\Models\Product::count();
        $totalBundles = \App\Models\Bundle::count();
        $totalPosts = Post::count();
        $latestMessages = Contact::latest()->take(3)->get();
        
        return view('admin.dashboard', compact('totalProducts', 'totalBundles', 'totalPosts', 'latestMessages'));
    }
}