<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">Danh sách loại hàng</h5>
    <?php
    if (isset($thongbao)) {
        echo '<b class="text-success mb-2">' . $thongbao . '</b>';
    }
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col" class="col-2 ">Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadanhmuc = 'index.php?act=suadanhmuc&id=' . $id;
                $xoadanhmuc = 'index.php?act=xoadanhmuc&id=' . $id;
                echo
                '<tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td col="2">
                        <a href ="' . $suadanhmuc . '"><input class="btn btn-primary" type="button" value="Sửa" name="suadanhmuc"></a>
                        <a href ="' . $xoadanhmuc . '"><input class="btn btn-danger" type="button" value="Xoá" name="xoadanhmuc"></a>
                    </td>
                </tr>
                ';
            }
            ?>

        </tbody>
    </table>
    <div class="mb-3">
        <input class="btn btn-dark" type="button" value="Chọn tất cả" name="btn_chonall">
        <input class="btn btn-secondary" type="button" value="Bỏ chọn tất cả" name="tb_huyall">
        <input class="btn btn-danger" type="button" value="Xoá các mục đã chọn" name="btb_xoaall">
        <a class="btn btn-success" href="index.php?act=adddanhmuc" role="button" name=btn_add>Nhập thêm</a>
    </div>
</div>