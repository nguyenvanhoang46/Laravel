<?php

namespace App\Models;

class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart) {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function AddCart($product, $id) {
        $newProduct = ['quantity' => 0, 'price' =>  $product->price, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity'] ++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->totalQuantity++;
    }

    public function DeleteItemCart($id) {
        $this->totalQuantity -= $this->products[$id]['quantity']; // chính nó trừ đi số lượng loại bỏ
        $this->totalPrice -= $this->products[$id]['price'];      // giá hiện tại trừ đi giá loại bỏ
        unset($this->products[$id]);
    }
    public function UpdateItemCart($id, $quantity) {
            // b1 trừ toàn bộ số tiền và số lượng của sản phẩm muốn cập nhật
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];

        // đang cập nhật lại số lượng và giá
        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->price;


        // cập nhật lại giỏ hàng
        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];

    }
}
