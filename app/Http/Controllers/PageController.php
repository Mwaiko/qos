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

    public function contact()
    {
        return view('contact.index'); // Ensure you have a contact.blade.php file
    }
}