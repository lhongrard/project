<?php
include 'connect.php';

$a1 = $conn->query("SELECT places FROM cases WHERE places = 'วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์'");
$a = $a1->rowCount();

$a2 = $conn->query("SELECT places FROM cases WHERE places = 'วงเวียนหอพักชายที่ 16'");
$b = $a2->rowCount();

$a3 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนหน้าปั๊มน้ำมันปตท.'");
$c = $a3->rowCount();

$a4 = $conn->query("SELECT places FROM cases WHERE places = 'ยูเทิร์นหน้าแฟลตจามจุรี'");
$d = $a4->rowCount();

$a5 = $conn->query("SELECT places FROM cases WHERE places = 'สี่แยกประตู 6'");
$e = $a5->rowCount();

$a6 = $conn->query("SELECT places FROM cases WHERE places = 'วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)'");
$f = $a6->rowCount();

$a7 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง'");
$g = $a7->rowCount();

$a8 = $conn->query("SELECT places FROM cases WHERE places = 'แยกคณะเภสัชศาสตร์'");
$h = $a8->rowCount();

$a9 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.'");
$i = $a9->rowCount();

$a10 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์'");
$j = $a10->rowCount();

$a11 = $conn->query("SELECT places FROM cases WHERE places = 'อื่นๆ'");
$k = $a11->rowCount();
?>

 google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],
                    <?php
                        echo "['วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์', $a],
                            ['วงเวียนหอพักชายที่ 16', $b],
                            ['ถนนหน้าปั๊มน้ำมันปตท.', $c],
                            ['ยูเทิร์นหน้าแฟลตจามจุรี', $d],
                            ['สี่แยกประตู 6', $e],
                            ['วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)', $f],
                            ['ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง', $g],
                            ['แยกคณะเภสัชศาสตร์', $h],
                            ['ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.', $i],
                            ['ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์', $j],
                            ['อื่นๆ', $k],
                    
                            
                            ";
                    ?>
                ]);

                var options = {
                
                pieHole: 0.4,
                fontName: 'Kanit',
                fontSize: 16,
                legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 16}, alignment: 'center'},
                chartArea:{left:20,top:0,width:'90%',height:'90%'}
                };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_6'));
        chart.draw(data, options);
    };