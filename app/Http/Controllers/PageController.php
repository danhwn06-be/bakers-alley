<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $newProducts = Product::where('is_new', true)->paginate(4, ['*'], 'new_page');
        $saleProducts = Product::whereNotNull('sale_price')->paginate(8, ['*'], 'sale_page');
        
        return view('home.index', compact('newProducts', 'saleProducts'));
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
}