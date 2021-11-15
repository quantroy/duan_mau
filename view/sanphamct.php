<div class="container">
    <div class="row">
        <div class="col-9">
            <div class="boxCtSanPham mt-2 mb-2 border">
                <h5 class="bg-primary d-block p-2 text-white">Chi tiết sản phẩm</h5>
                <div class="row">
                    <?php
                    extract($one_sp);
                    $img = $img_path . $img;
                    ?>
                    <div class="col-6 ">
                        <img src="<?= $img ?>" alt="ảnh" width="100%">
                    </div>
                    <div class="col-6 p-2">
                        <h4 class="mt-1"><?= $name ?></h4>
                        <span class="d-inline-block mt-3">Giá: <b><?= $price ?>đ</b></span>
                        <div class="soLuong">
                            <span>Chọn số lượng:</span>
                            <input class="col-3" min="1" value="1" class="" type="number" name="soLuong">
                        </div>
                        <button type="button" class="btn btn-primary mt-3">Thêm vào giỏ hàng</button>
                        <div class="motosp mt-2 pr-2">
                            <h5>Mô tả chi tiết</h5>
                            <p><?= $mota ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bình luận -->
            <div class="boxBình luận mt-3 mb-2 border" id="binhluan">
                <h5 class="bg-primary d-block p-2 mt-4">Bình luận</h5>
                <div class="list-group mt-3">
                    <table class=" table">

                        <?php
                        if (is_array($listBl)) {

                            echo
                            '<th class="col-6">Nội dung</th>
                            <th class="col-3">ID user</th>
                            <th class="col-3">Thời gian</th>';
                            foreach ($listBl as $binhluan) {
                                extract($binhluan);
                                // if ($iduser == $listkh['id']) {
                                //     $nameKhCmt = $listkh['user'];
                                // }
                                echo '<tr>';
                                echo '<td>' . $noidung . '</td>';
                                echo '<td>' . $iduser . '</td>';
                                echo '<td>' . $ngay_bl . '</td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                        <!-- <tr>
                    <td>quan</td>
                    <td>12</td>
                    <td>12h</td>
                </tr> -->
                    </table>

                </div>
                <form action="#" method="POST" class="mt-3">
                    <!-- <input hidden name="idpro" value="<?= $id ?>"> -->
                    <input class="form-control" type="text" name="noidung" placeholder="Nhập bình luận">
                    <input type="submit" class="btn btn-primary mt-2" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>
            <?php
            if (isset($_POST['guibinhluan'])) {
                // $dataUserCmt =  loadNameUser($idpro);

                $noidung = $_POST['noidung'];
                $iduser = $_SESSION['user']['id'];
                $ngay_bl = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngay_bl);

                $listBl = loadall_binhluan($idpro);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }

            ?>
            <!--  -->
            <div class="boxSpCungLoai mt-3 mb-2 border">
                <h5 class="bg-primary d-block p-2">Sản phẩm cùng loại</h5>
                <div class="row">
                    <?php
                    foreach ($list_sp_cungloai as $sp) {
                        extract($sp);
                        $img = $img_path . $img;
                        $linksp = 'index.php?act=sanphamct&idsp=' . $id;
                        echo
                        '<div class="col-3 ">
                    <a href="' . $linksp . '" title="' . $name . '"><img class="rounded-lg" width="100%" src="' . $img . '" alt=""></a>
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