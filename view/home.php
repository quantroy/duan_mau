<div class="container">
    <div class="row">
        <div class="col-9">
            <div id="carouselExampleControls" class="carousel slide mt-3 mb-4" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./view./image/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./view./image/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- End slide -->

            <div class="h3">SẢN PHẨM</div>
            <h5><?php if (isset($_POST['timkiem_clicked']) && !empty($_POST['timkiem'])) echo $kq_timkiem ?></h3>
                <div class="row">
                    <?php
                    foreach ($spnews as $sanpham) {
                        extract($sanpham);
                        $hinh = $img_path . $img;
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;

                        echo
                        '<div class="col-4 mt-3">
                        <div class="card" style="width: 100%; height: 450px;">
                            <img src="' . $hinh . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title" style="color: #fa6400">' . $name . '</h6>
                                <b>' . $price . 'đ</b>
                                <a href="' . $linksp . '" class="btn btn-primary d-block xemthem">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
        </div>
        <!-- end card -->
        <div class="col-3">
            <?php
            include_once "boxphai.php";
            ?>
        </div>
    </div>
</div>