<div class="container">
    <div class="row">
        <div class="col-9">
            <h4 class="mb-2 mt-2">Cập nhật tài khoản</h4>
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
            <!-- End validate -->
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="user">Tên đăng nhập <span class="text-danger">*</label>
                    <input type="text" class="form-control" id="user" name="user" value="<?= $user ?>">
                </div>
                <div class="form-group" hidden>
                    <label for="exampleInputPassword1">Mật khẩu <span class="text-danger">*</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" value="<?= $pass ?>">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?= $address ?>">
                </div>
                <div class="form-group">
                    <label for="tel">Số điện thoại</label>
                    <input type="text" class="form-control" id="tel" name="tel" value="<?= $tel ?>">
                </div>
                <input type="hidden" name="id" value=" <?= $id ?>"></input>
                <input type="submit" class="btn btn-primary" value="Cập nhật" name="capnhat"></input>
                <input type="reset" class="btn btn-dark" value="Nhập lại" name="nhaplai"></input>
            </form>
        </div>
        <!-- end card -->
        <div class="col-3">
            <?php
            include_once "./view/boxphai.php";
            ?>
        </div>
    </div>
</div>