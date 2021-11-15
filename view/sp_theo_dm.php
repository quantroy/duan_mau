<div class="container">
    <div class="row">
        <div class="col-9">
            <div class="boxCtSanPham mt-2 mb-2">
                <h5 class="bg-primary d-block p-2 text-white">Sản phẩm</h5>
                <b class="border-bottom border-success"><?= $tendm ?></b>
                <div class="row">
                    <?php
                    foreach ($listsp as $sanpham) {
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

        </div>
        <!-- end card -->
        <div class="col-3">
            <?php
            include_once "boxphai.php";
            ?>
        </div>
    </div>
</div>