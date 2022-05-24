<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index() {
        $data = Product::all();
         return view('website.pages.home_pages', ['product' => $data]);
    }
    public function details($id) {
        $data = Product::find($id);
        return view('website.pages.product_detail', ['product'=>$data]);
    }

}
