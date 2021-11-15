<div class="container">
    <h5 class="bg-primary p-2 pl-4 rounded text-white mt-3">Thống kê sản phẩm</h5>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá cao nhất</th>
                <th scope="col">Giá thấp nhất</th>
                <th scope="col">Giá trung bình</th>

            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo
                '<tr>
                <td>' . $madanhmuc . '</td>
                <td>' . $tenDm . '</td>
                <td>' . $countSp . '</td>
                <td>' . $minPrice . '</td>
                <td>' . $maxPrice . '</td>
                <td>' . $avgPrice . '</td>
                
                </tr>
                ';
            }
            ?>
        </tbody>
    </table>
    <div class="mb-3">
        <a href="index.php?act=bieudo" class="btn btn-info" role="button">Xem biểu đồ</a>
    </div>
</div>