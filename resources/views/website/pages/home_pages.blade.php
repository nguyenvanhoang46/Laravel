@extends('website.layout.main_website')

@section('content')
    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/slide-bg-2.jpg" class="d-block w-100" alt="...">
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
                    <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/slide-bg-1.jpg" class="d-block w-100" alt="...">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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

@endsection
