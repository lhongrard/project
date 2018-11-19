<?php
include 'connect.php';
$result = $conn->query("SELECT * FROM cases");
$num_cnt = $result->rowCount();

$result2 = $conn->query("SELECT * FROM sufferer");
$num_cnt2 = $result2->rowCount();

$result3 = $conn->query("SELECT * FROM car");
$num_cnt3 = $result3->rowCount();

$result4 = $conn->query("SELECT SUM(injured) AS total FROM cases");
$row1 = $result4->fetch(PDO::FETCH_ASSOC);


$result5 = $conn->query("SELECT SUM(deceased) AS total FROM cases");
$row2 = $result5->fetch(PDO::FETCH_ASSOC);



include 'member.php';
$Namemm = $_SESSION["name_mem"];
$role_type = $_SESSION["role_type"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Accident KKU</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index_officer.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index_officer.php">
                                <i class="fas fa-home"></i>หน้าแรก</a>
                        <li>
                            <a href="form.php">
                                <i class="fa fa-edit"></i>บันทึกข้อมูลอุบัติเหตุ</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>ดูข้อมูล</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>แผนที่</a>
                        </li>
                        <?php
                            if($role_type == '1'){

                                echo '<li>
                                <a href="table_admin.php">
                                    <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
                            </li>';
                            }
                        ?>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-lock"></i>ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index_officer.php">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            
                                <h2> สวัสดี, <br> <h3><?php echo $Namemm;?></h3> </h2>
                        </li><hr>
                        <li class="active has-sub">
                            <a class="js-arrow" href="index_officer.php">
                                <i class="fas fa-home"></i>หน้าแรก</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="fas fa-edit"></i>บันทึกข้อมูลอุบัติเหตุ</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>ดูข้อมูล</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>แผนที่</a>
                        </li><hr>
                        <?php
                            if($role_type == '1'){

                                echo '<li>
                                <a href="table_admin.php">
                                    <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
                            </li>';
                            }
                        ?><hr>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-lock"></i>ออกจากระบบ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop"></header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2>ภาพรวม</h2>
                                </div><br>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <h2 class="text-center">สถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น ข้อมูลประจำเดือนมกราคม - ธันวาคม พ.ศ. 2560</h2><br>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">จำนวนการเกิดอุบัติเหตุทางจราจร</th>
                                                <th class="text-center">จำนวนบุคคล</th>
                                                <th class="text-center">จำนวนรถ</th>
                                                <th class="text-center">จำนวนบาดเจ็บ</th>
                                                <th class="text-center">เสียชีวิต</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><?php echo $num_cnt ?> ครั้ง</td>
                                                <td class="text-center"><?php echo $num_cnt2 ?> คน</td>
                                                <td class="text-center"><?php echo $num_cnt3 ?> คัน</td>
                                                <td class="text-center"><?php echo $row1['total']; ?> ราย</td>
                                                <td class="text-center"><?php echo $row2['total']; ?> ราย</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>



                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- Main JS-->
    <script src="js/main.js"></script>

    
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
    window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
		title:{
			text: "สถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น ข้อมูลประจำเดือนมกราคม - ธันวาคม พ.ศ. 2560"              
		},
        subtitles: [{
		text: "Currency Used: Thai Baht (฿)"
	    }],
		
		data: [              
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "pie",
            showInLegend: "true",
      
			dataPoints: [
				{ label: "apple",  y: 10  },
				{ label: "orange", y: 15  },
				{ label: "banana", y: 25  },
				{ label: "mango",  y: 30  },
				{ label: "grape",  y: 28  }
			]
		}
		]
	});
	chart.render();
}
    </script>


    <!-- chart1 -->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
         
         <?php
        //  $row=$test1->fetch_assoc();
        //  echo "['".$row[]]"
         
         ?>
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

</body>

</html>
<!-- end document-->
