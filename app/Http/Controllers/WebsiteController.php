<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        return view('website.pages.home_pages', compact('products'));
    }
}
