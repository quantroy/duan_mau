<div class="container">
    <div class="row">
        <div class="col-9">
            <h4 class="mb-2 mt-2">Cập nhật tài khoản</h4>
            <b class="text-success">
                <?php
                if (isset($_SESSION['mess'])) echo $mess;
                unset($_SESSION['mess']);
                ?>
            </b>
            <b class="text-danger">
                <?php
                if (isset($_SESSION['error'])) echo $error;
                unset($_SESSION['error']);
                ?>
            </b>
            <!-- End validate -->

            <form action="index.php?act=quenmk" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="form-group">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <input type="submit" class="btn btn-primary" value="Cấp lại mật khẩu" name="guiemail"></input>
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