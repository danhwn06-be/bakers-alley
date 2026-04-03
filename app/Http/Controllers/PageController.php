<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Displays the About page
    public function about() {
        return view('pages.about');
    }

    // Displays the Contact page
    public function contact() {
        return view('pages.contact');
    }
}
