<?php
function load_thongke()
{
    $sql = "SELECT danhmuc.id as madanhmuc, danhmuc.name AS tenDm, COUNT(sanpham.id) as countSp,";
    $sql .= " min(sanpham.price) AS minPrice, max(sanpham.price) AS maxPrice, avg(sanpham.price) AS avgPrice";
    $sql .= " FROM sanpham left JOIN danhmuc ON danhmuc.id=sanpham.iddm";
    $sql .= " Group by danhmuc.id ORDER BY danhmuc.id DESC";
    $listTk = pdo_query($sql);
    return $listTk;
}
