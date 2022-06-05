<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $province = DB::table('category_id')->get();
        $products = Product::with('category')->get();
        return view ('admin.pages.product.show')->with('products', $products);
    }


    public function select()
    {
        $province = DB::table('categorys')->get();
//        $products = Product::with('category')->get();
        return view ('admin.pages.product.show')->with('$province', $province);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }


    public function search(Request $request) {
        $search = $request->search ?: '';
        if ($search != "") {
            $products = Product::where('name', 'LIKE',  "$search%")->get();
        }else {
        $products = Product::all();
        }
        $data = compact('products', 'search');
        return view('admin.pages.product.show', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
//        $requestDate = $request->all();
//        if($request->hasFile('image')) {
//            $destination_path = 'public/images/products';
//            $image = $request->file('image');
//            $image_name = $image->getClientOriginalName();
//            $path = $request->file('image')->storeAs($destination_path, $image_name);
//
//            $input['image'] = $image_name;
//        }
        $filename = time().$request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('image', $filename, 'public');
        $input["image"] = '/storage/'.$path;
        Product::create($input);
        return redirect('product');
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
        $product = Product::find($id);
        return view('admin.pages.product.edit')->with('products', $product);
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
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!');
    }
}
