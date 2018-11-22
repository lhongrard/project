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
                                                <input type="text" id="places_auto" name="otherplaces_des" class="form-control" autocomplete="off">
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
    <script src="./autocomplete.js"></script>
    <!-- auto complete car END -->
</body>

</html>