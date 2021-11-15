<div id="piechart" class="m-auto"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    <?php

    ?>
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $sumDm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                // var_dump($thongke);
                // die;
                $dau = ($i == $sumDm) ? "" : ",";
                echo "['" . $thongke["tenDm"] . "', " . $thongke["countSp"] . "]" . $dau;
                $i++;
            }
            ?>

        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Thống kê sản phẩm',
            'width': 650,
            'height': 500
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>