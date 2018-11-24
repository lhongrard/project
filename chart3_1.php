<?php
include 'connect.php';
// Chart1
$car = $conn->query("SELECT * FROM car WHERE car_type ='รถยนต์'");
$carCount = $car->rowCount();
$mortor = $conn->query("SELECT * FROM car WHERE car_type ='รถจักรยานยนต์'");
$mortorCount = $mortor->rowCount();
$other = $conn->query("SELECT * FROM car WHERE car_type ='รถอื่นๆ'");
$otherCount = $other->rowCount();
// Chart1 END //
?>

google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],
                    <?php
                        echo "['รถยนต์', $carCount],
                            ['รถจักรยานยนต์', $mortorCount],
                            ['รถอื่นๆ', $otherCount]";
                    ?>
                ]);

                var options = {
                
                pieHole: 0.4,
                fontName: 'Kanit',
                fontSize: 16,
                legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 16}, alignment: 'center'},
                chartArea:{left:20,top:0,width:'90%',height:'90%'}
                };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3'));
        chart.draw(data, options);
    };
