<?php
include 'connect.php';
// Chart1
$chart1_e = $conn->query("SELECT duty FROM cases WHERE duty='ดึก'");
$num_crt1_e = $chart1_e->rowCount();
$chart1_m = $conn->query("SELECT duty FROM cases WHERE duty='เช้า'");
$num_crt1_m = $chart1_m->rowCount();
$chart1_n = $conn->query("SELECT duty FROM cases WHERE duty='บ่าย'");
$num_crt1_n = $chart1_n->rowCount();
// Chart1 END //
?>

google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],
                    <?php
                        echo "['เช้า (08.00 - 16.00 น.)', $num_crt1_m],
                            ['บ่าย (16.00 - 24.00 น.)', $num_crt1_n],
                            ['ดึก(24.00 - 08.00 น.)', $num_crt1_e]";
                    ?>
                ]);

                var options = {
                
                pieHole: 0.4,
                fontName: 'Kanit',
                fontSize: 16,
                legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 16}, alignment: 'center'},
                chartArea:{left:20,top:0,width:'90%',height:'90%'}
                };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_1'));
        chart.draw(data, options);
    };





