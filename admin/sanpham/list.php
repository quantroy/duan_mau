<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">Danh sách sản phẩm</h5>
    <form class="form-inline mb-2" action="index.php?act=listsp" method="post">
        <input class="form-control col-2" type="text" placeholder="Nhập tên sản phẩm" name="kyw">
        <select class="form-control mr-2 ml-2" name="iddm">
            <option value="0">Tất cả</option>
            <?php
            // extract($listsanpham);
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input class="form-control btn-info" type="submit" value="Lọc" name="loc_clicked">
    </form>
    <?php
    if (isset($thongbao)) {
        echo '<b class="text-success mb-2">' . $thongbao . '</b>';
    }
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Hình</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Trạng thái</th>
                <th scope="col" class="col-2 ">Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $tt = ($trang_thai == 0) ? 'ẩn' : "hiện";
                $suasp = 'index.php?act=suasp&id=' . $id;
                $xoasp = 'index.php?act=xoasp&id=' . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='90'>";
                    // var_dump($hinh);
                    // die;
                } else {
                    $hinh = "Ko có ảnh";
                }

                echo
                '<tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $price . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $luotxem . '</td>
                    <td>' . $tt . '</td>
                    <td col="2">
                        <a href ="' . $suasp . '"><input class="btn btn-primary" type="button" value="Sửa" name="suasp"></a>
                        <a href ="' . $xoasp . '"><input class="btn btn-danger" type="button" value="Xoá" name="xoasp"></a>
                    </td>
                </tr>
                ';
            }
            ?>

        </tbody>
    </table>
    <div class="mb-3">
        <input class="btn btn-dark" type="button" value="Chọn tất cả" name="Btn_chonall">
        <input class="btn btn-secondary" type="button" value="Bỏ chọn tất cả" name="Btn_huyall">
        <input class="btn btn-danger" type="button" value="Xoá các mục đã chọn" name="Btn_xoaall">
        <a class="btn btn-success" href="index.php?act=addsanpham" role="button" name="Btn_add">Nhập thêm</a>
    </div>
</div>