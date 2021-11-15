<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoolMate</title>

    <link rel="shortcut icon" href="https://www.coolmate.me/images/favicon-96x96.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./view/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/css/style.css">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="#"><img width="150px" src="./image/logo.png" alt=""></a>

            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav  mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">TRANG CHỦ</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="#">SẢN PHẨM</a>
                </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=lienhe">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=hoidap">HỎI ĐÁP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=gioithieu">GIỚI THIỆU</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm sản phẩm..." aria-label="Search" name="timkiem">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem_clicked">Tìm kiếm</button>
                </form>
            </div>
        </nav>
    </div>