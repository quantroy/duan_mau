<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">CẬP NHẬT LOẠI HÀNG HOÁ</h5>
    <div class="form-group">
        <form action="index.php?act=updatedanhmuc" method="post">
            <label for="maLoai" hidden>Mã loại</label>
            <input id="maLoai" class="form-control mb-3" type="text" name="" hidden>
            <label for="tenLoai">Tên loại</label>
            <input id="tenLoai" class="form-control mb-3" type="text" name="tenloai" value="<?php if (!empty($name)) echo $name; ?>">
            <input type="hidden" name="id" value="<?php if (!empty($id)) echo $id; ?>">
            <input class="btn btn-success rounded" name="capnhat" type="submit" value="Cập nhật">
            <input class="btn btn-dark rounded" type="reset" value="Nhập lại" name="Btn_reset">
            <a class="btn btn-primary" href="index.php?act=listdanhmuc" role="button" name="Btn_list">Danh sách</a>
        </form>
    </div>
</div>