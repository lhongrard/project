<?php
include 'connect.php';
// Table 1
// จำนวนการเกิดอุบัติเหตุทางจราจร
$result = $conn->query("SELECT * FROM cases");
$num_cnt = $result->rowCount();
// จำนวนบุคคล
$result2 = $conn->query("SELECT * FROM sufferer");
$num_cnt2 = $result2->rowCount();
// จำนวนรถ
$result3 = $conn->query("SELECT * FROM car");
$num_cnt3 = $result3->rowCount();
// จำนวนบาดเจ็บ
$result4 = $conn->query("SELECT SUM(injured) AS total FROM cases");
$row1 = $result4->fetch(PDO::FETCH_ASSOC);
// เสียชีวิต
$result5 = $conn->query("SELECT SUM(deceased) AS total FROM cases");
$row2 = $result5->fetch(PDO::FETCH_ASSOC);
// Table 1 END //

// Chart1
/*
$chart1_e = $conn->query("SELECT duty FROM cases WHERE duty='ดึก'");
$num_crt1_e = $chart1_e->rowCount();
$chart1_m = $conn->query("SELECT duty FROM cases WHERE duty='เช้า'");
$num_crt1_m = $chart1_m->rowCount();
$chart1_n = $conn->query("SELECT duty FROM cases WHERE duty='บ่าย'");
$num_crt1_n = $chart1_n->rowCount();
*/
// Chart1 END //




include 'member.php';
$Namemm = $_SESSION["name_mem"];
$role_type = $_SESSION["role_type"];

