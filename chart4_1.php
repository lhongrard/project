<?php
include 'connect.php';
// บาดเจ็บ
$result4 = $conn->query("SELECT SUM(injured) AS total FROM cases");
$row1 = $result4->fetch(PDO::FETCH_ASSOC);
$row11 = $row1['total'];

// เสียชีวิต
$result5 = $conn->query("SELECT SUM(deceased) AS total FROM cases");
$row2 = $result5->fetch(PDO::FETCH_ASSOC);
$row22 = $row2['total'];
?>

google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],
                    <?php
                        echo "['บาดเจ็บ', $row11],
                            ['เสียชีวิต', $row22]";
                           
                    ?>
                ]);

                var options = {
                pieHole: 0.4,
                fontName: 'Kanit',
                fontSize: 16,
                legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 16}, alignment: 'center'},
                chartArea:{left:20,top:0,width:'90%',height:'90%'}
                };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_4'));
        chart.draw(data, options);
    };
