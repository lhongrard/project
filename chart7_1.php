<?php
include 'connect.php';

$aa = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-01-00' AND '2018-01-31'");
$a = $aa->rowCount();
$bb = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-02-00' AND '2018-02-31'");
$b = $bb->rowCount();
$cc = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-03-00' AND '2018-03-31'");
$c = $cc->rowCount();
$dd = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-04-00' AND '2018-04-31'");
$d = $dd->rowCount();
$ee = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-05-00' AND '2018-05-31'");
$e = $ee->rowCount();
$ff = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-06-00' AND '2018-06-31'");
$f = $ff->rowCount();
$gg = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-07-00' AND '2018-07-31'");
$g = $gg->rowCount();
$hh = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-08-00' AND '2018-08-31'");
$h = $hh->rowCount();
$ii = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-09-00' AND '2018-09-31'");
$i = $ii->rowCount();
$jj = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-10-00' AND '2018-10-31'");
$j = $jj->rowCount();
$kk = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-11-00' AND '2018-11-31'");
$k = $kk->rowCount();
$ll = $conn->query(" SELECT * FROM cases WHERE cases.date BETWEEN '2018-12-00' AND '2018-12-31'");
$l = $ll->rowCount();

$aa2 = $conn->query("SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-01-00' AND '2018-01-31'");
$a2 = $aa2->rowCount();
$bb2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-02-00' AND '2018-02-31'");
$b2 = $bb2->rowCount();
$cc2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-03-00' AND '2018-03-31'");
$c2 = $cc2->rowCount();
$dd2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-04-00' AND '2018-04-31'");
$d2 = $dd2->rowCount();
$ee2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-05-00' AND '2018-05-31'");
$e2 = $ee2->rowCount();
$ff2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-06-00' AND '2018-06-31'");
$f2 = $ff2->rowCount();
$gg2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-07-00' AND '2018-07-31'");
$g2 = $gg2->rowCount();
$hh2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-08-00' AND '2018-08-31'");
$h2 = $hh2->rowCount();
$ii2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-09-00' AND '2018-09-31'");
$i2 = $ii2->rowCount();
$jj2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-10-00' AND '2018-10-31'");
$j2 = $jj2->rowCount();
$kk2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-11-00' AND '2018-11-31'");
$k2 = $kk2->rowCount();
$ll2 = $conn->query(" SELECT * FROM `sufferer`,`car`,`cases` WHERE sufferer.car_car_id = car.car_id AND car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-12-00' AND '2018-12-31'");
$l2 = $ll2->rowCount();

$aa3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-01-00' AND '2018-01-31'");
$a3 = $aa3->rowCount();
$bb3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-02-00' AND '2018-02-31'");
$b3 = $bb3->rowCount();
$cc3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-03-00' AND '2018-03-31'");
$c3 = $cc3->rowCount();
$dd3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-04-00' AND '2018-04-31'");
$d3 = $dd3->rowCount();
$ee3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-05-00' AND '2018-05-31'");
$e3 = $ee3->rowCount();
$ff3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-06-00' AND '2018-06-31'");
$f3 = $ff3->rowCount();
$gg3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-07-00' AND '2018-07-31'");
$g3 = $gg3->rowCount();
$hh3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-08-00' AND '2018-08-31'");
$h3 = $hh3->rowCount();
$ii3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-09-00' AND '2018-09-31'");
$i3 = $ii3->rowCount();
$jj3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-10-00' AND '2018-10-31'");
$j3 = $jj3->rowCount();
$kk3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-11-00' AND '2018-11-31'");
$k3 = $kk3->rowCount();
$ll3 = $conn->query("SELECT * FROM `car`,`cases` WHERE car.case_case_id=cases.case_id AND cases.date BETWEEN '2018-12-00' AND '2018-12-31'");
$l3 = $ll3->rowCount();

