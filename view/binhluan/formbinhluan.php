<?php
session_start();
include_once '../../model/pdo.php';
include_once '../../model/binhluan.php';
$listBl = loadall_binhluan($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div>
        <h5 class="bg-primary d-block p-2 mt-4">Bình luận</h5>
        <div class="list-group mt-3">
            <table class=" table">
                <?php
                echo
                '<th class="col-6">Nội dung</th>
                <th class="col-3">Người bình luận</th>
                <th class="col-3">Thời gian</th>';

                foreach ($listBl as $binhluan) {
                    extract($binhluan);

                    echo '<tr>';
                    echo '<td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngay_bl . '</td>';
                    echo '</tr>';
                }
                ?>
                <!-- <tr>
                    <td>quan</td>
                    <td>12</td>
                    <td>12h</td>
                </tr> -->
            </table>

        </div>
        <form method="POST" class="mt-3">
            <input hidden name="idpro" value="<?= $id ?>">
            <input class="form-control" type="text" name="noidung" placeholder="Nhập bình luận">
            <input type="submit" class="btn btn-primary mt-2" name="guibinhluan" value="Gửi bình luận">
        </form>
    </div>
    <?php
    if (isset($_POST['guibinhluan'])) {

        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngay_bl = date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngay_bl);
        // header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    ?>
</body>

</html>