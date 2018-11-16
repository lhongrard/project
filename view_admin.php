<?php
  $connect = mysqli_connect("localhost", "root", "", "project1");
  $connect->set_charset("utf8");
  $usern = $_GET['user'];
  $username = '"'.$usern.'"';
//   echo $username;
//   exit();

  // $sql ="SELECT * from cases,car,sufferer where cases.case_id=$case and car.car_id=cases.case_id AND sufferer.suffer_id=";
  $sql ="SELECT * FROM member,role_type WHERE member.username = $username AND role_type.role_id=member.role_type_role_id  ";
  $query = mysqli_query($connect, $sql) or die ("error");

  ?>


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
                        <li>
                            <a href="#">
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
                        </li>
                        <hr>
                        <li class="active has-sub">
                            <a href="table_admin.php">
                                <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
                        </li>
                        <hr>
                        <li>
                            <a href="#">
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2><strong>รายละเอียดสมาชิก</strong></h2>
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="form-horizontal">
                                            <?php		while($result=mysqli_fetch_array($query,MYSQLI_BOTH))
                                        { ?>
                                        <font size="4px">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label"> รหัสผู้ใช้งาน :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["username"]?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">รหัสผ่านผู้ใช้ : </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["login_password"]?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label"> ชื่อ - สกุล :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["name_mem"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">เบอร์ติดต่อ :</label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["phone"];?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">ประเภทผู้ใช้งาน :
                                                    </label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <?php echo $result["role"];?>
                                                </div>
                                            </div>
                                            

                                    <?php };
                            ?>
                                    </form></br>
                                    <hr>
                                    <center><a href=javascript:history.back(1)><button type="button" class="btn btn-primary">
                                                <h5>กลับ</h5>
                                            </button></a></center>
                                </font>
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