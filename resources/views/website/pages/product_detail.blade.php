@extends('website.layout.main_website')
@section('content')
    <div class="onk">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="slider" class="owl-carousel product-slider">
                        <div class="item">
                            <img src="{{$product->image}}" />
                        </div>
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-01.png" />--}}
{{--                        </div>--}}
                    </div>
{{--                   <div id="thumb" class="owl-carousel product-thumb">--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-300x300.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05-300x300.png" />--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <img--}}
{{--                                src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-01-300x300.png" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-6 mt-5">
                    <div class="product-dtl">
                        <div class="product-info">
                            <div class="product-name">{{$product->name}}</div>
                            <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" checked />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" checked />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" checked />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount"><span>{{$product->price}}đ</span><span
                                    class="line-through">700,000đ</span></div>
                        </div>
                        <p>Là một mẫu đồng hồ theo đuổi phong cách cổ điển, Ulysse Nardin Classico 3203-136-2/30 sở hữu
                            dáng vỏ tròn mềm mại đậm tính truyền thống – dáng vỏ đặc trưng chưa bao giờ lỗi thời. Đặc
                            biệt hơn, nhờ chất liệu thép không gỉ, bộ vỏ đồng hồ dường như trở nên sắc sảo và tinh tế
                            hơn.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="size">Chọn chất liệu dây</label>
                                <select id="size" name="size" class="form-control">
                                    <option>Dây da</option>
                                    <option>Dây kim loại</option>
                                    <option>Dây vải Nato</option>
                                    <option>Dây đá gốm Ceramic</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="color">Color</label>
                                <select id="color" name="color" class="form-control">
                                    <option>Blue</option>
                                    <option>Green</option>
                                    <option>Red</option>
                                </select>
                            </div>
                        </div>
                        <div class="product-count">
                            <label for="size">Số lượng</label>
                            <form action="#" class="display-flex">
                                <div class="qtyminus">-</div>
                                <input type="text" name="quantity" value="1" class="qty">
                                <div class="qtyplus">+</div>
                            </form>
                            <a href="#" class="round-black-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                           aria-controls="description" aria-selected="true">Mô tả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                           aria-controls="review" aria-selected="false">Đánh giá (0)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                         aria-labelledby="description-tab">
                        Mỗi khi nhắc đến cái tên Ulysse Nardin, nhiều người trong chúng ta sẽ nghĩ ngay đến một trong
                        những thương hiệu đồng hồ đình đám hàng đầu thế giới và là đại diện tiêu biểu cho ngành hàng
                        hải. Nguyên nhân của danh xưng này cũng đến từ những mẫu đồng hồ độc đáo lấy cảm hứng từ biển cả
                        cũng như logo hình mỏ neo của thương hiệu này.

                        Tuy vậy, Ulysse Nardin không chỉ nổi bật với những sản phẩm đồng hồ biển đặc trưng, mà trong số
                        những bộ sưu tập đồ sộ của mình, nhà sản xuất này còn có cho mình dòng sản phẩm Classico – dòng
                        sản phẩm đồng hồ mang phong cách cổ điển vô cùng mới lạ và được nhiều khách hàng ưa chuộng.

                        Chính vì vậy, hôm nay Gia Bảo Luxury xin trân trọng giới thiệu với quý khách hàng một trong
                        những thiết kế đồng hồ cổ điển cực kỳ trang nhã và được đánh giá rất cao của nhà Ulysse Nardin -
                        Ulysse Nardin Classico 3203-900.
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="review-heading">Đánh giá</div>
                        <p class="mb-20">Hiện tại không có đánh giá nào.</p>
                        <form class="review-form">
                            <div class="form-group">
                                <label>Đánh giá của bạn</label>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <button class="round-black-btn">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            var slider = $("#slider");
            var thumb = $("#thumb");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;
            slider.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: false,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200
            }).on('changed.owl.carousel', syncPosition);
            thumb
                .on('initialized.owl.carousel', function() {
                    thumb.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: true,
                    item: 4,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage,
                    navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);
            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                thumb
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = thumb.find('.owl-item.active').length - 1;
                var start = thumb.find('.owl-item.active').first().index();
                var end = thumb.find('.owl-item.active').last().index();
                if (current > end) {
                    thumb.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    thumb.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }
            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    slider.data('owl.carousel').to(number, 100, true);
                }
            }
            thumb.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                slider.data('owl.carousel').to(number, 300, true);
            });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
        });
    </script>

@endsection
