<?php

// app/Http/Controllers/Admin/ContactController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact; // Assuming your model is named Contact
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function messages()
    {
        // Fetch messages, 10 per page, ordered by newest first
        $messages = Contact::latest()->paginate(10);

        return view('admin.contacts.index', compact('messages'));
    }
}