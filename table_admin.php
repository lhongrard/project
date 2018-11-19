<?php
  $connect = mysqli_connect("localhost", "root", "", "project1");
  $connect->set_charset("utf8");
  $query ="SELECT * FROM member,role_type WHERE member.role_type_role_id=role_type.role_id";
  $result = mysqli_query($connect, $query) or die ("error");
  
  include 'member.php';
$Namemm = $_SESSION["name_mem"];
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
    <title>Accident KKU : ตารางข้อมูลสมาชิก</title>

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
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="vendor/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

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
                            <center><h2> สวัสดี, <br><?php echo $Namemm;?> </h2></center>
                        </li><hr>
                        <li>
                            <a class="js-arrow" href="index_admin.php">
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
                                <i class="fas fa-map-marker-alt"></i>แผนที่</a>
                        </li>
                        <li>
                            <a href="table_admin.php">
                                <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
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
                <a href="index_admin.php">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <h3> สวัสดี, <br><?php echo $Namemm;?> </h3>
                        </li><hr>
                        <li>
                            <a href="index_admin.php">
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
                            <div class="col col-lg-12">
                                <section class="card">
                                    <div class="card-body text-secondary">
                                        <div>
                                            <label>
                                                <h3><b>ตารางข้อมูลสมาชิก</b></h3>
                                            </label>
                                            <hr>
                                        </div>
                                        <div align="right">
                                        <a href="form_add_admin.php"><button type="button" class="btn btn-success"><i class="fa fa-plus">
                                            เพิ่มสมาชิก</i></button></a>
                                        </div><br>
                                        <div class="table-responsive">
                                            <table id="employee_data" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>

                                                        <td>
                                                            <center>ชื่อ - สกุล</center>
                                                        </td>
                                                        <td>
                                                            <center>ประเภทสมาชิก</center>
                                                        </td>
                                                        <td>
                                                            <center>ดูข้อมูล</center>
                                                        </td>
                                                        <td>
                                                            <center>แก้ไขข้อมูล</center>
                                                        </td>
                                                        <td>
                                                            <center>ลบข้อมูล</center>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <?php
                                        while($row = mysqli_fetch_array($result))
                                        {
                                          ?>
                                                <tr>

                                                    <td>
                                                        <center>
                                                            <?php echo $row['name_mem'];  ?>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php echo $row['role'];  ?>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center><a href="view_admin.php?user=<?php echo $row['username']; ?>"><button
                                                                    type="button" class="btn btn-info btn-sm"><i class="fa fa-search">
                                                                        ดูข้อมูล</i></button></a></center>
                                                    </td>
                                                    <td>
                                                        <center><a href="edit_admin.php?user=<?php echo $row['username']; ?>"><button
                                                                    type="button" class="btn btn-warning btn-sm"><i
                                                                        class="fa fa-pencil-square-o"> แก้ไขข้อมูล</i></button></a></center>
                                                    </td>
                                                    <td>
                                                        <form action="delete_admin.php" method="GET" onsubmit="return confirm('ยืนยันการลบข้อมูล')">
                                                            <input type="hidden" name="user" value="<?=$row['username']; ?>">
                                                            <center><button type="submit" class="btn-danger btn-sm"
                                                                    href="delete_admin.php"><i class="fa fa-minus-circle"> ลบข้อมูล</i></button></center>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <?php
                                        }
                                        ?>
                                            </table>
                                        </div>

                                    </div>
                                </section>
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
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="./vendor/datatable/dataTables.bootstrap4.min.js"></script>

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
</body>

</html>

<!-- end document-->