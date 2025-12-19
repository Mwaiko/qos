<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function store(Request $request)
{
    // 1. Validate the data
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'phone'   => 'nullable|string|max:255', // Match your 'YES' Nullable DB column
        'message' => 'required|string',
    ]);

    // 2. Save to database using the Model
    Contact::create($validated);

    // 3. Redirect with success message
    return back()->with('success', 'Thank you for contacting us!');
}
}


