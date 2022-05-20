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
                    <td class="qua-col">
                        <div class="quantity">
                            <div class="ms-5 dec pro-qty ">
                                <input data-id="{{$item['productInfo']->id}}" class="form-control" id="quantity-item{{$item['productInfo']->id}}" type="text" value="{{$item['quantity']}}">
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
    <div class="ms-4 primary mt-0 update-cart pull-left small  edit-all">CẬP NHẬT GIỎ HÀNG</div>
</div>

<script !src="">
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
