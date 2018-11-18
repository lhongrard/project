<?php

include 'connect.php';
$usern = $_GET['user'];
// $username = '"'.$usern.'"';
$stmt = $conn->prepare("SELECT * FROM member,role_type WHERE member.username=? ANd member.role_type_role_id =
role_type.role_id");
$stmt->bindParam(1,$usern);
$stmt->execute();
$caseData = $stmt->fetch();

// echo ($caseData);
// exit();
// exit();
// $connect = mysqli_connect("localhost", "root", "", "project1");
// $connect->set_charset("utf8");
// $usern = $_GET['user'];
// $username = '"'.$usern.'"';


// $sql ="SELECT * from cases,car,sufferer where cases.case_id=$case and car.car_id=cases.case_id AND
// sufferer.suffer_id=";
// $sql ="SELECT * FROM member,role_type WHERE member.username = $username ";
// $query = mysqli_query($connect, $sql) or die ("error");

// echo ($query);
// exit();

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
    <title>Accident KKU : แก้ไขข้อมูลสมาชิก</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" type='text/css'>
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


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

    <link href="./css/datepicker.css" rel="stylesheet">
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

                        <li>
                            <a href="table_admin.php">
                                <i class="fas fa-user"></i>จัดการข้อมูลสมาชิก</a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out"></i>ออกจากระบบ</a>
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
                                <i class="fa fa-edit"></i>บันทึกข้อมูลอุบัติเหตุ</a>
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
            </div>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>แบบฟอร์มกรอกรายละเอียดสมาชิก</h2>
                                </div>
                                <div class="card-body card-block" style="font-size:16px;">
                                    <form action="edit_admin_form.php"  method="post" class="form-horizontal">
                                

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B> ชื่อ - สกุล :</B></label>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                                    <input name="name" type="text" class="form-control" value="<?=$caseData['name_mem']; ?>" >
                                                </div>
                                                <span class="help-block-none" style="font-size:16px;">
                                                    ( ตัวอย่างเช่น : ฉลองราชย์ วานมนตรี )</span>

                                            </div>
                                        </div><br>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B> รหัสผู้ใช้งาน :</B></label>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                                    <input name="username" type="text" class="form-control" value="<?=$caseData['username']; ?>" readonly>
                                                </div>
                                                <span class="help-block-none" style="font-size:16px;">
                                                    *ตัวอักษรภาษาอังกฤษเท่านั้น <br> ( ตัวอย่างเช่น : accident1,
                                                    prasert99 )</span>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label"><B>รหัสผ่าน : </B></label>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                                    <input name="password" type="text" class="form-control" value="<?=$caseData['login_password']; ?>">
                                                </div>
                                                <span class="help-block-none" style="font-size:16px;">
                                                    *ตัวอักษรภาษาอังกฤษหรือตัวเลขเท่านั้น <br> ( ตัวอย่างเช่น :
                                                    mypassword123, 19101996 )</span>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>เบอร์ติดต่อ : </B></label>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                                    <input name="phone" type="text" class="form-control" value="<?=$caseData['phone']; ?>">
                                                </div>
                                                <span class="help-block-none" style="font-size:16px;">
                                                    ( ตัวอย่างเช่น : 0991234567 )</span>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">
                                                    <h4><B>ประเภทผู้ใช้งาน</B></h4>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <input type="radio" id="radio1" name="role" value="1" class="form-check-input"
                                                            checked="checked">
                                                        <label for="radio1" class="form-check-label ">
                                                            Admin (ผู้ดูแลระบบ)
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="radio2" name="role" value="2" class="form-check-input">
                                                        <label for="radio2" class="form-check-label ">
                                                            Manager (ผู้บริหาร)
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="radio3" name="role" value="3" class="form-check-input">
                                                        <label for="radio3" class="form-check-label ">
                                                            Officer (พนักงานทั่วไป)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                             

                                        <div class="card-footer">
                                            <center><button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-save"></i> <B>แก้ไขข้อมูล</B>
                                                </button>
                                            </center>
                                            <hr>
                                            <center><a href=javascript:history.back(1)><button type="button" class="btn btn-danger">
                                                <h5 style="color:white;">ย้อนกลับ</h5>
                                            </button></a></center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<script>
                                        // ดึงประเภทจาก db
                                        var value = '<?=$caseData["role_type_role_id"]; ?>';
                                       $("input[name=role][value=" + value + "]").attr('checked', 'checked');
                                        

</script>

</body>

</html>