<?php
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO taikhoan (email, user, pass ) values ('$email', '$user', '$pass' )";
    pdo_execute($sql);
}
function check_user($user, $pass)
{
    $sql = "SELECT * from taikhoan where user= '" . $user . "' And pass= '" . $pass . "'";
    $datauser = pdo_query_one($sql);
    return $datauser;
}
function quen_matkhau($email, $user)
{
    $sql = "SELECT * from taikhoan where email= '" . $email . "' And user = '" . $user . "'";
    $datauser = pdo_query_one($sql);
    return $datauser;
}
function update_taikhoan($id, $pass, $user, $email, $address, $tel)
{
    $sql = 'UPDATE taikhoan set pass="' . $pass . '", user="' . $user . '", email="' . $email . '", address="' . $address . '", tel="' . $tel . '" WHERE id=' . $id;

    pdo_execute($sql);
}
function loadall_khachhang()
{
    $sql = "SELECT * from taikhoan order by id desc";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
}

function loadone_khachhang($id)
{
    $sql = "SELECT * from taikhoan where id=" . $id;
    $khachhang = pdo_query_one($sql);
    return $khachhang;
}
function update_khachhang($id, $role, $ref)
{
    $sql = 'UPDATE taikhoan set role="' . $role . '" , k_ref="' . $ref . '" WHERE id=' . $id;
    pdo_execute($sql);
}
function loadone_tenUser($id)
{
    $sql = "SELECT * from taikhoan where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm['url'];
}
