<?php
  $connect = mysqli_connect("localhost", "root", "", "project1");
  $connect->set_charset("utf8");
  $case = $_GET['case'];
  // $sql ="SELECT * from cases,car,sufferer where cases.case_id=$case and car.car_id=cases.case_id AND sufferer.suffer_id=";
  $sql ="SELECT * FROM cases,car,sufferer WHERE cases.case_id = $case AND car.case_case_id = $case AND sufferer.car_car_id = car.car_id";
  $query = mysqli_query($connect, $sql) or die ("error");

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index_officer.php">
                        <img src="../maptest/assets/img/kku2.png" style="height: 75px;">
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
                            <center><h2> สวัสดี, <br><?php echo $Namemm;?> </h2></center>
                        </li><hr>
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
                            <a href="map.html">
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
                <img src="../maptest/assets/img/kku2.png" style="height: 75px;">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li>
                            
                                <h3> สวัสดี, <br><?php echo $Namemm;?> </h3>
                        </li><hr>
                        <li>
                            <a class="js-arrow" href="index_officer.php">
                                <i class="fas fa-home"></i>หน้าแรก</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="fas fa-edit"></i>บันทึกข้อมูลอุบัติเหตุ</a>
                        </li>
                        <li class="active has-sub">
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
</div>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2><strong>รายละเอียดการเกิดอุบัติเหตุ</strong></h2>
                                    </div>
                                    <div class="card-body card-block" style="font-size:18px;">
                                        <form class="form-horizontal">
                                            <?php		while($result=mysqli_fetch_array($query,MYSQLI_BOTH))
                                        { ?>
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">วันที่เกิดอุบัติเหตุ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["date"]?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">เวลา : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["time"]?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ผลัด :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["duty"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">สถานที่เกิดอุบัติเหตุ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["places"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">สถานที่เกิดอุบัติเหตุ(อื่นๆ) :
                                                    </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["places_des"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        พิกัด
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ละติจูด : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["lat"];?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ลองติจูด : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["lng"];?>
                                                </div>
                                            </div>
                                            <hr>

                                            <h3>รายละเอียดรถที่เกิดอุบัติเหตุ</h3><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label"> จำนวนรถมอเตอร์ไซต์ที่เกิดอุบัติเหตุ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["num_motor"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">จำนวนรถยนต์ที่เกิดอุบัติเหตุ : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["num_car"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">จำนวนรถประเภทอื่น ๆ ที่เกิดอุบัติเหตุ :
                                                    </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["num_other"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ประเภทรถ : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["car_type"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ป้ายทะเบียน : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["car_reg"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">แบรนด์ : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["brand"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">รุ่น : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["series"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">สี : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["color"];?>
                                                </div>
                                            </div>
                                            <hr>

                                            <h3>รายละเอียดผู้ประสบอุบัติเหตุ</h3><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ประเภทผู้ประสบอุบัติเหตุ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["type_suff"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ชื่อ-สกุล :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["name_suff"];?>
                                                </div>
                                            </div>
                                            <hr>

                                            <h3>รายละเอียดสาเหตุ</h3><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">สาเหตุ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["cause"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">จำนวนผู้บาดเจ็บ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["injured"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">จำนวนผู้เสียชีวิต :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["deceased"];?>
                                                </div>
                                            </div>
                                            <hr>

                                            <h3>หมายเหตุ</h3><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">หมายเหตุเพิ่มเติม</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["note"];?>
                                                </div>
                                            </div>
                                            <hr>

                                            <h3>ผู้บันทึกข้อมูล</h3><br>   
                                            <div class="row form-group">
                                                <div class="col-lg-5">
                                                    <?php echo $result["recorder"];?>
                                                </div>
                                            </div>
                                          

                                            
                                    <div class="card-footer">
                                    
                                    <center><a href=javascript:history.back(1)><button type="button" class="btn btn-danger">
                                                <h5 style="color:white;">ย้อนกลับ</h5>
                                            </button></a></center>
                                    </div>
                                    <?php };
                                            ?>
                                         
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
     </body>     
   
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
   
    

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery-3.2.1.min.js"></script> -->
    <!-- Bootstrap JS-->
    <!-- <script src="vendor/bootstrap-4.1/popper.min.js"></script> -->
    <!-- <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script> -->
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <!-- <script src="vendor/counter-up/jquery.counterup.min.js">
    </script> -->
    <!-- <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script> -->
    <!-- <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"> -->
    <!-- </script> -->

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script>

        $(document).ready(function () {
            $('#employee_data').DataTable();
        });

        setInterval(function () {
            load_last_notification();


        }, 5000);

        function load_last_notification() {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                success: function (data) {
                    $('.content').html(data);
                }
            })
        }

    </script>
    <script>
        function printCase() {
            window.print();
        }   
    </script>


</html>
<!-- end document-->