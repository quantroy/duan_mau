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
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Người giới thiệu</th>
                <th scope="col" class="col-2">Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($listkhachhang as $khachhang) {
                extract($khachhang);
                $vaitro = ($role == 0) ? 'khách hàng' : "admin";
                $sua_vaitro = 'index.php?act=sua_vaitro&idkh=' . $id;
                $xoakh = 'index.php?act=xoakh&idkh=' . $id;
                echo
                '<tr>
                <th><input type="checkbox" name="" id=""></th>
                <td>' . $id . '</td>
                <td>' . $user . '</td>
                <td>' . $email . '</td>
                <td>' . $address . '</td>
                <td>' . $tel . '</td>
                <td>' . $vaitro . '</td>
                <td>' . $k_ref . '</td>
                <td col="2">
                <a href ="' . $sua_vaitro . '"><input class="btn btn-primary" type="button" value="Sửa vai trò" name="sua_vaitro"></a>
                <a href ="' . $xoakh . '"><input class="btn btn-danger" type="button" value="Xoá" name="xoakh"></a>
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