<div class="boxDangKy mt-3">
    <h4>Tài khoản</h4>

    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    ?>
        <b class="text-primary">Chào mừng <?= $user ?></b>
        <div class="mt-3">
            <a class="mr-4 d-block" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            <a href="index.php?act=thoat">Đăng xuất</a>
            <?php
            if ($role == 1) {
            ?>
                <a href="admin/index.php">
                    <button style="width: 100%" type="button" class="btn btn-outline-dark mt-3">Đăng nhập Admin</button></a>
            <?php } ?>
        </div>

    <?php
    } else {
    ?>
        <b class="text-success">

            <?php
            if (isset($_SESSION['mess'])) echo $_SESSION['mess'];
            unset($_SESSION['mess']);
            ?>
        </b>
        <b class="text-danger">
            <?php
            if (isset($_SESSION['error'])) echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </b>
        <form action="index.php?act=dangnhap" method="post">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" name="user">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản</label>
            </div>
            <input type="submit" class="btn btn-primary" name="dangnhap" value="Đăng nhập"></input>
        </form>
        <div class="mt-3 mb-1">
            <a class="mr-4" href="index.php?act=quenmk">Quên mật khẩu</a>
            <a href="index.php?act=dangki">Đăng kí</a>
        </div>
    <?php } ?>
</div>
<!-- End đăng ký -->

<div class="boxDanhMuc">
    <h4>Danh mục</h4>
    <div class="list-group mt-3">
        <?php
        foreach ($listdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<a href="' . $linkdm . '" class="list-group-item list-group-item-action">' . $name . '</a>';
        }
        ?>
    </div>
</div>
<!-- End box danh mục -->

<div class="boxTop10 mt-5">
    <h4>Top 5 yêu thích</h4>
    <ul class="list-group">
        <?php
        foreach ($sptop5yeuthich as $sp) {
            extract($sp);
            $img = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo
            '<li class="list-group-item">
                            <img class="border rounded mr-3" width="14%" src="' . $img . '" alt="">
                            <a href="' . $linksp . '">' . $name . '</a>
                        </li>';
        }
        ?>
    </ul>
</div>