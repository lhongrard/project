<?php
include 'connect.php';
// Chart1
$chart2_student = $conn->query("SELECT type_suff FROM sufferer WHERE type_suff ='นักศึกษา'");
$student = $chart2_student->rowCount();
$chart2_employ = $conn->query("SELECT type_suff FROM sufferer WHERE type_suff ='บุคลากร'");
$employ = $chart2_employ->rowCount();
$chart2_people = $conn->query("SELECT type_suff FROM sufferer WHERE type_suff ='บุคคลภายนอก'");
$people = $chart2_people->rowCount();
// Chart1 END //
?>

google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],
                    <?php
                        echo "['นักศึกษา', $student],
                            ['บุคลากร', $employ],
                            ['บุคคลภายนอก', $people]";
                    ?>
                ]);

                var options = {
                
                pieHole: 0.4,
                fontName: 'Kanit',
                fontSize: 16,
                legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 16}, alignment: 'center'},
                chartArea:{left:20,top:0,width:'90%',height:'90%'}
                };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_2'));
        chart.draw(data, options);
    };