include './query_cause.php';

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

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



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
                        <li>
                            <center>
                                <h2> สวัสดี, <br>
                                    <?php echo $Namemm;?>
                                </h2>
                            </center>
                        </li>
                        <hr>
                        <li>
                            <a class="js-arrow" href="index_officer.php">
                                <i class="fas fa-home"></i>หน้าแรก</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="fa fa-edit"></i>บันทึกข้อมูลอุบัติเหตุ</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>ดูข้อมูล</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>แผนที่แสดงจุดเกิดอุบัติเหตุ</a>
                        </li>
                        <li>
                            <a href="mapShow.php">
                                <i class="fas fa-map-pin"></i></i>แผนที่แสดงจุดเสี่ยงเกิดอุบัติเหตุ</a>
                        </li>
                        <li>
                            <?php
                            if($role_type == '1'){

                                echo '<li>
                                <a href="table_admin.php">
                                    <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
                            </li>';
                            }
                        ?>
                        </li>
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

                            <h2> สวัสดี, <br>
                                <h3>
                                    <?php echo $Namemm;?>
                                </h3>
                            </h2>
                        </li>
                        <hr>
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
                                <i class="fas fa-map-marker-alt"></i>แผนที่แสดงจุดเกิดอุบัติเหตุ</a>
                        </li>
                        <li>
                            <a href="mapShow.php">
                                <i class="fas fa-map-pin"></i></i>แผนที่แสดงจุดเสี่ยงเกิดอุบัติเหตุ</a>
                        </li>
                        <hr>
                        <?php 
                            if($role_type == '1'){

                                echo '<li>
                                <a href="table_admin.php">
                                    <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
                            </li>';
                            }
                        ?>
                        <hr>
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
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">ภาพรวม</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                        <div class="col-md-12">
                                <h2 class="text-center">สถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น
                                    ข้อมูลประจำเดือนมกราคม - ธันวาคม พ.ศ. 2560</h2><br>
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
                                                <td class="text-center">
                                                    <?php echo $num_cnt ?> ครั้ง</td>
                                                <td class="text-center">
                                                    <?php echo $num_cnt2 ?> คน</td>
                                                <td class="text-center">
                                                    <?php echo $num_cnt3 ?> คัน</td>
                                                <td class="text-center">
                                                    <?php echo $row1['total']; ?> ราย</td>
                                                <td class="text-center">
                                                    <?php echo $row2['total']; ?> ราย</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="text-center">กราฟสถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น แบ่งตามช่วงเวลา</h3><br>
                                       <div id="piechart_1" style="height: 370px; width: 100%;"></div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                    <h3 class="text-center">กราฟเปอร์เซนต์เปรียบเทียบสถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น ประเภทบุคคล</h3><br>
                                        <div id="piechart_2" style="height: 370px; width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                        <h3 class="text-center">กราฟเปอร์เซ็นต์เปรียบเทียบสถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น ประเภทยานพาหนะ</h3><br>
                                            <div id="piechart_3" style="height: 370px; width: 100%;"></div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                        <h3 class="text-center">กราฟเปอร์เซ็นต์เปรียบเทียบสถิติอุบัติเหตุทางจราจร ภายในพื้นที่มหาวิทยาลัยขอนแก่น ประเภทความเสียหาย</h3><br>
                                            <div id="piechart_4" style="height: 370px; width: 100%;"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h2 class="text-center">สถิติสาเหตุการเกิดอุบัติเหตุมากที่สุด ภายในพื้นที่มหาวิทยาลัยขอนแก่น</h2><br>
                                <div class="col-lg-6">
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                
                                                    <th class="text-center">สาเหตุที่เกิดอุบัติเหตุ</th>
                                                    <th class="text-center">รวม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        ขับรถเสียหลักเอง หรือล้มเอง</td>
                                                    <td class="text-center">
                                                        <?php echo $a ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์)</td>
                                                    <td class="text-center">
                                                        <?php echo $b ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถยนต์)</td>
                                                    <td class="text-center">
                                                        <?php echo $c ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        ขับรถชนฟุตบาท เสาไฟฟ้า ป้ายจราจรหรือสิ่งกีดขวาง</td>
                                                    <td class="text-center">
                                                        <?php echo $d ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        ขับรถชนกันหรือชนท้าย (ระหว่างรถจักรยานยนต์ - รถจักรยานยนต์)</td>
                                                    <td class="text-center">
                                                        <?php echo $e ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        แซงหรือตัดหน้าระยะกระชั้นชิด โดยไม่ให้สัญญาณ</td>
                                                    <td class="text-center">
                                                        <?php echo $f ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        เมาสุรา เสพสารออกฤทธิ์ต่อประสาทหรือหลับใน</td>
                                                    <td class="text-center">
                                                        <?php echo $g ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถไม่ชำนาญเส้นทาง</td>
                                                    <td class="text-center">
                                                        <?php echo $h ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        อุปกรณ์ชำรุด เครื่องขัดข้อง</td>
                                                    <td class="text-center">
                                                        <?php echo $i ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์พ่วง)</td>
                                                    <td class="text-center">
                                                        <?php echo $j ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์โดยสาร - รถยนต์)</td>
                                                    <td class="text-center">
                                                        <?php echo $k ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        เจ็บป่วยกะทันหันขณะขับขี่</td>
                                                    <td class="text-center">
                                                        <?php echo $l ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถชนกันหรือชนท้าย (ระหว่างรถบรรทุก - รถจักรยานยนต์)</td>
                                                    <td class="text-center">
                                                        <?php echo $m ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถด้วยความเร็ว หรือประมาท</td>
                                                    <td class="text-center">
                                                        <?php echo $n ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ขับรถฝ่าฝืนเครื่องหมาย/สัญญาณจราจร</td>
                                                    <td class="text-center">
                                                        <?php echo $o ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        คนหรือสัตว์ วิ่งตัดหน้า กะทันหัน</td>
                                                    <td class="text-center">
                                                        <?php echo $p ?> ครั้ง</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        อื่นๆ</td>
                                                    <td class="text-center">
                                                        <?php echo $q ?> ครั้ง</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                </div>
                            
                            <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                        <h3 class="text-center">กราฟสถิติสาเหตุการเกิดอุบัติเหตุมากที่สุด ภายในพื้นที่มหาวิทยาลัยขอนแก่น </h3><br>
                                            <div id="piechart_5" style="height: 370px; width: 100%;"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <hr>

                    
                           
                            


                        
                            <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                        <h3 class="text-center">กราฟสรุปสถานที่เกิดอุบัติเหตุ ภายในพื้นที่มหาวิทยาลัยขอนแก่น</h3><br>
                                            <div id="piechart_6" style="height: 370px; width: 100%;"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <hr>











                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top countries</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td class="text-right">$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td class="text-right">$46,399.22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turkey</td>
                                                        <td class="text-right">$35,364.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td class="text-right">$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td class="text-right">$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$5,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Italy</td>
                                                        <td class="text-right">$1639.32</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <!-- Chart Script -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Chart Script END -->

    <!-- chart -->
    <script src="./chart1.php"></script>
    <script src="./chart2.php"></script>
    <script src="./chart1_1.php"></script>
    <script src="./chart2_1.php"></script>
    <script src="./chart3_1.php"></script>
    <script src="./chart4_1.php"></script>
    <script src="./chart5_1.php"></script>
    <script src="./chart6_1.php"></script>








    <!-- <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', ''],
                    <?php
                      //  echo "['เช้า (08.00 - 16.00 น.)', $num_crt1_m],
                         //   ['บ่าย (16.00 - 24.00 น.)', $num_crt1_n],
                           // ['ดึก (24.00 - 08.00 น.)', $num_crt1_e]";
                    ?>
                ]);

                var options = {
                  title: 'แบ่งตามช่วงเวลา',
                 
                is3D: true,
                fontName: 'Kanit',
                fontSize: 16,
                legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 16}}
                };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_1'));
        chart.draw(data, options);
    };
    </script> -->

</body>

</html>
<!-- end document-->