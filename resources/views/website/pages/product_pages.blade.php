@extends('website.layout.main_website')
<style>
    .order-item-cart {
        width: 100% !important;
        background-color: #d26e4b!important;
        font-weight: 600;
        color: white !important;

    }
    .product_pages-item {
        width: 13rem!important;
    }
    .heart-icon-cart-item-product {
        margin-left: 155px !important;
    }
</style>
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3 ms-3 d-flex">
                <div class="pages-item homepages-item">TRANG CHỦ</div>
                <span class="ms-2 divider">/</span>
                <div class="ms-2 homepages-item grow-item">ĐỒNG HỒ</div>
            </div>
            <div class="col-8 d-flex form-item-select">
                <div class="mt-2">Hiển thị một kết quả duy nhất</div>
                <div class="ms-3">
                    <form class="" method="get">
                        <select name="orderby" class="orderby-item">
                            <option value="menu_order" selected="selected">Thứ tự mặc định</option>
                            <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                            <option value="rating">Thứ tự theo điểm đánh giá</option>
                            <option value="date">Mới nhất</option>
                            <option value="price">Thứ tự theo giá: thấp đến cao</option>
                            <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                        </select>

                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <form action="" class="ms-3">
                    <input type="text" placeholder="  Tìm kiếm..." class="form-search-item">
                    <button class="form_search-item">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                <h6 style="font-weight: 700;" class="ms-3 mt-4">SẢN PHẨM</h6>
                <ul class="ms-3 mt-4 is-divider ">
                    <li class="recent-blog-posts-li ">
                        <div class="d-flex mt-3">
                            <div class="">
                                <img class="badge-inner-item"
                                     src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-100x100.jpg"
                                     alt="">
                            </div>
                            <div class="flex-col ms-5 flex-grow">
                                <div class="mt-">Simple 10</div>
                                <div class="mt-3 grow-item">700,000 ₫</div>
                            </div>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div class="d-flex mt-3">
                            <div>
                                <img class="badge-inner-item"
                                     src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-100x100.jpg"
                                     alt="">
                            </div>
                            <div class="flex-col ms-5 flex-grow">
                                <div>Simple 9</div>
                                <div class="grow-item mt-3">700,000 ₫</div>
                            </div>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div class="d-flex mt-3">
                            <div>
                                <img class="badge-inner-item"
                                     src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg"
                                     alt="">
                            </div>
                            <div class=" flex-col ms-5 flex-grow">
                                <div>Simple 8</div>
                                <div class="mt-3 grow-item">700,000 ₫</div>
                            </div>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div class="d-flex mt-3">
                            <div>
                                <img class="badge-inner-item"
                                     src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-100x100.jpg"
                                     alt="">
                            </div>
                            <div class="flex-col ms-5 flex-grow">
                                <div>Simple 7</div>
                                <div class="mt-3 grow-item">700,000 ₫</div>
                            </div>
                        </div>
                    </li>

                </ul>
                <h6 style="font-weight: 700;" class="ms-3 mt-4">BÀI VIẾT MỚI NHẤT</h6>
                <ul class="ms-3 mt-4  is-divider ">
                    <li class="recent-blog-posts-li ">
                        <div>
                            <img class="badge-inner"
                                 src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-150x150.jpg"
                                 alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                               title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những
                                CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner"
                                 src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-150x150.jpg"
                                 alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                               title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những
                                CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner"
                                 src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-150x150.jpg"
                                 alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                               title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những
                                CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner"
                                 src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-150x150.jpg"
                                 alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                               title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những
                                CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner"
                                 src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-150x150.jpg"
                                 alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                               title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những
                                CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-9 border-left">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    <div id="rendenrProduct"
                         class="row  ms-1 large-columns-5 medium-columns-3 small-columns-2 row-normal">
                        @if($products)
                            @foreach($products as $product)
                                <div class="col ">
                                    <div class="mt-3 mb-4 ">
                                        <a href="{{ url('detail', [$product->id]) }}">

                                            <div class="card product_pages-item" style="width: 14rem; height: 390px;">
                                        <span class="heart-icon-cart heart-icon-cart-item-product mt-2">
                                            <i class=" far fa-heart"></i>
                                        </span>
                                                <img class="card-img-top" src="{{App\Models\Product::getImage($product)}}" alt="...">
                                                {{--                                        <img class="image-home-pages" src="{{ $product->image }}" alt="...">--}}
                                                <div class="card-body">
                                                    <div class="card-body-item ms-2">
                                                        <h6 class="card-title text-dark  ms-5 ten-item-column ">{{$product->name}}</h6>
                                                        <p class="card-text ms-3">
                                                            <span class="span-price gia text-decoration-none ms-4">{{number_format($product->price)}} <u>đ</u></span>
                                                        </p>
                                                        <button class="btn mt-2 text-light ms-4 cart-slider add-to-cart add-to-cart">
                                                            <a class="addCart-item" onclick="AddCart({{$product->id}})"
                                                               href="javascript:"> Thêm sản phẩm</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <!-- rendenrProduct -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 4,
            slidesToScroll: 5,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>
    <script>
        function AddCart(id) {
            $.ajax({
                url: 'Add-Cart/' + id,
                type: 'GET',
            }).done(function (response) {
                RenderCart(response);
                alertify.success('Đã thêm giỏ hàng thành công');
            });
        }

        $("#change-item-cart").on("click", ".img-close", function () {
            $.ajax({
                url: 'Delete-Item-Cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function (response) {
                RenderCart(response);
                alertify.success('Đã xoá sản phẩm thành công');
            });
        });

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#total-quantity-show").text($("#total-quantity-cart").val());
        }
    </script>

@endsection
