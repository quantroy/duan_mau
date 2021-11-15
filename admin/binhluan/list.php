<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">Danh sách tài khoản</h5>

    <?php
    if (isset($_SESSION['thongbao'])) {
        echo '<b class="text-success mb-2">' . $_SESSION['thongbao'] . '</b>';
        unset($_SESSION['thongbao']);
    }
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">Nội dung</th>
                <th scope="col">ID user</th>
                <th scope="col">ID sản phẩm</th>
                <th scope="col">Thời gian</th>
                <th scope="col" class="col-2">Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $xoabl = 'index.php?act=xoabl&idbl=' . $id;
                echo
                '<tr>
                <th><input type="checkbox" name="" id=""></th>
                <td>' . $id . '</td>
                <td>' . $noidung . '</td>
                <td>' . $iduser . '</td>
                <td>' . $idpro . '</td>
                <td>' . $ngay_bl . '</td>
                <td col="2">
                <a href ="' . $xoabl . '"><input class="btn btn-danger" type="button" value="Xoá" name="xoabl"></a>
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
    </div>
</div>