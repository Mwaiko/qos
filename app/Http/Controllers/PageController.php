<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Assuming a Contact model exists

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function farm()
    {
        return view('pages.farm');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Contact::create($validated);
        return back()->with('success', 'Thank you for reaching out!');
    }
}