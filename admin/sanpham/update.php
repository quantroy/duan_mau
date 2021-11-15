<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='90'>";
    // var_dump($hinh);
    // die;
} else {
    $hinh = "Ko có ảnh";
}
?>
<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">CẬP NHẬT HÀNG HOÁ</h5>
    <?php
    if (isset($thongbao)) {
        echo '<b class="text-success mb-2">' . $thongbao . '</b>';
    }
    ?>
    <div class="form-group">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <select class="form-control mr-2 col-2" name="iddm">
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    if ($iddm == $danhmuc['id']) $s = "selected";
                    else $s = '';
                    echo '<option value="' . $danhmuc['id'] . '" ' . $s . '>' . $danhmuc['name'] . '</option>';
                }
                ?>
            </select>
            <label for="tenLoai">Tên sản phẩm</label>
            <input id="tenLoai" class="form-control mb-3" type="text" name="tensanpham" value="<?= $name ?>">
            <label for="gia">Giá</label>
            <input id="gia" class="form-control mb-3" type="text" name="gia" value="<?= $price ?>">
            <label class="d-block" for="exampleFormControlFile1">Hình</label>
            <?= $hinh ?>
            <input type="file" class="form-control-file p-2 mb-2" id="exampleFormControlFile1" name="hinh">
            <label for="exampleFormControlTextarea1">Mô tả</label>
            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" name="mota"><?= $mota ?></textarea>

            <input class="btn " name="id" type="hidden" value="<?= $id ?>">
            <input class="btn btn-success rounded" name="capnhat" type="submit" value="Cập nhật">
            <input class="btn btn-dark rounded" type="reset" value="Nhập lại" name="bnt_reset">
            <a class="btn btn-primary" href="index.php?act=listps" role="button" name="bnt_list">Danh sách</a>
        </form>
    </div>
    <?php
    if (isset($thongbao)) {
        echo ($thongbao);
    }
    ?>
</div>