<?php
ob_start();
session_start();
include_once "./model/pdo.php";
include_once "./model/danhmuc.php";
include_once "./model/sanpham.php";
include_once "./model/binhluan.php";
include_once "view/header.php";
include_once "./model/taikhoan.php";
include_once "./global.php";

// controller
$listdm = loadall_danhmuc();
$spnews = loadall_sanpham_home();
$sptop5yeuthich = loadall_sanpham_top5();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && is_numeric($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                $idpro = $idsp;
                $one_sp = loadone_sanpham($idsp);
                $iddm = $one_sp['iddm'];
                $list_sp_cungloai = load_sanpham_cungloai($idsp, $iddm);
                $listBl = loadall_binhluan($idpro);
                $listkh = loadall_khachhang();



                include_once "./view/sanphamct.php";
            } else {
                include_once "./view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_GET['iddm']) && is_numeric($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $tendm = loadone_danhmuc_cho_sp($iddm);
                $listsp = loadall_sanpham('', $iddm);
                // $list_sp_cungloai = load_sanpham_cungloai($idsp, $iddm);

                include_once "./view/sp_theo_dm.php";
            } else {
                include_once "./view/home.php";
            }
            break;
        case 'dangki':
            if (isset($_POST['dangki'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                if (empty($_POST['email']) || empty($_POST['user']) || empty($_POST['pass'])) {
                    $error = 'Không được để trống';
                    $_SESSION['error'] = $error;
                } elseif (strlen($_POST['user']) < 5) {
                    $error = 'Tên đăng nhập tối thiếu có 5 kí tự';
                    $_SESSION['error'] = $error;
                } elseif (strlen($_POST['pass']) < 5) {
                    $error = 'Mật khẩu nhập tối thiếu có 5 kí tự';
                    $_SESSION['error'] = $error;
                } else {
                    $mess = 'Đăng kí thành công!';
                    insert_taikhoan($email, $user, $pass);
                    $_SESSION['mess'] = $mess;
                }
            }
            include_once "./view/taikhoan/dangki.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user, $pass);
                if (empty($_POST['user']) || empty($_POST['pass'])) {
                    $error = 'Không được để trống';
                    $_SESSION['error'] = $error;
                    header('Location: index.php');
                } elseif (is_array($checkuser)) {
                    // $mess = 'Đăng nhập tài công!';
                    // $_SESSION['mess'] = $mess;
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $error = 'Tài khoản không tồn tại';
                    $_SESSION['error'] = $error;
                    header('Location: index.php');
                }
            }
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];


                if (empty($_POST['email']) || empty($_POST['user'])) {
                    $error = 'Không được để trống trường *';
                    $_SESSION['error'] = $error;
                } elseif (strlen($_POST['user']) < 5) {
                    $error = 'Tên đăng nhập tối thiếu có 5 kí tự';
                    $_SESSION['error'] = $error;
                } else {
                    // header("Location: index.php?act=edit_taikhoan");
                    $mess = 'Cập nhật thành công!';
                    $_SESSION['mess'] = $mess;
                    update_taikhoan($id, $pass, $user, $email, $address, $tel);
                    $_SESSION['user'] = check_user($user, $pass);
                }
            }
            include_once "./view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];

                if (empty($_POST['email']) && empty($_POST['user'])) {
                    $error = 'Không được để trống';
                    $_SESSION['error'] = $error;
                } else {
                    $quen_matkhau = quen_matkhau($email, $user);
                    if (is_array($quen_matkhau)) {
                        extract($quen_matkhau);
                        $mess = 'Mật khẩu của bạn là ' . $pass;
                        $_SESSION['mess'] = $mess;
                    } else {
                        $error = 'Email hoặc tên đăng nhập không tồn tại';
                        $_SESSION['error'] = $error;
                    }
                }
            }
            include_once "./view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header("Location: index.php");
            break;
        case 'lienhe':
            include_once "./view/lienhe.php";
            break;
        case 'hoidap':
            include_once "./view/hoidap.php";
            break;
        case 'gioithieu':
            include_once "./view/gioithieu.php";
            break;

        default:
            include_once "./view/home.php";
            break;
    }
} else {
    if (isset($_POST['timkiem_clicked']) && !empty($_POST['timkiem'])) {
        $kyw = $_POST['timkiem'];
        $kq_timkiem = 'Kết quả tìm kiếm cho `' . $kyw . '`';
        $spnews = loadall_sanpham($kyw, 0);
        // var_dump(3);
        // die;
    }
    include_once "./view/home.php";
}
include_once "./view/footer.php";
