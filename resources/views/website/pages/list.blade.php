@extends('website.layout.main_website')

@section('content')
    <section class="mt-4 shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" id="list-cart">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr class="border-cart-item">
                                <th>Sản phẩm</th>
                                <th></th>
                                <th class="produtcto">Giá</th>
                                <th class="produtcto">Số lượng</th>
                                <th class="produtcto">Tổng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Session::has("Cart") != null)
                                @foreach(Session::get('Cart')-> products as $item)
                                    <tr class="cart_item-form">
                                        <td class="cart-pic first-row">
                                            <img src="{{$item['productInfo']->image}}" alt="">
                                        </td>
                                        <td class="cart-title first-row">
                                            <h5>{{$item['productInfo']->name}}</h5>
                                        </td>
                                        <td class="p-price">
                                            <span class="mt-2">{{number_format($item['productInfo']->price)}} ₫</span>
                                        </td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <span class="ms-3 dec qtybtn">-</span>
                                                    <input type="text " value="{{$item['quantity']}}">
                                                    <span class="inc qtybtn">+</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">{{number_format($item['price'])}} ₫</td>
                                        <td class="close-td first-row"><i class="ti-close"></i></td>
                                        <td class="close-td first-row"><i class=" ti-save"></i></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <div class="cart-subtotal product-name-item">TỔNG SỐ LƯỢNG</div>
                        <div class="mt-2 cart-subtotal d-flex">
                            <div>Tổng Số lượng</div>
                            <div>{{number_format(Session::get('Cart')->totalQuantity)}}</div>
                        </div>
                        <div class="mt-1 cart-subtotal d-flex">
                            <div class="mt-4">Giao hàng</div>
                            <div class="">
                                <div class="">Giao hàng miễn phí</div>
                                <div class="">Ước tính cho Việt Nam</div>
                                <div class="">Đổi địa chỉ</div>
                            </div>
                        </div>
                        <div class="mt-1 cart-subtotal cart-subtotal-item d-flex">
                            <div class="">Tổng</div>
                            <div class="">{{number_format(Session::get('Cart')->totalPrice)}} ₫</div>
                        </div>
                    </div>
                    <div class="wc-proceed-to-checkout">
                        <a href="" class="mt-4 checkout-button button alt wc-forward">
                            TIẾN HÀNH THANH TOÁN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
