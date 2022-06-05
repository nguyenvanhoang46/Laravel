 @if(Session::has("Cart") != null)
<div class="select-items">
    <table class="">
        <tbody>
        @foreach(Session::get('Cart')-> products as $item)
            <tr class="mt-5">
                <td class="si-pic">
                    <img class="img-cart" src="{{$item['productInfo']->image}}" alt="">
                </td>
                <td class="mx-4 si-text">
                    <div class="product-selected">
                        <p class="cart-price-item">{{number_format($item['productInfo']->price)}} ₫ x {{$item['quantity']}}</p>
                        <h6>{{$item['productInfo']->name}}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <img class="img-close mb-4" data-id="{{$item['productInfo']->id}}" src="" alt="">
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="select-total d-flex">
    <span>total:</span>
    <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
   <div>
       <input hidden id="total-quantity-cart" type="number" value="{{Session::get('Cart')->totalQuantity}}">
   </div>
</div>
@endif

