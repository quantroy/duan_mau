<?php
if (is_array($khachhang)) {
    extract($khachhang);
}
?>
<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">Sửa vai trò</h5>
    <div class="form-group">
        <form action="index.php?act=updatekh" method="post" enctype="multipart/form-data">
            <select class="form-control mr-2 mb-3 col-2" name="vaitro">
                <option value="0">Khách hàng</option>
                <option value="1">Admin</option>
            </select>


            <label for="user">Tên đăng nhập</label>
            <label for="ID">ID</label>
            <input readonly id="id" class="form-control mb-3" type="" name="id" value="<?= $id ?>">
            <label for="user">Tên đăng nhập</label>
            <input readonly id="user" class="form-control mb-3" type="text" name="user" value="<?= $user ?>">
            <label for="email">Email</label>

            <input readonly id="email" class="form-control mb-3" type="email" name="email" value="<?= $email ?>">
            <label for="ref">Người giới thiệu</label>
            <textarea class="form-control mb-3" name="ref" id="ref" cols="30" rows="10"></textarea>

            <input class="btn btn-success rounded" name="capnhat" type="submit" value="Cập nhật">
            <input class="btn btn-dark rounded" type="reset" value="Nhập lại" name="bnt_reset">
            <a class="btn btn-primary" href="index.php?act=dskhachhang" role="button" name="bnt_list">Danh sách</a>
        </form>
    </div>
</div>