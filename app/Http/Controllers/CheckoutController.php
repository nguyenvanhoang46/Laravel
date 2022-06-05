<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('website.pages.checkout');
    }

//    public function checkout(Request $request) {
//        $cart = auth()->user();
//        $order = Order::create([
//            'user_id' => auth()->id(),
//            'name' => $request->input('name'),
//            'phone' => $request->input('phone'),
//            'city' => $request->input('city'),
//            'address' => $request->input('address'),
//            'total_price' => $request->input('total_price'),
//        ]);
//        $orderItem = $cart->orderItem;
//        foreach ($orderItem as $orderItem) {
//            $order->orderItem()->create([
//                'order_id' => $order->id,
//                'product_id' => $orderItem->product_id,
//                'price' => $orderItem->price,
//                'quantity' => $orderItem->quantity,
//            ]);
//        }
//        $cart->$orderItem()->detele();
//        $cart->quantity = 0;
//        $cart->total_price = 0;
//        $cart->save();
//        return redirect()-> route('website.pages.home_pages');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('website.pages.checkout', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
