<div class="top-bar">
    <div class="container">
        <div class="row row-top">
            <div class="col-5 mt-2">
                            <span class="row-top-address row-top text-light">
                                <span class="" style="font-size: 17px;"><img src="/image/location.png" alt=""></span>
                                <span class="ms-2">319 - C16 Lý Th ường Kiệt, P.15, Q.Tp.HCM
                            </span>
                </span>
                <span class="text-light ps-3"><img src="/image/phone-call.png" alt=""></span>
                <span class="text-light ps-1">076 922 0162</span>
            </div>
            <div class="col-4"></div>
            <div class="col-3  mt-2 row-top row-top-item text-light d-flex align-items-center">
                <div class=" row-top ">
                    <img src="/image/facebook.png" alt="">
                    <img class="ms-2" src="/image/instagram.png" alt="">
                    <img class="ms-2" src="/image/twitter.png" alt="">
                </div>
                <div class="ms-3 mt-1 row-top2"></div>
                <div class="ms-2 row-top text-light">
                    <ul class=" navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <div class="d-flex">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng Ký') }}</a>
                                    </li>
                                @endif
                            @else
                        </div>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <div class="border-t mt-2"></div>
    <div class="top-conten container mt-2">
        <div class="row">
            <div class="col">
                <div class="logo">
                    <a href="{{ url('website') }}">
                        <img height="70"
                             src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png"
                             alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="search pt-3">
                    <form action="#" class="form-search ">
                        <input type="search" class="input-search " placeholder="Tìm kiếm...">
                        <button class="button-i button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col" style="margin-left: 100px;">
                <div class="cart mt-3 cart-item d-flex  pe-lg-5">
                    <div>
                        <a href="#" class="text-light cart-item-i " onclick="showLike()">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="haeder-navbar-item">
                        <a href="#" class="text-light ms-3" onclick="show()">
                            <i class="fas fa-shopping-cart"></i>
{{--                            @if(Session::has("Cart") != null)--}}
{{--                                <span id="total-quantity-show">{{(Session::get("Cart")->totalQuantity}}</span>--}}
{{--                            @else--}}
{{--                                <span id="total-quantity-show">0</span>--}}
{{--                            @endif--}}
                        </a>
                        <div class="header-item"></div>
                        <div class="header-nofify">
                            <div class="mx-5 cart-shopping">
                                <div class="p-4">
                                    <div id="change-item-cart">
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
                                                                <img class="img-close mb-4" data-id="{{$item['productInfo']->id}}" src="./image/close.png" alt="">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="select-total d-flex">
                                                <span>total:</span>
                                                <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
                                            </div>
                                        @endif


                                    </div>

                                    <div class="select-button">
                                        <div><a href="{{url('/List-Carts')}}" class="primary-btn view-card">VIEW CARD</a></div>
                                        <div><a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
{{--            <div class="column-cart gio_hang" id="displayBlock">--}}
{{--                <div class="cart-total">--}}
{{--                    <strong class="cart-total-title">Tổng Tiền: </strong>--}}
{{--                    <span class="cart-total-price">0đ</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="column-cart gio_hang" id="displayBlock1">--}}
{{--                <div class="cart-total">--}}
{{--                    <strong class="cart-total-title">Các sản phẩm yêu thích </strong>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="border-t mt-2"></div>
    <div class="container mt-3 pb-3">
        <ul class="nav nav-bar justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./Index.html">TRANG CHỦ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./introducepage.html">GIỚI THIỆU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ĐÔNG HỒ NAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ĐÔNG HỒ NỮ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./blog.html">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">LIÊN HỆ</a>
            </li>
        </ul>
    </div>
</div>
</div>
