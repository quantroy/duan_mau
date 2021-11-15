<?php
function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm, $tt)
{
    $sql = "INSERT INTO sanpham (name, price, img, mota, iddm, trang_thai) values ('$tensp', '$giasp', '$hinh', '$mota', '$iddm', '$tt')";
    pdo_execute($sql);
}

function loadall_sanpham_top5()
{
    $sql = "SELECT * from sanpham where 1 Order by luotxem desc limit 0, 5";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "SELECT * from sanpham where 1 Order by id desc limit 0,9";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw, $iddm)
{
    $sql = "SELECT * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " AND name Like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc limit 0,9";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($idsp, $iddm)
{
    $sql = "SELECT * from sanpham where iddm=  '" . $iddm . "' AND id <> " . $idsp . " LIMIT 4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "SELECT * from sanpham where id=" . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function delete_sanpham($id)
{
    $sql = "DELETE from sanpham where id=" . $id;
    pdo_execute($sql);
}
function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
{

    if ($hinh != "") {
        $sql = 'UPDATE sanpham set id="' . $id . '", iddm="' . $iddm . '", name="' . $tensp . '", price="' . $giasp . '", img="' . $hinh . '", mota="' . $mota . '" WHERE id=' . $id;
    } else {
        $sql = 'UPDATE sanpham set id="' . $id . '", iddm="' . $iddm . '", name="' . $tensp . '", price="' . $giasp . '", mota="' . $mota . '" WHERE id=' . $id;
    }
    pdo_execute($sql);
}
