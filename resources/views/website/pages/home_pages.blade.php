@extends('website.layout.main_website')

@section('content')

    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/slide-bg-2.jpg"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption carousel-caption-item d-none d-md-block">
                        <h4 style="padding-right: 200px;">Mona Watch</h4>
                        <h1 style="">Đồng hồ Classico</h1>
                        <p style="text-align: left;" class="mb-5">Cùng với sự phát triển không ngừng của thời
                            trang thế giới, rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính hãng đa
                            dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
                        <a href="#" class="button-a   white is-outline">
                            <span class="">XEM SẢN PHẨM</span>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/slide-bg-1.jpg"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption carousel-caption-item d-none d-md-block">
                        <h4 style="padding-right: 200px;">Mona Watch</h4>
                        <h1 style="">Đồng hồ Classico</h1>
                        <p style="text-align: left;" class="mb-5">Cùng với sự phát triển không ngừng của thời
                            trang thế giới, rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính hãng đa
                            dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
                        <a href="#" class="button-a   white is-outline">
                            <span class="">XEM SẢN PHẨM</span>
                        </a>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- banner -->
    <div class="section sec_trend mt-5">
        <div class="section-bg container">
            <div class="row justify-content-center">
                <div class="col-5 section-bg-item">
                    <div class="title">
                        <h5 class="text-light">Xu hướng 2019</h5>
                        <div class="baner-background"></div>
                        <h2 class="text-light title-h2">
                            ĐỒNG HỒ NAM
                        </h2>
                    </div>
                </div>
                <!-- <div class="col-2"></div> -->
                <div class="col-5 ms-5 section-bg-item2">
                    <div class="title">
                        <h5 class="text-light">Xu hướng 2019</h5>
                        <div class="baner-background"></div>
                        <h2 class="text-light title-h2">
                            ĐỒNG HỒ NỮ
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-slider container">
        <div class="slider-btns">
            <h4 class="prodcut-slider-heading ms-3 pt-2">Sản phẩm bán chạy</h4>
            <div class="pt-2">
                <button aria-label="Previous" class="glider-prev icon-slider"><img src="./image/left-arrow.png" alt="">
                </button>
                <button aria-label="Next" class="glider-next icon-slider"><img src="./image/right-arrow.png" alt="">
                </button>
            </div>
        </div>
        <div class="glider-contain mt-3">
            <div class="glider">
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="./productdetails.html">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                    class="p-img-front image" alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>
                    <div></div>
                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 1</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>

                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05.png"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 2</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04.png"
                                    class="p-img-front image" alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 3</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>
                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03.png"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 4</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 5</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-01.png"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 6</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04.png"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 7</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14.jpg"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 8</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16.jpg"
                                    class="p-img-front image " alt="">
                                <!-- <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-600x700.png" class="p-img-back" alt=""> -->
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 9</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>

                        </div>
                    </div>

                </div>
                <div class="product-box">
                    <span class="p-discount"><i class="far fa-heart"></i></span>

                    <div class="p-img-container">
                        <div class="p-img">
                            <a href="#">
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-10.jpg"
                                    class="p-img-front image " alt="">

                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body-item ms-5">
                            <h6 class="card-title ms-4 ten-item-column">Classico 10</h6>
                            <p class="card-text">
                                <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                <span class="span-price gia">500,000 <u>đ</u></span>
                            </p>
                            <button class="btn text-light ms-3 cart-slider add-to-cart ">Thêm vào giỏ</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="section sec_trend mt-5">
        <div class="section-bg container">
            <div class="row justify-content-center">
                <div class="col-5 section-bg-item-img">
                    <div class="title">
                        <h2 class="text-light" style="font-weight: 700;">CỔ ĐIỂN</h2>
                        <div class="baner-background"></div>
                        <h5 class="text-light title-h5">
                            Đa dạng về phong cách, kiểu dáng,
                            <br>
                            màu sắc, kích cỡ..
                        </h5>
                    </div>
                </div>
                <div class="col-5 ms-5 section-bg-item-img2">
                    <div class="title">
                        <h2 class="text-light" style="font-weight: 700;">SMART WATCH</h2>
                        <div class="baner-background"></div>
                        <h5 class="text-light title-h5">
                            Đa dạng về phong cách, kiểu dáng,
                            <br>
                            màu sắc, kích cỡ..
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs container mt-5">
        <ul class="nav nav-pills me- mb-3 " id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-item  active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="" role="tab" aria-controls="pills-home"
                        aria-selected="true">Sản phẩm phổ biến
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-item" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Sản phẩm khuyết mãi
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-item" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Sản phẩm mới
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                 aria-labelledby="pills-home-tab">
                <div id="rendenrProduct"
                     class="row ms-1 large-columns-5 medium-columns-3 small-columns-2 row-normal">
{{--                    @foreach($products as $product)--}}
{{--                        <div class="col ">--}}
{{--                            <div class="mt-3 mb-4">--}}
{{--                                <div class="card" style="width: 14rem; height: 390px;">--}}
{{--                                        <span class="heart-icon-cart mt-2">--}}
{{--                                            <i class=" far fa-heart"></i>--}}
{{--                                        </span>--}}
{{--                                    <img src="{{App\Models\Product::getImage($product)}}" alt="...">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-body-item ms-2">--}}
{{--                                            <h6 class="card-title ms-5 ten-item-column ">{{$product->name}}</h6>--}}
{{--                                            <p class="card-text ms-3">--}}
{{--                                                <span class="span-price gia ms-4">{{number_format($product->price)}} <u>đ</u></span>--}}
{{--                                            </p>--}}
{{--                                            <button class="btn text-light ms-4 cart-slider add-to-cart add-to-cart">--}}
{{--                                                <a class="addCart-item" onclick="AddCart({{$product->id}})"--}}
{{--                                                   href="javascript:"> Thêm sản phẩm</a>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                @endforeach--}}

                <!-- rendenrProduct -->

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row large-columns-5 medium-columns-3 small-columns-2 row-normal">
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="p-discount"><i class="fal fa-heart"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-07.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 12</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 13</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-10.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 14</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 15</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-11.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 16</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-09.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 17</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 18</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-06.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 19</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 20</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"><strike>700,000 <u>đ</u></strike></span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-08.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 21</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row large-columns-5 medium-columns-3 small-columns-2 row-normal">
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 22</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03.png"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 23</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 24</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05.png"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 25</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-08.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 26</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-01.png"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 27</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia"> 500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-06.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 4</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04.png"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 4</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column ">Classico 4</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3 mb-4">
                            <div class="card" style="width: 14rem; height: 390px;">
                                <span class="heart-icon-cart mt-2"><i class="fa-solid fa-heart icon"></i></span>
                                <img
                                    src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-09.jpg"
                                    class="card-img-top image" alt="...">
                                <div class="card-body">
                                    <div class="card-body-item ms-2">
                                        <h6 class="card-title ms-5 ten-item-column">Classico 4</h6>
                                        <p class="card-text ms-3">
                                            <span class="strike"> <strike>700,000 <u>đ</u></strike> </span>
                                            <span class="span-price gia">500,000 <u>đ</u></span>
                                        </p>
                                        <a href="#" class="btn text-light ms-4 cart-slider add-to-cart">Thêm vào
                                            giỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="container mt-5">
        <div class="row large-columns-3 medium-columns-3 small-columns-1">
            <div class="col post-item">
                <a href="#">
                    <img width="380px" height="215px" class="post-item-img"
                         src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4.jpg"
                         alt="">
                </a>
                <div class="mt-4">
                    <h5 class="post-title is-larger">Chiếc đồng hồ của những CEO quyền lực <br> nhất thế giới
                    </h5>
                    <p class="from_the_blog_excerpt mt-4">Đối với một số doanh nhân, một chiếc đồng hồ đeo tay
                        <br> không chỉ là ...
                    </p>
                </div>
            </div>
            <div class="col post-item">
                <a href="#">
                    <img width="380px" height="215px" class="post-item-img"
                         src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2.jpg"
                         alt="">
                </a>
                <div class="mt-4">
                    <h5 class="post-title is-larger">12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại
                    </h5>
                    <p class="from_the_blog_excerpt mt-4">Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu
                        <br> chững lại trong hai ...
                    </p>
                </div>
            </div>
            <div class="col post-item">
                <a href="#">
                    <img width="400px" height="215px" class="post-item-img"
                         src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3.jpg"
                         alt="">
                </a>
                <div class="mt-4">
                    <h5 class="post-title is-larger">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều
                        quan tâm, Rolex xếp hạng số 3</h5>
                    <p class="from_the_blog_excerpt mt-4">1. Audemars Piguet Được thành lập vào năm 1875 bởi
                        Jules-Louis Audemars và Edward-Auguste Piguet, ...</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row align-middle row-email">
            <div class="row-email-item">
                <div class="col-5 col-left medium-6 small-12 large-6">
                    <h4 class="form-information">ĐĂNG KÝ NHẬN THÔNG TIN</h4>
                </div>
                <di class="col-2"></di>
                <div class="col-5 ps-5  col-left medium-6 small-12 large-6">
                    <form action="" class="ms-3">
                        <input type="text" placeholder="  Email ..." class="form-gmail">
                        <input type="submit" value="ĐĂNG KÝ" class="form_dang_ky" id="btn-gui">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul>
            <li><a href="logout">Logout</a></li>

        </ul>
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
