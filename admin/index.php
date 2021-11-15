<?php
session_start();
include_once('./header.php');
include_once('../model/pdo.php');
include_once('../model/danhmuc.php');
include_once('../model/binhluan.php');
include_once('../model/sanpham.php');
include_once('../model/taikhoan.php');
include_once('../model/thongke.php');
// controller

if (isset($_GET['act'])) {
    // var_dump($_GET['act']);
    // die;
    $act = $_GET['act'];
    switch ($act) {
        case 'adddanhmuc':
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                if (empty($_POST['tenloai'])) {
                    $error = 'Không được để trống';
                    $_SESSION['error'] = $error;
                } else {
                    // header("Location: index.php?act=edit_taikhoan");
                    $mess = 'Thêm mới thành công!';
                    $_SESSION['mess'] = $mess;
                    insert_danhmuc($tenloai);
                }
            }
            include_once('../admin/danhmuc/add.php');
            break;
        case 'listdanhmuc':
            $listdanhmuc = loadall_danhmuc();
            include_once('../admin/danhmuc/list.php');
            break;
        case 'xoadanhmuc':
            if (isset($_GET['id'])) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include_once('../admin/danhmuc/list.php');
            break;
        case 'suadanhmuc':
            if (isset($_GET['id'])) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include_once('../admin/danhmuc/update.php');
            break;
        case 'updatedanhmuc':
            if (isset($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                if (empty($_POST['tenloai'])) {
                    $error = 'Không được để trống';
                    $_SESSION['error'] = $error;
                } else {
                    // header("Location: index.php?act=edit_taikhoan");
                    $mess = 'Cập nhật thành công!';
                    $_SESSION['mess'] = $mess;
                    insert_danhmuc($tenloai);
                    update_danhmuc($tenloai, $id);
                }
            }
            $listdanhmuc = loadall_danhmuc();
            $thongbao = "Cập nhật thành công!";
            include_once('../admin/danhmuc/list.php');
            break;
            // End controller danh mục

        case 'addsanpham':
            if (isset($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $giasp = $_POST['gia'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                $tt = $_POST['trangthai'];

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm, $tt);
                $thongbao = "Thêm mới thành công!";
            }
            $listsanpham = loadall_sanpham('', 0);
            $listdanhmuc = loadall_danhmuc();
            include_once('../admin/sanpham/add.php');
            break;
        case 'listsp':
            if (isset($_POST['loc_clicked'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);

            include_once('../admin/sanpham/list.php');
            break;
        case 'xoasp':

            if (isset($_GET['id'])) {
                delete_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);

            include_once('../admin/sanpham/list.php');
            break;
        case 'suasp':
            if (isset($_GET['id'])) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include_once('../admin/sanpham/update.php');
            break;
        case 'updatesp':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];

                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensanpham'];
                $giasp = $_POST['gia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công!";
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include_once('../admin/sanpham/list.php');
            break;
            // End controller sản phẩm

        case 'dskhachhang':
            $listkhachhang = loadall_khachhang();
            include_once('../admin/taikhoan/list.php');
            break;
        case 'sua_vaitro':
            if (isset($_GET['idkh'])) {
                $idkh = $_GET['idkh'];
                $khachhang = loadone_khachhang($idkh);
                // extract($khachhang);
                // update_khachhang($id, $role);
                // $khachhang = loadone_khachhang($idkh);
            }
            include_once('../admin/taikhoan/update.php');
            break;
        case 'updatekh':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $role = $_POST['vaitro'];
                $ref = $_POST['ref'];
                update_khachhang($id, $role, $ref);
                // $loall_kh = loadall_khachhang();
                $thongbao = "Cập nhật thành công!";
                $_SESSION['thongbao'] = $thongbao;
            }
            $listkhachhang = loadall_khachhang();
            include_once('../admin/taikhoan/list.php');
            break;
            // End controller tài khoản

        case 'dsbinhluan':

            $listbinhluan = loadall_binhluan(0);
            include_once('../admin/binhluan/list.php');
            break;
        case 'xoabl':
            if (isset($_GET['idbl'])) {
                delete_binhluan($_GET['idbl']);
            }

            $listbinhluan = loadall_binhluan(0);
            include_once('../admin/binhluan/list.php');
            break;
            // End controller bình luận
        case 'thongke':
            $listthongke = load_thongke();
            include_once('../admin/thongke/list.php');
            break;
        case 'bieudo':
            $listthongke = load_thongke();
            include_once('../admin/thongke/bieudo.php');
            break;
            // End controller thống kê

        default:
            include_once('./home.php');
            break;
    }
} else {
    include_once('./home.php');
}

include_once('./footer.php');
