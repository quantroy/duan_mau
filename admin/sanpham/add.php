<div class="container">

    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">THÊM MỚI SẢN PHẨM</h5>
    <?php
    if (isset($thongbao)) {
        echo '<b class="text-success mb-2">' . $thongbao . '</b>';
    }
    ?>

    <div class="form-group">
        <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
            <label for="iddm">Danh mục</label>
            <select class="form-control col-2" name="iddm" id="iddm">
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <label for="tenLoai">Tên sản phẩm</label>
            <input id="tenLoai" class="form-control mb-3" type="text" name="tensp">
            <label for="gia">Giá</label>
            <input id="gia" class="form-control mb-3" type="text" name="gia">
            <label for="exampleFormControlFile1">Hình</label>
            <input type="file" class="form-control-file p-2 mb-2" id="exampleFormControlFile1" name="hinh">
            <label for="exampleFormControlTextarea1">Mô tả</label>
            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" name="mota"></textarea>
            <label for="">Ẩn</label>
            <input type="radio" name="trangthai" id="1" value="0" selected>
            <label for="">Hiện</label>
            <input type="radio" name="trangthai" id="0" value="1">
            <div></div>
            <input class="btn btn-success rounded" name="themmoi" type="submit" value="Thêm mới">
            <input class="btn btn-dark rounded" type="reset" value="Nhập lại" name="Btn_reset">
            <a class="btn btn-primary" href="index.php?act=listsp" role="button" name="Btn_list">Danh sách</a>
        </form>
    </div>
</div>