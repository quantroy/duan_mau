<div class="container">

    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">THÊM MỚI LOẠI HÀNG HOÁ</h5>
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
    <div class="form-group">
        <form action="index.php?act=adddanhmuc" method="post">
            <label for="maLoai" hidden>Mã loại</label>
            <input id="maLoai" class="form-control mb-3" type="text" name="" hidden>
            <label for="tenLoai">Tên loại</label>
            <input id="tenLoai" class="form-control mb-3" type="text" name="tenloai">
            <input class="btn btn-success rounded" name="themmoi" type="submit" value="Thêm mới">
            <input class="btn btn-dark rounded" type="reset" value="Nhập lại" name="btn_reset">
            <a class="btn btn-primary" href="index.php?act=listdanhmuc" role="button" name="btn_list">Danh sách</a>
        </form>
    </div>
</div>