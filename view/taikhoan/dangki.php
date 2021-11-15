<div class="container">
    <div class="row">
        <div class="col-9">
            <h4 class="mb-2 mt-2">Đăng kí thành viên</h4>
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
            <form action="index.php?act=dangki" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="user">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <input type="submit" class="btn btn-primary" value="Đăng ký" name="dangki"></input>
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