<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Session;

class WebsiteController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        return view('website.pages.home_pages', compact('products'));
    }
    public function product_pages() {
        $products = DB::table('products')->get();
        return view('website.pages.product_pages', compact('products'));
    }

    public function AddCart(Request $request ,$id) {

    $product = DB::table('products')->where('id',$id)->first();
    if ($product != null )  {  // xử lý
        $oldCart = Session('Cart') ? Session('Cart') : '';
        $newCart = new Cart($oldCart);
        $newCart->AddCart($product, $id);
        $request->session()->put('Cart', $newCart);
    }
    return view('website.pages.cart');
    }


    public function DeleteItemCart(Request $request ,$id) {
        $oldCart = Session('Cart') ? Session('Cart') : '';
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (Count($newCart -> products) > 0) {
            $request->session()->put('Cart', $newCart);
        }else {
            $request->session()->forget('Cart');
        }
        return view('website.pages.cart');
    }


    public function DeleteListItemCart(Request $request ,$id) {
        $oldCart = Session('Cart') ? Session('Cart') : '';
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (Count($newCart -> products) > 0) {
            $request->session()->put('Cart', $newCart);
        }else {
            $request->session()->forget('Cart');
        }
        return view('website.pages.list-cart');
    }

    public function SaveListItemCart(Request $request ,$id, $quantity) {

        $oldCart = Session('Cart') ? Session('Cart') : '';
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quantity);

        $request->session()->put('Cart', $newCart);

        return view('website.pages.list-cart');
    }


    public function SaveAllListItemCart(Request $request) {

        foreach ($request->data as $item) {
            $oldCart = Session('Cart') ? Session('Cart') : '';
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item["key"], $item["value"]);
            $request->session()->put('Cart', $newCart);
        }
    }

    public function ViewListCart() {
        return view('website.pages.list');
    }


}
