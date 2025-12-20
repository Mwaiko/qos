<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the data based on your DB DESCRIBE contacts;
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:255', // Matches YES for Null in your DB
            'message' => 'required|string',
        ]);

        // 2. Save to database using the Model
        Contact::create($validated);

        // 3. Redirect back to the form with a success flash message
        return back()->with('success', 'Thank you for reaching out! We will get back to you soon.');
    }
}