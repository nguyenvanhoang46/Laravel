<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function placeorder(Request $request) {
        $order = new Order();
        $order->fname = $request->input('fname');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->save();

        $oldCart = Session('Cart') ? Session('Cart') : '';
        foreach ($oldCart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'quantity' => $item->prod_quantity,
                'price' => $item->products->selling_price,
            ]);
        }

        if (Auth::user()->address == NULL) {
            $user = User::where('id', Auth::id()->first());
            $user->fname = $request->input('fname');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->update();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
