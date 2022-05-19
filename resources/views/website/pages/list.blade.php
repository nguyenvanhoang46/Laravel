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
                            <tr class="border-cart-item">
                                <th></th>
                                <th></th>
                                <th class="produtcto"></th>
                                <th class="produtcto"></th>
                                <th class="produtcto"></th>
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
                                        <td class="qua-col">
                                            <div class="quantity">
                                                <div class="ms-3 dec pro-qty ">
                                                    <input data-id="{{$item['productInfo']->id}}" class="form-control" id="quantity-item{{$item['productInfo']->id}}" type="text " value="{{$item['quantity']}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">{{number_format($item['price'])}} ₫</td>
                                        <td class="close-td first-row"><i class="far fa-save" onclick="SaveListItemCart({{$item['productInfo']->id}});"></i></td>
                                        <td class="close-td first-row me-5"><i class="far fa-times-circle" onclick="DeleteListItemCart({{$item['productInfo']->id}});"></i></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex mt-5">
                        <div class="continue-shopping pull-left  text-left">
                            <a class=" button-continue-shopping button primary is-outline" href="">← TIẾP TỤC XEM SẢN PHẨM </a>
                        </div>
                        <div class="ms-4 primary mt-0 update-cart pull-left small edit-all" >
                            CẬP NHẬT GIỎ HÀNG
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    @if(Session::has("Cart") != null)
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
                    @endif

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

@section('scripts')
    <script>
    function DeleteListItemCart(id) {
        $.ajax({
            url: 'Delete-Item-List-Cart/'+id,
            type: 'GET',
        }).done(function (response) {
            RenderListCart(response);
            alertify.success('Đã xoá thành công');
        });
    }

    function SaveListItemCart(id) {

        $.ajax({
            url: 'Save-Item-List-Cart/'+id+'/'+$("#quantity-item"+id).val(),
            type: 'GET',
        }).done(function (response) {
            RenderListCart(response);
            alertify.success('Đã cập nhật thành công');
        });
    }
    function RenderListCart(response) {
        $("#list-cart").empty();
        $("#list-cart").html(response);

    }
    $(".edit-all").on("click", function () {
        var lists = [];
        $("table tbody tr td").each(function (){
            $(this).find("input").each(function () {
                var element = { key: $(this).data("id"), value: $(this).val() };
                lists.push(element);
            });
        });
        $.ajax({
            url: 'Save-All',
            type: 'POST',
            data: {
                "_token" : "{{ csrf_token() }}",
                "data" : lists
            }

        }).done(function (response) {
            location.reload();

        });

    });
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });


    </script>
@endsection
