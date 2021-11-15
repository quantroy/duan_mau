<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngay_bl)
{
    $sql = "INSERT INTO binhluan (noidung, iduser, idpro, ngay_bl) values ('$noidung', '$iduser', '$idpro', '$ngay_bl')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    $sql = "SELECT * from binhluan where 1";
    if ($idpro > 0) $sql .= " AND idpro = $idpro";
    $sql .= " Order by id DESC";
    $listbl = pdo_query($sql);

    return $listbl;
}
function delete_binhluan($id)
{
    $sql = "DELETE from binhluan where id=" . $id;
    pdo_execute($sql);
}
