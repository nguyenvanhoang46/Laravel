<?php

namespace App\Models;

class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __constant($cart) {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;

        }
    }

    public function AddCart($product, $id) {
        $newProduct = ['quantity' => 0, 'price' =>  $product->price, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($id, $product)) {
                $newProduct = $product[$id];
            }
        }
        $newProduct['quantity'] ++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        $this->products[$id] = $newProduct;
//        $this->totalPrice[$id] = $product->price;
        $this->totalQuantity++;
    }
}
