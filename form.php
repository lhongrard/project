<?php
date_default_timezone_set('Asia/Bangkok'); //เปลี่ยนเวลาให้เป็นเวลาประเทศไทย

include 'member.php';
$Namemm = $_SESSION["name_mem"];
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
    <title>Accident KKU : บันทึกข้อมูล</title>

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
                                <i class="fas fa-map-marker-alt"></i>แผนที่</a>
                        </li>
                        <li>
                            <a href="logout.php">
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
                            <h3> สวัสดี, <br><?php echo $Namemm;?> </h3>
                        </li><hr>
                        <li>
                            <a class="js-arrow" href="index_officer.php">
                                <i class="fas fa-home"></i>หน้าแรก</a>
                        </li>
                        <li class="active has-sub">
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
                        </li><hr>
                        <li>
                            <a href="logout.php">
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
                                    <h2>แบบบักทึกข้อมูล</h2>
                                </div>
                                <div class="card-body card-block">
                                    <form action="insert_form.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <!-- วัน/เวลา/ผลัด -->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>วัน เดือน ปี</B></label>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-calendar" id="basic-addon1"></i></span>
                                                    </div>
                                                    <input id="date1" type="text" class="form-control" data-provide="datepicker"
                                                        data-date-language="th-th" placeholder="คลิ๊กเพื่อระบุวันที่" aria-describedby="basic-addon1" autocomplete="off" required>
                                                    <input id="date" name="date" type="hidden" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label"><B>เวลา</B></label>
                                            </div>
                                            <div class="col-lg-2 row text-center">
                                                <div class="col-md-6">
                                                    <select id="hr" class="form-control"></select>
                                                    นาฬิกา
                                                </div>
                                                <div class="col-md-6">
                                                    <select id="min" class="form-control"></select>
                                                    นาที
                                                </div>
                                                <input id="time" name="time" type="hidden">
                                            </div>
                                        </div>
                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>ผลัด</B></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                    <input type="radio" id="radio1" name="duty" value="เช้า"
                                                                class="form-check-input" checked="checked">
                                                        <label for="radio1" class="form-check-label ">
                                                             เช้า
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                    <input type="radio" id="radio2" name="duty" value="บ่าย"
                                                                class="form-check-input" >
                                                        <label for="radio2" class="form-check-label ">
                                                             บ่าย
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                    <input type="radio" id="radio3" name="duty" value="ดึก"
                                                                class="form-check-input">
                                                        <label for="radio3" class="form-check-label ">
                                                             ดึก
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- วัน/เวลา/ผลัด -->

                                        <!-- สถานที่เกิดอุบัติเหตุ -->
                                        <hr>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>สถานที่เกิดอุบัติเหตุ</B></label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="select_places" id="drop" class="form-control" required>
                                                    <option value=""> ===โปรดเลือก=== </option>
                                                    <option value="วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์">วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                                    <option value="วงเวียนหอพักชายที่ 16">วงเวียนหอพักชายที่ 16 </option>
                                                    <option value="ถนนหน้าปั๊มน้ำมันปตท.">ถนนหน้าปั๊มน้ำมันปตท.</option>
                                                    <option value="ยูเทิร์นหน้าแฟลตจามจุรี">ยูเทิร์นหน้าแฟลตจามจุรี</option>
                                                    <option value="สี่แยกประตู 6">สี่แยกประตู 6</option>
                                                    <option value="วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)">วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)</option>
                                                    <option value="ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง">ถนนมอดินแดง
                                                        ด้านหน้าหอพัก 8 หลัง</option>
                                                    <option value="แยกคณะเภสัชศาสตร์">แยกคณะเภสัชศาสตร์</option>
                                                    <option value="ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.">ถนนมอดินแดง
                                                        แยกไฟแดง สนง.รปภ.มข.</option>
                                                    <option value="ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์">ถนนสหศาสตร์
                                                        ด้านหน้าคณะสถาปัตยกรรมศาสตร์</option>
                                                    <option value="อื่นๆ">อื่นๆ (โปรดระบุ)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group" id="otherplaces"  style="display:none">
                                            <div class="col col-md-3"></div>
                                            <div class="col-md-3">
                                                <label for="otherplaces_des" class="form-check-label "> โปรดระบุสถานที่เกิดอุบัติเหตุ       </label>
                                                <input type="text" id="otherplaces_des" name="otherplaces_des" class="form-control">
                                            </div>
                                        </div>
                                        <!-- แผนที่ -->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label"><B>พิกัด</B></label>
                                            </div>
                                            <div class="col-lg-2">
                                                <input id="case_location_lat" name="case_location_lat" type="text"
                                                    class="form-control" readonly required>
                                                <span class="help-block-none">ละติจูด (lat)</span>
                                            </div>
                                            <div class="col-lg-2">
                                                <input id="case_location_lng" name="case_location_lng" type="text"
                                                    class="form-control" readonly required>
                                                <span class="help-block-none">ลองติจูด (long)</span>
                                            </div>
                                        </div>
                                        <div id="mapd" style="display:none">
                                            <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                                <div class="col-12 col-md-9">
                                                    <p id="btnlocaSetCenter" onclick="setCenter(this.id,case_location_lat.id,case_location_lng.id,'map')"
                                                        class="btn btn-info">ค้นหาตำแหน่ง</p><br><br>

                                                    <div id="map"></div>
                                                    <style>#map{
                                                            height: 400px;
                                                            }</style>
                                                    <span class="help-block-none" style="font-size:16px;">*
                                                        เลื่อนจุดมาร์คเพื่อปรับตำแหน่ง</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- สถานที่เกิดอุบัติเหตุ -->

                                        <!-- รายละเอียดรถ -->
                                        <hr>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="password-input" class=" form-control-label">
                                                    <h3>รายละเอียดรถที่เกิดเหตุ</h3>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><b>จำนวนรถจักรยานยนต์ที่เกิดอุบัติเหตุ</b></label>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="num_motor" class="form-control">
                                                <span class="help-block-none">* ถ้าไม่มีใส่เครื่องหมาย (-)</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>จำนวนรถยนต์ที่เกิดอุบัติเหตุ</B></label>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="nub_car" class="form-control">
                                                <span class="help-block-none">* ถ้าไม่มีใส่เครื่องหมาย (-)</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>จำนวนรถประเภทอื่น
                                                        ๆ ที่เกิดอุบัติเหตุ</B></label>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="num_other" class="form-control">
                                                <span class="help-block-none">* ถ้าไม่มีใส่เครื่องหมาย (-)</span>
                                            </div>
                                        </div> -->
                                        <div id="car">
                                            <div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label class=" form-control-label"><B>รายละเอียดรถที่เกิดเหตุ</B></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="car_type">ประเภท</label>
                                                        <select class="form-control" id="car_type" name="car[0][car_type]">
                                                            <option value="รถยนต์">รถยนต์</option>
                                                            <option value="รถจักรยานยนต์">รถจักรยานยนต์</option>
                                                            <option value="รถอื่นๆ">รถอื่นๆ</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>ป้ายทะเบียน</label>
                                                        <input type="text" name="car[0][car_reg]"
                                                            class="form-control" autocomplete="off" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>แบรนด์</label>
                                                        <input type="text" name="car[0][brand]"
                                                            class="form-control" id="brand_auto" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-md-3">
                                                        <label>รุ่น</label>
                                                        <input type="text" name="car[0][series]"
                                                            class="form-control" id="series_auto" autocomplete="off" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>สี</label>
                                                        <input type="text" name="car[0][color]"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="suff">
                                                    <div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label class=" form-control-label"><B>รายละเอียดผู้ประสบอุบัติเหตุ</B></label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="car_type">ชื่อ-สกุล</label>
                                                                <input type="text" name="car[0][suff][0][name_suff]"
                                                                    class="form-control" autocomplete="off" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>คณะ/หน่วยงาน/บุคคลภายนอก</label>
                                                                <select class="form-control" name="car[0][suff][0][type_suff]">
                                                                    <option value="บุคลากร">- บุคลากร</option>
                                                                    <option value="บุคคลภายนอก">- บุคคลภายนอก</option>
                                                                    <optgroup label="นักศึกษา">
                                                                        <option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
                                                                        <option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
                                                                        <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                                                                        <option value="คณะบริหารธุรกิจและการบัญชี">คณะบริหารธุรกิจและการบัญชี</option>
                                                                        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                                                                        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                                                        <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                                                                        <option value="คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์">คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</option>
                                                                        <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                                                                        <option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                                                                        <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
                                                                        <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                                                                        <option value="คณะสถาปัตยกรรมศาสตร์">คณะสถาปัตยกรรมศาสตร์</option>
                                                                        <option value="คณะสังคมศาสตร์บูรณาการ">คณะสังคมศาสตร์บูรณาการ</option>
                                                                        <option value="คณะสัตวแพทยศาสตร์">คณะสัตวแพทยศาสตร์</option>
                                                                        <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
                                                                        <option value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์</option>
                                                                        <option value="คณะเทคนิคการแพทย์">คณะเทคนิคการแพทย์</option>
                                                                        <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
                                                                        <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                                                                        <option value="คณะเศรษฐศาสตร์">คณะเศรษฐศาสตร์</option>
                                                                        <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                                                                        <option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
                                                                        <option value="วิทยาลัยการปกครองท้องถิ่น">วิทยาลัยการปกครองท้องถิ่น</option>
                                                                        <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
                                                                        <option value="วิทยาลัยบัณฑิตศึกษาการจัดการ">วิทยาลัยบัณฑิตศึกษาการจัดการ</option>
                                                                        <option value="วิทยาเขตหนองคาย">วิทยาเขตหนองคาย</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success" data-attr="0" type="button" onclick="add_suff(this)"><i
                                                        class="fa fa-plus"></i>
                                                    เพิ่มผู้ประสบเหตุ</button>
                                            </div>
                                        </div><br>
                                        <!-- 
                                        <div>
                                            
                                        </div> -->
                                        <div align="center">
                                            <button class="btn btn-info" type="button" id="add_car"><i class="fa fa-plus"></i>
                                                เพิ่มข้อมูล</button>
                                        </div>
                                        <hr>


                                        <!-- สาเหตุ -->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>สาเหตุ</B></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="cause" id="drop2" class="form-control">
                                                    <option value="ขับรถเสียหลักเอง หรือล้มเอง">ขับรถเสียหลักเอง
                                                        หรือล้มเอง </option>
                                                    <option value="ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์)">ขับรถชนกันหรือชนท้าย
                                                        (ระหว่างรถยนต์ - รถจักรยานยนต์)</option>
                                                    <option value="ับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถยนต์)">ขับรถชนกันหรือชนท้าย
                                                        (ระหว่างรถยนต์ - รถยนต์)</option>
                                                    <option value="ขับรถชนฟุตบาท เสาไฟฟ้า ป้ายจราจรหรือสิ่งกีดขวาง">ขับรถชนฟุตบาท
                                                        เสาไฟฟ้า ป้ายจราจรหรือสิ่งกีดขวาง</option>
                                                    <option value="ขับรถชนกันหรือชนท้าย (ระหว่างรถจักรยานยนต์ - รถจักรยานยนต์)">ขับรถชนกันหรือชนท้าย
                                                        (ระหว่างรถจักรยานยนต์ - รถจักรยานยนต์)</option>
                                                    <option value="แซงหรือตัดหน้าระยะกระชั้นชิด โดยไม่ให้สัญญาณ">แซงหรือตัดหน้าระยะกระชั้นชิด
                                                        โดยไม่ให้สัญญาณ</option>
                                                    <option value="เมาสุรา เสพสารออกฤทธิ์ต่อประสาทหรือหลับใน">เมาสุรา
                                                        เสพสารออกฤทธิ์ต่อประสาทหรือหลับใน</option>
                                                    <option value="ขับรถไม่ชำนาญเส้นทาง">ขับรถไม่ชำนาญเส้นทาง</option>
                                                    <option value="อุปกรณ์ชำรุด เครื่องขัดข้อง">อุปกรณ์ชำรุด
                                                        เครื่องขัดข้อง</option>
                                                    <option value="ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์พ่วง)">ขับรถชนกันหรือชนท้าย
                                                        (ระหว่างรถยนต์ - รถจักรยานยนต์พ่วง)</option>
                                                    <option value="ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์โดยสาร - รถยนต์)">ขับรถชนกันหรือชนท้าย
                                                        (ระหว่างรถยนต์โดยสาร - รถยนต์)</option>
                                                    <option value="เจ็บป่วยกะทันหันขณะขับขี่">เจ็บป่วยกะทันหันขณะขับขี่</option>
                                                    <option value="ขับรถชนกันหรือชนท้าย (ระหว่างรถบรรทุก - รถจักรยานยนต์)">ขับรถชนกันหรือชนท้าย
                                                        (ระหว่างรถบรรทุก - รถจักรยานยนต์)</option>
                                                    <option value="ขับรถด้วยความเร็ว หรือประมาท">ขับรถด้วยความเร็ว
                                                        หรือประมาท</option>
                                                    <option value="ขับรถฝ่าฝืนเครื่องหมาย/สัญญาณจราจร">ขับรถฝ่าฝืนเครื่องหมาย/สัญญาณจราจร</option>
                                                    <option value="คนหรือสัตว์ วิ่งตัดหน้า กะทันหัน">คนหรือสัตว์
                                                        วิ่งตัดหน้า กะทันหัน</option>
                                                    <option value="อื่นๆ">อื่นๆ (โปรดระบุ)</option>
                                                </select><br>

                                                <div class="form-check" id="othercause" style="display:none">
                                                    <div>
                                                        <label class="form-check-label ">
                                                            <label>โปรดระบุสาเหตุ</label>
                                                            <input type="text" id="othercause_des" name="othercause_des" class="form-control">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>จำนวผู้บาดเจ็บ</B></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="injured" class="form-control" autocomplete="off" required>
                                                <span class="help-block-none">* ถ้าไม่มีใส่เครื่องหมาย (-)</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text" class=" form-control-label"><B>จำนวนผู้เสียชีวิต</B></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="decreased" class="form-control" autocomplete="off" required>
                                                <span class="help-block-none">* ถ้าไม่มีใส่เครื่องหมาย (-)</span>
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>หมายเหตุ</B></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="note" class="form-control">
                                                <span class="help-block-none">* ถ้าไม่มีใส่เครื่องหมาย (-)</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label"><B>อัพโหลดรูปภาพ</B></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="img" name="img" class="form-control-file">
                                                
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <center><button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-save"></i> <B>บันทึกข้อมูล</B>
                                                </button>
                                        </center>
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

    <!-- เวลาเลือก อื่นๆ แล้วมีช่องให้กรอกข้อมูล -->
    <script>
        $("#drop").change(function () {
            console.log($("#drop").val());
            if ($("#drop").val() == "วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์") {
                $("#case_location_lat").val(16.476331);
                $("#case_location_lng").val(102.828175);
            };
            if ($("#drop").val() == "วงเวียนหอพักชายที่ 16") {
                $("#case_location_lat").val(16.478032);
                $("#case_location_lng").val(102.816270);
            };
            if ($("#drop").val() == "ถนนหน้าปั๊มน้ำมันปตท.") {
                $("#case_location_lat").val(16.478313);
                $("#case_location_lng").val(102.813966);
            };
            if ($("#drop").val() == "ยูเทิร์นหน้าแฟลตจามจุรี") {
                $("#case_location_lat").val(16.476862);
                $("#case_location_lng").val(102.825572);
            };
            if ($("#drop").val() == "สี่แยกประตู 6") {
                $("#case_location_lat").val(16.448300);
                $("#case_location_lng").val(102.811754);
            };
            if ($("#drop").val() == "วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)") {
                $("#case_location_lat").val(16.472984);
                $("#case_location_lng").val(102.821217);
            };
            if ($("#drop").val() == "ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง") {
                $("#case_location_lat").val(16.478849);
                $("#case_location_lng").val(102.809856);
            };
            if ($("#drop").val() == "แยกคณะเภสัชศาสตร์") {
                $("#case_location_lat").val(16.471012);
                $("#case_location_lng").val(102.828021);
            };
            if ($("#drop").val() == "ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.") {
                $("#case_location_lat").val(16.477633);
                $("#case_location_lng").val(102.819327);
            };
            if ($("#drop").val() == "ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์") {
                $("#case_location_lat").val(16.472027);
                $("#case_location_lng").val(102.828020);
            };
            if ($("#drop").val() == "อื่นๆ") {
                $("#otherplaces").show()
            }
            else {
                $("#otherplaces").hide()
            };
        })
        // สาเหตุ
        $("#drop2").change(function () {
            console.log($("#drop2").val());
            if ($("#drop2").val() == "อื่นๆ") {
                $("#othercause").show()
            }
            else {
                $("#othercause").hide()
            };
        });

        $("#drop").change(function () {
            console.log($("#drop").val());
            if ($("#drop").val() == "อื่นๆ") {
                $("#mapd").show()
            }
            else {
                $("#mapd").hide()
            };
        });

    </script>
    <!-- เวลาเลือก อื่นๆ แล้วมีช่องให้กรอกข้อมูล END-->

    <!-- Calendar -->
    <script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-datepicker-thai.js"></script>
    <script src="js/locales/bootstrap-datepicker.th.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
    <!-- Calendar END-->


    <!-- google map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU4AlB2IxjVm3usy3xHvkzopAlgCc2E2w" type="text/javascript"></script>
    <!-- google map API END-->
    
    <!-- แผนที่ -->
    <script>
        //map
        var marker = [];
        var gmarkers = [];

        var securkku = { lat: 16.477920, lng: 102.819188 }; //รปภ.มข.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: securkku,
            zoom: 16,
            mapTypeId: 'satellite'
        });
        //marker
        var marker = new google.maps.Marker({
            map: map,
            position: securkku,
            draggable: true
        });

        google
            .maps
            .event
            .addListener(marker, 'dragend', function () {
                var my_Point = marker.getPosition(); // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker
                $("#case_location_lat").val(my_Point.lat())
                $("#case_location_lng").val(my_Point.lng())
            });


        gmarkers.push(marker);

        
        

        function setCenter(btnLoad, case_location_lat, case_location_lng, otherplaces_des, getMap ) {
            if (navigator.geolocation) {
                navigator
                    .geolocation
                    .getCurrentPosition(function (position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        // var latlng = "55.397563, 10.39870099999996";
                        var url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=" + latlng + "&sensor=false";
                                $.getJSON(url, function (data) {
                                        for(var i=0;i<data.results.length;i++) {
                                        var adress = data.results[i].formatted_address;
                                        $("#otherplaces_des").val(adress);        
                            }
                        });
                        // console.log(pos);
                         var geocoder = new google.maps.Geocoder;
                        
                        // function geocodeLatLng(geocoder){
                        //     var input = document.getElementById('pos').value;
                        //     console.log(input);
                        //     var latlngStr = input.split(',', 2);
                        //     var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
                        //     geocoder.geocode({'location': latlng}, 
                        //         function(results, status) {
                        //             if (status === 'OK') {
                        //                 if (results[0]) {
                        //                     $("#othercase_des").val(results[0].formatted_address);
                        //                     } else {
                        //                         window.alert('No results found');
                        //                     }
                        //                 } else {
                        //                 window.alert('Geocoder failed due to: ' + status);
                        //                 }
                        //             });

                        // };
                        
                        for (var i = 0; i < gmarkers.length; i++) {
                            gmarkers[i].setMap(null);
                        }
                        var marker = new google.maps.Marker({
                                position: {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                },
                                map: map,
                                title: 'Maker',
                                draggable: true
                            });

                        
                        gmarkers.push(marker);


                        google
                            .maps
                            .event
                            .addListener(marker, 'dragend', function () {
                                var my_Point = marker.getPosition(); // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                                map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker
                                $("#case_location_lat").val(my_Point.lat())
                                $("#case_location_lng").val(my_Point.lng())
                            });

                        map.setCenter(pos);
                        map.setZoom(20);
                        $("#case_location_lat").val(pos.lat);
                        $("#case_location_lng").val(pos.lng);
                        $("#" + btnLoad).removeClass("loading");

                    }, function () {
                        alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
                        $("#" + btnLoad).removeClass("loading");
                    });
            } else {
                // Browser doesn't support Geolocation
                alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
                $("#" + btnLoad).removeClass("loading");
            }
        }
    </script>
    <!-- แผนที่ END-->


    <!-- เพิ่ม,ลด คน -->
    <script>
        var j = 1;
        $('#add_car').click(function (e) {
            e.preventDefault()
            $("#car").append(`
            <div>
                <div class="btn-close">
                    <button type="button" style="float: right" class="btn-danger btn-sm" onclick="remove_car(this)" >
                        ลบข้อมูลรถ
                    </button>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label"><B>รายละเอียดรถที่เกิดเหตุ</B></label>
                    </div>
                    <div class="col-md-3">
                        <label for="car_type">ประเภท</label>
                        <select class="form-control" id="car_type" name="car[${j}][car_type]">
                            <option value="รถยนต์">รถยนต์</option>
                            <option value="รถจักรยานยนต์">รถจักรยานยนต์</option>
                            <option value="รถอื่นๆ">รถอื่นๆ</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>ป้ายทะเบียน</label>
                        <input type="text" name="car[${j}][car_reg]"
                            class="form-control" autocomplete="off" required>
                    </div>
                    <div class="col-md-3">
                        <label>แบรนด์</label>
                        <input type="text" name="car[${j}][brand]"
                            class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-md-3">
                        <label>รุ่น</label>
                        <input type="text" name="car[${j}][series]"
                            class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label>สี</label>
                        <input type="text" name="car[${j}][color]"
                            class="form-control" required>
                    </div>
                </div>
                <div class="suff">
                    <div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label"><B>รายละเอียดผู้ประสบอุบัติเหตุ</B></label>
                            </div>
                            <div class="col-md-3">
                                <label for="car_type">ชื่อ-สกุล</label>
                                <input type="text" name="car[${j}][suff][0][name_suff]"
                                    class="form-control" autocomplete="off" required>
                            </div>
                            <div class="col-md-3">
                                <label>คณะ/หน่วยงาน/บุคคลภายนอก</label>
                                <select class="form-control" name="car[${j}][suff][0][type_suff]">
                                    <option value="บุคลากร">- บุคลากร</option>
                                    <option value="บุคคลภายนอก">- บุคคลภายนอก</option>
                                    <optgroup label="นักศึกษา">
                                        <option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
                                        <option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
                                        <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                                        <option value="คณะบริหารธุรกิจและการบัญชี">คณะบริหารธุรกิจและการบัญชี</option>
                                        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                                        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                        <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                                        <option value="คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์">คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</option>
                                        <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                                        <option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                                        <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
                                        <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                                        <option value="คณะสถาปัตยกรรมศาสตร์">คณะสถาปัตยกรรมศาสตร์</option>
                                        <option value="คณะสังคมศาสตร์บูรณาการ">คณะสังคมศาสตร์บูรณาการ</option>
                                        <option value="คณะสัตวแพทยศาสตร์">คณะสัตวแพทยศาสตร์</option>
                                        <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
                                        <option value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์</option>
                                        <option value="คณะเทคนิคการแพทย์">คณะเทคนิคการแพทย์</option>
                                        <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
                                        <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                                        <option value="คณะเศรษฐศาสตร์">คณะเศรษฐศาสตร์</option>
                                        <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                                        <option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
                                        <option value="วิทยาลัยการปกครองท้องถิ่น">วิทยาลัยการปกครองท้องถิ่น</option>
                                        <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
                                        <option value="วิทยาลัยบัณฑิตศึกษาการจัดการ">วิทยาลัยบัณฑิตศึกษาการจัดการ</option>
                                        <option value="วิทยาเขตหนองคาย">วิทยาเขตหนองคาย</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="button" data-attr="${j}" onclick="add_suff(this)"><i
                        class="fa fa-plus"></i>
                    เพิ่มผู้ประสบเหตุ
                </button>
            </div>
            `)
            j++;

        })


        function add_suff(self) {
            let n =  $(self).closest("div").find(".suff").children().size();
            let num = $(self).attr("data-attr");
            $(self).closest("div").find(".suff").append(`<div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="car_type">ชื่อ-สกุล</label>
                                                                <input type="text" name="car[${num}][suff][${n}][name_suff]"
                                                                    class="form-control" required>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>คณะ/หน่วยงาน/บุคคลภายนอก</label>
                                                                <select class="form-control" name="car[${num}][suff][${n}][type_suff]">
                                                                    <option value="บุคลากร">- บุคลากร</option>
                                                                    <option value="บุคคลภายนอก">- บุคคลภายนอก</option>
                                                                    <optgroup label="นักศึกษา">
                                                                        <option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
                                                                        <option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
                                                                        <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                                                                        <option value="คณะบริหารธุรกิจและการบัญชี">คณะบริหารธุรกิจและการบัญชี</option>
                                                                        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                                                                        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                                                        <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                                                                        <option value="คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์">คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</option>
                                                                        <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                                                                        <option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                                                                        <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
                                                                        <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                                                                        <option value="คณะสถาปัตยกรรมศาสตร์">คณะสถาปัตยกรรมศาสตร์</option>
                                                                        <option value="คณะสังคมศาสตร์บูรณาการ">คณะสังคมศาสตร์บูรณาการ</option>
                                                                        <option value="คณะสัตวแพทยศาสตร์">คณะสัตวแพทยศาสตร์</option>
                                                                        <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
                                                                        <option value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์</option>
                                                                        <option value="คณะเทคนิคการแพทย์">คณะเทคนิคการแพทย์</option>
                                                                        <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
                                                                        <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                                                                        <option value="คณะเศรษฐศาสตร์">คณะเศรษฐศาสตร์</option>
                                                                        <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                                                                        <option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
                                                                        <option value="วิทยาลัยการปกครองท้องถิ่น">วิทยาลัยการปกครองท้องถิ่น</option>
                                                                        <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
                                                                        <option value="วิทยาลัยบัณฑิตศึกษาการจัดการ">วิทยาลัยบัณฑิตศึกษาการจัดการ</option>
                                                                        <option value="วิทยาเขตหนองคาย">วิทยาเขตหนองคาย</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="btn-close-suff">
                                                            <button type="button"  class="btn btn-warning btn-sm" onclick="remove_suff(this)" >
                                                            ลบรายละเอียดผู้ประสบอุบัติเหตุ
                                                            </button>
                                                        </div><br>
                                                    </div>
            `)
        }


        function remove_car(self) {
            //console.log(self)
            // console.log($(self).closest("div").parent())
            $(self).closest("div").parent().remove()
        }

        function remove_suff(self) {
            $(self).parents()[1].remove()
        }

        $("#date1").change(function(){
            let date = $("#date1").val()
            let datearray = date.split("/");
            $("#date").val(`${(parseInt(datearray[2])-543)}-${datearray[1]}-${datearray[0]}`)
        })
        $("#hr").change(function(){
            $('#time').val(`${$("#hr").val()}:${$("#min").val()}:00`)
        })
        $("#min").change(function(){
            $('#time').val(`${$("#hr").val()}:${$("#min").val()}:00`)
        })
        $(document).ready(function() {
            for(let i = 0 ; i<=23 ; i++){
                if(i<10) i = `0${i}`
                $("#hr").append(`<option value="${i}">${i}</option>`)
            }
            for(let i = 0 ; i<=59 ; i++){
                if(i<10) i = `0${i}`
                $("#min").append(`<option value="${i}">${i}</option>`)
            }
            $('#time').val("00:00:00");
        })
    </script>
    <!-- เพิ่ม,ลด คน END-->

    <!-- auto complete car -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        //   brand
        $(function () {
            var brand_auto = [
                "Alfa Romeo (อัลฟาโรเมโอ)",
                "Aston Martin (แอสตันมาร์ติน)",
                "Audi (อาวดี้)",
                "Austin (ออสติน)",
                "Bentley (เบนท์ลี่ )",
                "BMW (บีเอ็มดับเบิ้ลยู)",
                "Cadillac (คาดิลแลค) ",
                "Cherry (เชอร์รี่)",
                "Chevrolet (เชฟโรเลต)",
                "Chryler (ไครสเลอร์)",
                "Citroen (ซีครอง)",
                "Daihatsu (ไดฮัทสุ)",
                "Datsun (ดัทสัน)",
                "DEVA (ดีว่า)",
                "DFM (ดีเอฟเอ็ม)",
                "Douge (ดอร์จ)",
                "Ferrari (เฟอร์รารี)",
                "Fiat (เฟียท) ",
                "Ford (ฟอร๋ด)",
                "Foton (โฟตอน)",
                "GMC (จีอ็มซี) ",
                "Holden (โฮลเดน)",
                "Honda (ฮอนด้า)",
                "Hummer (ฮัมเมอร์)",
                "Hyundai (ฮุนได)",
                "Infinity (อินฟินิตี้)",
                "Isuzu (อีซูซุ)",
                "Jaguar (จากัวร์)",
                "Jeep (จีป)",
                "Joylong (จอยลอง)",
                "Kia (เกีย)",
                "Lamborghini (แลมโบกินี่ )",
                "Land Lover (เรนจ์ โรเวอร์)",
                "Lexus (เล็กซัส)",
                "LINCOLN (ลิงคอล์น)",
                "Lotus (โลตัส)",
                "Maserati (มาเซราตี)",
                "Mazda (มาสด้า)",
                "McLaren (แมคลาเรน)",
                "Mercedes-Benz (เมอร์เซเดส-เบนซ์)",
                "MG (เอ็มจี)",
                "Mini (มินิ)",
                "Mitsubishi (มิตซูบิชิ)",
                "Mitsuoka (มิตซูโอกะ )",
                "Morris (มอร์ริส)",
                "Nissan (นิสสัน)",
                "Oldsmobile",
                "Opel (โอเปิล )",
                "Perodua (เปอโรดัว )",
                "Peugeot (เปอโยต์)",
                "Playmount",
                "Pontiac (พอนทิแอค)",
                "Porsche (ปอร์เช่)",
                "Proton (โปรตอน)",
                "Rely",
                "Rolls-Royce (โรลส์-รอยซ์)",
                "Rover (โรเวอร์)",
                "Saab (ซ้าบ)",
                "Seat",
                "Skoda (สโกด้า)",
                "Smart (สมาร์ท)",
                "Ssangyoung (ซันยอง)",
                "Subaru (ซูบารุ)",
                "Suzuki (ซูซูกิ)",
                "Tata (ทาทา)",
                "Tesla (เทสล่า)",
                "Toyota (โตโยต้า)",
                "TR",
                "Volkswagen (โฟล์กสวาเกน)",
                "Volvo (วอลโว่)",
                "Aprilia",
                "Benelli (เบนลี่)",
                "BMW (บีเอ็มดับเบิ้ลยู)",
                "CFMOTO",
                "Ducati (ดูคาติ)",
                "GPX (จีพีเอกซ์)",
                "Harley-Davidson (ฮาเรย์ เดวิสชั่น)",
                "Honda (ฮอนด้า)",
                "Husqvarna",
                "Kawasaki (คาวาซากิ)",
                "Keeway (คีเวย์)",
                "KTM (เคทีเอ็ม)",
                "Moto (โมโต)",
                "Guzzi (กัสซิ)",
                "Moto (โมโต)",
                "Parilla (พาลิลล่า)",
                "MV-Agusta (เอ็มวีออกัสต้า)",
                "Peugeot (เปอร์โย)",
                "Scooter",
                "Piaggio",
                "Royal",
                "Alloy",
                "Royal Enfield (รอยอล เอนฟิลด์)",
                "Scomadi (สโกมาดิ)",
                "Stallions (สตาเลี่ยน)",
                "Suzuki (ซูซูกิ)",
                "SYM (เอส วาย เอ็ม)",
                "Triumph (ไทรอั้ม)",
                "Vespa (เวสป้า)",
                "Yamaha (ยามาฮ่า)",
                "Zero",
                "Motorcycles",
                "Zongshen",
                "Ryuka"
                


            ];
            $("#brand_auto").autocomplete({
                source: brand_auto
            });
        });

        // series
        $(function () {
            var series_auto = [
                "156",
                "Giulia",
                "Giuliteta",
                "Cygnet",
                "DB11",
                "DB9",
                "Rapide",
                "V12",
                "V8",
                "Vanquish",
                "80",
                "A1",
                "A3",
                "A4",
                "A5",
                "A6",
                "A7",
                "A8",
                "Q2",
                "Q3",
                "Q5",
                "Q7",
                "R8",
                "RS3",
                "RS5",
                "S3",
                "TT",
                "TT RS",
                "TTS",
                "A90 Atlantic",
                "Arnage",
                "Bentayga",
                "Continental",
                "Flying Spur",
                "Mulsanne",
                "Turbo",
                "de Ville",
                "Eldorado",
                "Escalade",
                "Fleetwood",
                "QQ",
                "Allroader",
                "Astro",
                "Aveo (อาร์วีโอ้)",
                "Camero (คาเมโล)",
                "Carprice",
                "Captiva (แคปติว่า)",
                "Colorado (โคโรลาโด้)",
                "Corvette",
                "Cruze (ครูช)",
                "Express",
                "Optra (ออบตร้า)",
                "Savana",
                "Sonic (โซนิค)",
                "Spin (สปิน)",
                "Trailblazer (เทรลเบเซอร์)",
                "Van ",
                "Zafira",
                "300C",
                "300M",
                "Neon",
                "PT Cruiser",
                "Serbring",
                "Voyager",
                "BX",
                "C3",
                "C4",
                "C5",
                "C8",
                "DS3",
                "Jumper",
                "Xantia",
                "Xsara",
                "Mira",
                "Opti",
                "620",
                "Hercules",
                "Mini Truck",
                "Mini VAN",
                "Saver",
                "Truck",
                "C Series",
                "348 Spider",
                "458 Italia",
                "458 Speciale",
                "458 Spider",
                "488 GTB",
                "812 Superfast",
                "CALIFORNIA",
                "California T",
                "F12 Berlinetta",
                "F355",
                "F360",
                "F430",
                "F599 Fiorano",
                "GTC4 Lusso",
                "500",
                "500C",
                "850 Spider",
                "Ducato",
                "Punto",
                "Aspire",
                "EcoSport (อีโค่สปอร์ต)",
                "Escape (เอสเคป)",
                "Everest (เอฟเวอร์เรส)",
                "Explorer",
                "Festiva",
                "Fiesta (เฟียสต้า)",
                "Focus (โฟกัส)",
                "Laser",
                "Lincoln Continental",
                "Marathon",
                "Mustang (มัสแตง)",
                "Ranger (แรงเจอร์)",
                "Territory",
                "Aunmark",
                "Columbus",
                "View",
                "Savana",
                "Calais",
                "Accord (แอคคอร์ด)",
                "BR-V (บี อาร์ วี)",
                "Brio (บริโอ)",
                "City (ซิตี้)",
                "Civic (ซีวิค)",
                "CR-V (ซี อาร์ วี)",
                "CR-X",
                "CR-Z",
                "CROSSROAD",
                "Elysion",
                "Fit (ฟิต)",
                "Freed (ฟรีด)",
                "HR-V (เอช อาร์ วี)",
                "Integra",
                "Jazz (แจ๊ส)",
                "Legend",
                "N-ONE",
                "NSX (เอ็น เอา เอกซ์)",
                "Odyssey (ออดีสซี่)",
                "Prelude (พรีหรูด)",
                "S2000 (เอส ทูทาวซั่น)",
                "STEPWGN SPADA (สเตปวาก้อน สปาด้า)",
                "Stream (สตรีม)",
                "Today",
                "H1 (เอชวัน)",
                "H2",
                "H3",
                "Accent",
                "Elanta (อีแลนต้า)",
                "Grand Starex (แกรนด์สตาร์เร็ก)",
                "H-1 (เอชวัน)",
                "Sonata (โซนาต้า)",
                "Tiburon",
                "Tucson (ทรัสซอน)",
                "Veloster (เวลอสเตอร์)",
                "G",
                "M",
                "Adventure",
                "Adventure Master",
                "Cameo",
                "D-Max (ดีแมกซ์)",
                "Dragon Eyes (ดราก้อน อายด์)",
                "Dragon Power (ดราก้อน พาวเวอร์)",
                "ELF",
                "Grand Adventure",
                "MU-7 (มิวเซเว่น)",
                "MU-X (มิงเอกซ์)",
                "TFR",
                "Tripper",
                "Trooper",
                "Vega",
                "Wanderer",
                "Daimler",
                "F-Pace",
                "F-Type",
                "S-Type",
                "Sovereing",
                "X-Type",
                "XF",
                "XJ",
                "XJ6",
                "XJ8",
                "XJS",
                "XK8",
                "Cherokee",
                "Grand Cherokee",
                "Wrangler",
                "A6",
                "Carens",
                "Carnival",
                "Grand Carnival",
                "Jumbo",
                "K2500",
                "K2900",
                "Picanto",
                "Rio",
                "Sorento",
                "Soul",
                "Aventador",
                "Diablo",
                "Gallardo",
                "Harucane",
                "Mucielago",
                "Defender",
                "Discovery",
                "Discovery 3",
                "Discovery Sport",
                "Freelander",
                "Freelander 2",
                "Range Rover",
                "Ct200h",
                "ES300",
                "ES300h",
                "GS200t",
                "GS250",
                "GS300",
                "GS300h",
                "IS250",
                "IS300h",
                "LS400",
                "LS430",
                "LS460",
                "LS460L",
                "LX470",
                "NX300h",
                "RC300h",
                "RX200t",
                "RX270",
                "RX300",
                "RX350",
                "SC430",
                "Aviator",
                "Elise",
                "Esprit",
                "Erova",
                "Exige",
                "Ghibli",
                "Grancabrio",
                "Granturismo",
                "Levante",
                "Quattroporte",
                "2 (มาสด้า สอง)",
                "3 (มาสด้า สาม)",
                "323",
                "6",
                "626",
                "BT-50 (บีที 50) ",
                "BT-50 Pro (บีที 50 โปร)",
                "CX-3 (ซีเอกซ์ สาม)",
                "CX-5 (ซีเอกซ์ ห้า)",
                "CX-7",
                "CX-9",
                "Familia",
                "Fighter",
                "Lantis",
                "Magnum Thunder",
                "MPV",
                "MX-5",
                "RX-7",
                "RX-8",
                "Tribute",
                "650S",
                "675LT",
                "MP4-12C",
                "A170",
                "A180",
                "A180 CDI",
                "A200",
                "A250",
                "A45",
                "B180",
                "B180 CDI",
                "B200",
                "C180",
                "C180 AMG",
                "C180 Kompressor",
                "C200",
                "C200 CGI",
                "C200 Kompressor",
                "C220",
                "C220 CDI",
                "C230",
                "C230 Kompressor",
                "C240",
                "C250",
                "C250 CDI",
                "C250 CGI",
                "C300",
                "C32 AMG",
                "C350",
                "C43",
                "C55 AMG",
                "C63 AMG",
                "CL500",
                "CL500 AMG",
                "CLA180",
                "CLA200",
                "CLA250 AMG",
                "CLC200 Kompressor",
                "CLK200",
                "CLK200 Kompressor",
                "CLK230 Kompressor",
                "CLK240",
                "CLS350 CDI",
                "CLS220 CDI",
                "CLS250 CDI",
                "CLS250 CDI AMG",
                "CLS350 ",
                "CLS500",
                "CLS55 AMG",
                "E200",
                "E200 CGI",
                "E200 Kompressor",
                "E200D",
                "E220",
                "E200 CDI",
                "E230",
                "E240",
                "E250",
                "E250 AMG",
                "E250 CDI",
                "E250 CGI",
                "E250 CGI AMG",
                "E270 CDI",
                "E280",
                "E300",
                "E350",
                "E350 AMG",
                "E63 AMG",
                "GL350",
                "GLA200",
                "GLA250",
                "GLC250",
                "GLE250",
                "GLE350",
                "GLE500",
                "GLS350",
                "ML250 CDI",
                "ML250 CDI AMG",
                "ML270",
                "ML280 CDI",
                "ML320",
                "ML350 CDI",
                "R300 CDI",
                "R350",
                "S280",
                "S300",
                "S320",
                "S320 CDI",
                "S350",
                "S350 CDI",
                "S400",
                "S430",
                "S500",
                "S55 AMG",
                "S600",
                "SL280",
                "SL300",
                "SL350",
                "SL500",
                "SL55 AMG",
                "SL63 AMG",
                "SLC300",
                "SLC43",
                "SLK200",
                "SLK200 AMG",
                "SLK200 Kompressor",
                "SLK200 Kompressor AMG",
                "SLK230 Kompressor",
                "SLK250",
                "SLK280",
                "SLK350",
                "SLS AMG",
                "V250",
                "Viano",
                "Vito",
                "GS (จีเอส)",
                "MG3 (เอ็มจี 3)",
                "MG5 (เอ็มจี 5)",
                "MG6 (เอ็มจี 6)",
                "ZS (แซดเอส)",
                "Austin",
                "Cooper",
                "One",
                "3000GT",
                "Attrage (เอททราส)",
                "Canter",
                "Colt",
                "Cylone",
                "Delica Space Wagon",
                "Evolution (อีโวลูชั่น)",
                "Fuso",
                "Galant",
                "L300",
                "Lancer (แลนเซอร์)",
                "Lancer EX (แลนเซอร์ อีเอกซ์)",
                "Mirage (มิราจ)",
                "Outlander",
                "Pajero",
                "Pajero Junior",
                "Pajero Sport (ปาเจโร สปอร์ต)",
                "Space Wagon",
                "Strada",
                "Strada G-Wagon",
                "Triton (ไทรตัน)",
                "Himiko",
                "Le-Seyde",
                "Mini",
                "200SX",
                "350Z",
                "370Z",
                "Almera (อัลเมร่า)",
                "Big M",
                "Bluebird Atessa",
                "Cedric",
                "Cefiro",
                "Cube (คิ้ว)",
                "Elgrand",
                "Frontier (ฟรอนเทียร์)",
                "Frontier Navara",
                "GT-R (จีทีอาร์)",
                "Infiniti",
                "Juke (จู้ค)",
                "Leaf (ลีฟ)",
                "Livina (ลาวิน่า)",
                "March (มาร์ช)",
                "Micra",
                "Murano",
                "Note (โน้ต)",
                "NP 300 Navara (เอ็นพี 300)",
                "NV",
                "NX",
                "Presea",
                "President",
                "Primera",
                "Pulsa (พัลซ่า)",
                "Serena",
                "Silivia",
                "Skyline",
                "Sunny",
                "Sylphy (ซิลฟี่)",
                "Teana (เทียน่า)",
                "Terra",
                "Terrano II",
                "Tiida (ทีด้า)",
                "Urvan",
                "X-Trail (เอ๊กซ์เทรล)",
                "Xciter",
                "Cutlass",
                "Corsa",
                "Omega",
                "Kancill",
                "206",
                "207",
                "3008",
                "306",
                "307",
                "308",
                "405",
                "406",
                "407",
                "408",
                "508",
                "605",
                "807",
                "Expert",
                "RCZ",
                "Valiant",
                "Fiero",
                "718",
                "911 Carrera",
                "911 Carrera 4 GTS",
                "911 Carrera 4S",
                "911 Carrera GTS",
                "911 Carrera S",
                "911 GT3",
                "911 GT3 RS",
                "911 Targa",
                "911 Targa 4",
                "911 Targa 4 GTS",
                "911 Targa 4S",
                "911 Turbo",
                "Boxster",
                "Cayenne",
                "Cayman",
                "Macan",
                "Panamera",
                "Exora",
                "Gen2",
                "Persona",
                "Preve",
                "Saga",
                "Savvy",
                "Yo-Ki",
                "Corniche II",
                "Dawn",
                "Ghost",
                "Silver Dawn",
                "Silver Shadow",
                "Silver Spur",
                "Wraith",
                "Mini",
                "9-3",
                "9-5",
                "900",
                "9000",
                "Alhambra",
                "Octavia",
                "City",
                "Forfour",
                "Fortwo",
                "Roadster",
                "Actyon",
                "Kyron",
                "Stavic",
                "BRZ",
                "Forester",
                "Impreza",
                "Legacy",
                "Levorg",
                "Outback",
                "R2",
                "XV",
                "APV",
                "Caribian",
                "Carry",
                "Celerio (เซเลริโอ้)",
                "Ciaz (เซียส)",
                "Ertiga (เออติก้า)",
                "Lapin",
                "Swift (สวิฟต์)",
                "SX4 (เอสเอกซ์โฟร์)",
                "Vitara",
                "Super Ace Mint",
                "Superace",
                "Xenon",
                "Model S",
                "Model X",
                "4Runner",
                "86 GT",
                "Alphard (อัลพาร์ด)",
                "Altezza",
                "Avanza (อแวนซ่า)",
                "Aygo",
                "bB",
                "Caldina",
                "Camry (แคมรี่)",
                "Carina",
                "Celica",
                "Century (เซ็นจูรี่)",
                "Corolla",
                "Colrolla Altis (โคโรร่า อัลติส)",
                "Corona",
                "Cressida",
                "Crown (คราวน์)",
                "Esquire",
                "Estima (เอสทิม่า)",
                "FJ CRUISER",
                "Fortuner (ฟอร์จูนเนอร์)",
                "Grand Hiace",
                "Granvia",
                "Harrier (แฮร์ริเออร์)",
                "Hiace",
                "Hikux Mighty-X",
                "Hilux Revo (รีโว่)",
                "Hiliux Surf",
                "Hilux Tiger (ไทเกอร์)",
                "Hilux Vigo (วีโก้)",
                "Innova (อินโนวา)",
                "iQ",
                "Kluger",
                "Land Criser",
                "Landcruiser Prado",
                "LN",
                "Lucida",
                "Mark X",
                "MR-S",
                "MR2",
                "Platz",
                "Porte",
                "Prius (พรีอุส)",
                "Rav4",
                "Sienta (เซียนต้า)",
                "Soarer",
                "Soluna",
                "Sport Cruiser",
                "Sport Rider",
                "Stalet",
                "Super Custom",
                "Super Wagon",
                "Supra",
                "TERCEL",
                "Vellfire (เวลไฟล์)",
                "Ventury",
                "Vios (วีออส)",
                "Vista",
                "Vitz",
                "Voxy",
                "Wish (วิช)",
                "Yaris (ยาริส)",
                "Yaris Ativ (ยาริส เอทีฟ)",
                "Transformer II",
                "Beetle",
                "Caravelle",
                "Classic Van",
                "Golf",
                "Multivan",
                "New Beetle",
                "Passat",
                "Passat CC",
                "Scirocco",
                "Touareg",
                "Transporter",
                "Vento",
                "244",
                "460",
                "740",
                "760",
                "850",
                "940",
                "960",
                "C30",
                "S40",
                "S60",
                "S70",
                "S80",
                "S90",
                "V40",
                "V50",
                "V60",
                "V70",
                "V90",
                "XC60",
                "XC90",
                "RSV4",
                "Tuono",
                "302R",
                "BN600i",
                "Leoncino",
                "TNT",
                "TRE1130K",
                "TRK502",
                "TRK502X",
                "TNT1130R",
                "TNT135",
                "TNT25",
                "TNT300S",
                "TNT600GT",
                "TNT899",
                "G310GS",
                "G310R",
                "F700",
                "F750",
                "F800",
                "R1200",
                "R1250",
                "R-NINE-T",
                "K1600",
                "C400X",
                "C650GT",
                "S1000R",
                "S1000RR",
                "S1000XR",
                "250NK",
                "1299 Panigale",
                "959 Panigale",
                "Diavel",
                "Hypermotard",
                "Monster",
                "Multistrada",
                "Panigale",
                "Panigale R",
                "Scramble",
                "Supersport",
                "CR5",
                "Demon",
                "Demon X 125",
                "DP",
                "Legend",
                "RAZER",
                "CVO",
                "Softail",
                "Sportster",
                "Street",
                "Touring",
                "CB (ซีบี)",
                "CBR (ซีบีอาร์)",
                "Click i (คลิก ไอ)",
                "CRF",
                "CTX",
                "Dream (ดรีม)",
                "Forza 300 (ฟอร์ซ่า 300)",
                "Goldwing (โกลด์วิง)",
                "Integra",
                "Monkey (มังกี้)",
                "Moove (มูฟ)",
                "MSX125 (เอ็ม เอส เอกซ์)",
                "NC",
                "NM4",
                "PCX (พีซีเอกซ์)",
                "RC123V",
                "Rebel",
                "Scoopy i (สกู๊ปปี้ ไอ)",
                "Sh150i",
                "Spacy i",
                "Super Cup (ซูเปอร์คัพ)",
                "VFR",
                "Wave (เวฟ)",
                "X-ADV",
                "Zoomer-X (ซูเมอร์ ดอกซ์)",
                "1400GTR",
                "D-Tracker (ดีแทรกเกอร์)",
                "KLX",
                "KSR (เคเอสอาร์)",
                "Ninja (นินจา)",
                "Versys",
                "Vulcan",
                "W",
                "Z (แซด)",
                "Blackster",
                "Dorado250",
                "RVK200",
                "Superlight 200",
                "TX 200",
                "TXM 200",
                "1090",
                "1190",
                "1290",
                "200 Duke",
                "250 Duke",
                "390 Duke ",
                "690",
                "790 Duke",
                "Bullet 500",
                "Classic 500",
                "Continental GT",
                "Himalayan",
                "VTR",
                "Centaur",
                "VanVan",
                "Burgman",
                "GSX",
                "Let's",
                "Smash",
                "Shogun",
                "GD110",
                "946",
                "GTS",
                "LT",
                "LXV",
                "Primavera",
                "PX",
                "S",
                "Spirint",
                "Aerox 155",
                "Exciter 150",
                "FINN",
                "Fino (ฟัโน่)",
                "Grand Filano (แกรนด์ฟิลาโย่)",
                "M-Slaz (เอ็มสแลส)",
                "MT03",
                "MT07",
                "MT09",
                "NMAX (เอ็นแมกซ์)",
                "Qbix (คิวบิค)",
                "Spark (สปาร์ค)",
                "TMAX",
                "XMAX",
                "Tricity",
                "SR400",
                "R15 (อาร์15)",
                "R3 (อาร์3)",
                "R6"


            ];
            $("#series_auto").autocomplete({
                source: series_auto
            });
        });
    </script>
    <!-- auto complete car END -->
</body>

</html>