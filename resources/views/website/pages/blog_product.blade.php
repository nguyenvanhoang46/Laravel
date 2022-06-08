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
        <h5 class="text-center" style="font-weight: 700;">BLOGS</h5>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <form action="" class="ms-3">
                    <input type="text" placeholder="  Tìm kiếm..." class="form-search-item">
                    <button class="form_search-item">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <h6 style="font-weight: 700;" class="ms-3 mt-4">BÀI VIẾT MỚI</h6>
                <ul class="ms-3 is-divider ">
                    <li class="recent-blog-posts-li ">
                        <div>
                            <img class="badge-inner" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-150x150.jpg" alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-150x150.jpg" alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-150x150.jpg" alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-150x150.jpg" alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                    <li class="recent-blog-posts-li mt-4">
                        <div>
                            <img class="badge-inner" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-150x150.jpg" alt="">
                        </div>
                        <div class="flex-col ms-4 flex-grow">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/" title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-9 border-left">
                <div class="row ms-2">
                    <div class="col-4">
                        <div class="card card-item-hover" style="width: 18rem;">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/">
                                <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-300x205.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="post-title is-large ">Chiếc đồng hồ của những CEO quyền lực nhất thế giới</h5>
                                <div class="is-divider-item"></div>
                                <p class="from_the_blog_excerpt ">Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là ...</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-item-hover" style="width: 18rem;">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/">
                                <img style="height: 197px;" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-300x187.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="post-title is-large ">10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3</h5>
                                <div class="is-divider-item"></div>
                                <p class="from_the_blog_excerpt ">1. Audemars Piguet Được thành lập vào năm 1875 bởi Jules-Louis Audemars và Edward-Auguste Piguet, ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="card card-item-hover" style="width: 18rem;">
                            <img style="height: 197px;" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-300x169.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="post-title is-large ">6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá “cắt cổ”</h5>
                                <div class="is-divider-item"></div>
                                <p class="from_the_blog_excerpt ">Bên cạnh những Cartier, IWC và Jaeger-LeCoultre, có nhiều chiếc đồng hồ thuộc các thương ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-5">
                        <div class="card card-item-hover" style="width: 18rem;">
                            <img style="height: 197px;" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-300x169.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="post-title is-large ">Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?</h5>
                                <div class="is-divider-item"></div>
                                <p class="from_the_blog_excerpt ">Có tin Casio dự định trình làng smartwatch G-Shock trong vòng 2 năm tới. Chắc ...</p>
                            </div>
                        </div>
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