$aa4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-01-00' AND '2018-01-31'");
$a4 = $aa4->fetch(PDO::FETCH_ASSOC);
$a444 = $a4['total'];
$bb4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-02-00' AND '2018-02-31'");
$b4 = $bb4->fetch(PDO::FETCH_ASSOC);
$b444 = $b4['total'];
$cc4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-03-00' AND '2018-03-31'");
$c4 = $cc4->fetch(PDO::FETCH_ASSOC);
$c444 = $c4['total'];
$dd4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-04-00' AND '2018-04-31'");
$d4 = $dd4->fetch(PDO::FETCH_ASSOC);
$d444 = $d4['total'];
$ee4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-05-00' AND '2018-05-31'");
$e4 = $ee4->fetch(PDO::FETCH_ASSOC);
$e444 = $e4['total'];
$ff4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-06-00' AND '2018-06-31'");
$f4 = $ff4->fetch(PDO::FETCH_ASSOC);
$f444 = $f4['total'];
$gg4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-07-00' AND '2018-07-31'");
$g4 = $gg4->fetch(PDO::FETCH_ASSOC);
$g444 = $g4['total'];
$hh4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-08-00' AND '2018-08-31'");
$h4 = $hh4->fetch(PDO::FETCH_ASSOC);
$h444 = $h4['total'];
$ii4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-09-00' AND '2018-09-31'");
$i4 = $ii4->fetch(PDO::FETCH_ASSOC);
$i444 = $i4['total'];
$jj4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-10-00' AND '2018-10-31'");
$j4 = $jj4->fetch(PDO::FETCH_ASSOC);
$j444 = $j4['total'];
$kk4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-11-00' AND '2018-11-31'");
$k4 = $kk4->fetch(PDO::FETCH_ASSOC);
$k444 = $k4['total'];
$ll4 = $conn->query("SELECT SUM(injured) AS total FROM cases WHERE cases.date BETWEEN '2018-12-00' AND '2018-12-31'");
$l4 = $ll4->fetch(PDO::FETCH_ASSOC);
$l444 = $l4['total'];


$aa5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-01-00' AND '2018-01-31'");
$a5 = $aa5->fetch(PDO::FETCH_ASSOC);
$a555 = $a5['total'];
$bb5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-02-00' AND '2018-02-31'");
$b5 = $bb5->fetch(PDO::FETCH_ASSOC);
$b555 = $b5['total'];
$cc5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-03-00' AND '2018-03-31'");
$c5 = $cc5->fetch(PDO::FETCH_ASSOC);
$c555 = $c5['total'];
$dd5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-04-00' AND '2018-04-31'");
$d5 = $dd5->fetch(PDO::FETCH_ASSOC);
$d555 = $d5['total'];
$ee5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-05-00' AND '2018-05-31'");
$e5 = $ee5->fetch(PDO::FETCH_ASSOC);
$e555 = $e5['total'];
$ff5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-06-00' AND '2018-06-31'");
$f5 = $ff5->fetch(PDO::FETCH_ASSOC);
$f555 = $f5['total'];
$gg5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-07-00' AND '2018-07-31'");
$g5 = $gg5->fetch(PDO::FETCH_ASSOC);
$g555 = $g5['total'];
$hh5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-08-00' AND '2018-08-31'");
$h5 = $hh5->fetch(PDO::FETCH_ASSOC);
$h555 = $h5['total'];
$ii5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-09-00' AND '2018-09-31'");
$i5 = $ii5->fetch(PDO::FETCH_ASSOC);
$i555 = $i5['total'];
$jj5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-10-00' AND '2018-10-31'");
$j5 = $jj5->fetch(PDO::FETCH_ASSOC);
$j555 = $j5['total'];
$kk5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-11-00' AND '2018-11-31'");
$k5 = $kk5->fetch(PDO::FETCH_ASSOC);
$k555 = $k5['total'];
$ll5 = $conn->query("SELECT SUM(deceased) AS total FROM cases WHERE cases.date BETWEEN '2018-12-00' AND '2018-12-31'");
$l5 = $ll5->fetch(PDO::FETCH_ASSOC);
$l555 = $l5['total'];
?>

 google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['เดือน', 'จำนวนอุบัติเหตุ(ครั้ง) ','บุคคล(คน) ', 'รถ(คัน) ', 'บาดเจ็บ(คน) ', 'เสียชีวิต(คน) '],
                    <?php
                        echo "
                            ['มกราคม', $a, $a2, $a3, $a444, $a555],
                            ['กุมภาพันธ์', $b, $b2, $b3, $b444, $b555],
                            ['มีนาคม', $c, $c2, $c3, $c444, $c555],
                            ['เมษายน', $d, $d2, $d3, $d444, $d555],
                            ['พฤษภาคม', $e, $e2, $e3, $e444, $e555],
                            ['มิถุนายน', $f, $f2, $f3, $f444, $f555],
                            ['กรกฎาคม', $g, $g2, $g3, $g444, $g555],
                            ['สิงหาคม', $h, $h2, $h3, $h444, $h555],
                            ['กันยายน', $i, $i2, $i3, $i444, $i555],
                            ['ตุลาคม', $j, $j2, $j3, $j444, $j555],
                            ['พฤศจิกายน', $k, $k2, $k3, $k444, $k555],
                            ['ธันวาคม', $l, $l2, $l3, $l444, $l555]
                    
                            
                            ";
                    ?>
                ]);

                var options = {
                hAxis: {title: 'เดือน'},
                fontName: 'Kanit',
                fontSize: 16,
                };
            var chart = new google.visualization.ColumnChart(document.getElementById('piechart_7'));
        chart.draw(data, options);
    };