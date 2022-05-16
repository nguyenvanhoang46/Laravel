<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class WebsiteController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        return view('website.pages.home_pages', compact('products'));
    }
    public function AddCart(Request $request ,$id) {

    $product = DB::table('products')->where('id',$id)->first();
    if ($product != null ) {
        $oldcart = Session('Cart') ? Session('Cart') : '';
        $newCart = new Cart($oldcart);
        $newCart->AddCart($product, $id);
        $request->session()->put('Cart', $newCart);
        dd($newCart);
    }
    return view();

    }
}
