<?php
date_default_timezone_set('Asia/Bangkok'); //เปลี่ยนเวลาให้เป็นเวลาประเทศไทย
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
                        <a class="logo" href="index.html">
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
                            <a class="js-arrow" href="#">
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

                <a href="#">
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
                      <li class="active has-sub">
                          <a href="form.php">
                              <i class="fa fa-edit"></i>บันทึกอุบัติเหตุ</a>
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
                             <i class="fa fa-sign-out"></i>ออกจากระบบ</a>
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
                                        <strong>แบบบักทึกข้อมูล</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                                        <input type="text" class="form-control" data-provide="datepicker" data-date-language="th-th" placeholder="คลิ๊กเพื่อระบุวันที่" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label"><B>เวลา</B></label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text"  name="date" class="form-control">
                                                    
                                                <span class="help-block-none" style="font-size:16px;">* ตัวอย่าง : 09.00</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><B>ผลัด</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="duty_1" value="เช้า" class="form-check-input"> เช้า
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="duty_2" value="บ่าย" class="form-check-input"> บ่าย
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="duty_3" value="ดึก" class="form-check-input"> ดึก
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- วัน/เวลา/ผลัด -->

                                        <!-- สถานที่เกิดอุบัติเหตุ -->
                                        <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><B>สถานที่เกิดอุบัติเหตุ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                      <select name="select_places" id="drop" class="form-control">
                                                          <option value=""> ===โปรดเลือก=== </option>
                                                          <option value="วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์">วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                                          <option value="วงเวียนหอพักชายที่ 16">วงเวียนหอพักชายที่ 16 </option>
                                                          <option value="ถนนหน้าปั๊มน้ำมันปตท.">ถนนหน้าปั๊มน้ำมันปตท.</option>
                                                          <option value="ยูเทิร์นหน้าแฟลตจามจุรี">ยูเทิร์นหน้าแฟลตจามจุรี</option>
                                                          <option value="สี่แยกประตู 6">สี่แยกประตู 6</option>
                                                          <option value="วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)">วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)</option>
                                                          <option value="ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง">ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง</option>
                                                          <option value="แยกคณะเภสัชศาสตร์">แยกคณะเภสัชศาสตร์</option>
                                                          <option value="ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.">ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.</option>
                                                          <option value="ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์">ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์</option>
                                                          <option value="10">อื่นๆ (โปรดระบุ)</option>
                                                      </select><br>
                                                        
                                                    <div class="form-check" id="otherplaces"style="display:none">
                                                        <div class="checkbox">
                                                            <label for="radio3" class="form-check-label ">
                                                                <label>โปรดระบุสถานที่เกิดอุบัติเหตุ</label>
                                                                <input type="text" id="otherplaces_des" name="places"  class="form-control">
                                                            </label>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                            
                                            <!-- แผนที่ -->
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><B>พิกัด</B></label>
                                                </div>        
                                                <div class="col-lg-2">
                                                    <input id="case_location_lat" name="case_location_lat" type="text" class="form-control" readonly required>
                                                    <span class="help-block-none">ละติจูด (lat)</span>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input id="case_location_lng" name="case_location_lng" type="text" class="form-control" readonly required>
                                                    <span class="help-block-none">ลองติจูด (long)</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                            <div class="col-12 col-md-9">                                                 
                                                <p id="btnlocaSetCenter" onclick="setCenter(this.id,case_location_lat,case_location_lng,'map')" class="btn btn-info">ค้นหาตำแหน่ง</p><br><br>
                                            
                                            <div id="map"></div>
                                            <style>#map{
                                                            height: 400px;
                                                            }</style>
                                                <span class="help-block-none" style="font-size:16px;">* เลื่อนจุดมาร์คเพื่อปรับตำแหน่ง</span>
                                            </div>
                                            </div>
                                            
                                            <!-- สถานที่เกิดอุบัติเหตุ -->

                                            <!-- รายละเอียดรถ -->
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>ประเภทยานพาหนะ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="checkbox" class="form-check-label ">
                                                                <input type="checkbox" id="radio1" name="radios" value="1" class="form-check-input"> รถยนต์
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="radio2" name="radios" value="2" class="form-check-input"> รถจักรยานยนต์
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="checkbox" id="radio3" name="radios" value="3" class="form-check-input"> อื่นๆ (ระบุ)
                                                                <input type="text" id="password-input" name="places"  class="form-control">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>รายละเอียดรถที่เกิดเหตุ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="password-input" class="form-control"><br>
                                                    <input type="text" id="password-input" name="password-input" class="form-control">
                                                </div>
                                                </div>
                                                <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                                <div class="col-12 col-md-9">
<form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>ยี่ห้อรถ</th>
       <th>รุ่น</th>
       <th>สี</th>
       <th>หมายเลขทะเบียน</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"> เพิ่มข้อมูล </span></button></th>
      </tr>
     </table>
    </div>
   </form>
                                                        </div>
                                                        </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>สาเหตุ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                      <select name="select" id="select" class="form-control">
                                                           <option value=""> ===โปรดเลือก=== </option>
                                                          <option value="0">ขับรถเสียหลักเอง หรือล้มเอง </option>
                                                          <option value="1">ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์)</option>
                                                          <option value="2">ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถยนต์)</option>
                                                          <option value="3">ขับรถชนฟุตบาท เสาไฟฟ้า ป้ายจราจรหรือสิ่งกีดขวาง</option>
                                                          <option value="4">ขับรถชนกันหรือชนท้าย (ระหว่างรถจักรยานยนต์ - รถจักรยานยนต์)</option>
                                                          <option value="5">แซงหรือตัดหน้าระยะกระชั้นชิด โดยไม่ให้สัญญาณ</option>
                                                          <option value="6">เมาสุรา เสพสารออกฤทธิ์ต่อประสาทหรือหลับใน</option>
                                                          <option value="7">ขับรถไม่ชำนาญเส้นทาง</option>
                                                          <option value="8">อุปกรณ์ชำรุด เครื่องขัดข้อง</option>
                                                          <option value="9">ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์พ่วง)</option>
                                                          <option value="10">ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์โดยสาร - รถยนต์)</option>
                                                          <option value="11">เจ็บป่วยกะทันหันขณะขับขี่</option>
                                                          <option value="12">ขับรถชนกันหรือชนท้าย (ระหว่างรถบรรทุก - รถจักรยานยนต์)</option>
                                                          <option value="13">ขับรถด้วยความเร็ว หรือประมาท</option>
                                                          <option value="14">ขับรถฝ่าฝืนเครื่องหมาย/สัญญาณจราจร</option>
                                                          <option value="15">คนหรือสัตว์ วิ่งตัดหน้า กะทันหัน</option>
                                                      </select>

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>จำนวผู้บาดเจ็บ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="password-input" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text" class=" form-control-label"><B>จำนวนผู้เสียชีวิต</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="password-input" class="form-control">
                                                </div>
                                                </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text" class=" form-control-label"><B>ผู้ประสบเหตุ / คู่กรณี</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="password-input" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>ประเภทของผู้ประสบเหตุ</B></label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    นักศึกษา : <input type="text" id="password-input" name="password-input" placeholder="จำนวนคน" class="form-control">
                                                    บุคลากร : <input type="text" id="password-input" name="password-input"placeholder="จำนวนคน" class="form-control">
                                                    บุคคลภายนอก : <input type="text" id="password-input" name="password-input"placeholder="จำนวนคน" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>หมายเหตุ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="password-input" class="form-control">
                                                </div>
                                                <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
  </div>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"><B>อัพโหลดรูปภาพ</B></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                      <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div>
                                            
                                            
                                    </div>
                                    <div class="card-footer">
                                        <center><button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> <B>บันทึกข้อมูล</B>
                                        </button></center>
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
        if ($("#drop").val()=="วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์"){
            $("#case_location_lat").val(16.476331);
            $("#case_location_lng").val(102.828175);
        };
        if ($("#drop").val()=="วงเวียนหอพักชายที่ 16"){
            $("#case_location_lat").val(16.478032);
            $("#case_location_lng").val(102.816270);
        };
        if ($("#drop").val()=="ถนนหน้าปั๊มน้ำมันปตท."){
            $("#case_location_lat").val(16.478313);
            $("#case_location_lng").val(102.813966);
        };
        if ($("#drop").val()=="ยูเทิร์นหน้าแฟลตจามจุรี"){
            $("#case_location_lat").val(16.476862);
            $("#case_location_lng").val(102.825572);
        };
        if ($("#drop").val()=="สี่แยกประตู 6"){
            $("#case_location_lat").val(16.448300);
            $("#case_location_lng").val(102.811754);
        };
        if ($("#drop").val()=="วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)"){
            $("#case_location_lat").val(16.472984);
            $("#case_location_lng").val(102.821217);
        };
        if ($("#drop").val()=="ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง"){
            $("#case_location_lat").val(16.478849);
            $("#case_location_lng").val(102.809856);
        };
        if ($("#drop").val()=="แยกคณะเภสัชศาสตร์"){
            $("#case_location_lat").val(16.471012);
            $("#case_location_lng").val(102.828021);
        };
        if ($("#drop").val()=="ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข."){
            $("#case_location_lat").val(16.477633);
            $("#case_location_lng").val(102.819327);
        };
        if ($("#drop").val()=="ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์"){
            $("#case_location_lat").val(16.472027);
            $("#case_location_lng").val(102.828020);
        };
        if ($("#drop").val()==10){
            $("#otherplaces").show()
          }
        else {
            $("#otherplaces").hide()
          };
    })
        </script>

     


    

    <script src="//getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
    <script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-datepicker-thai.js"></script>
    <script src="js/locales/bootstrap-datepicker.th.js"></script>
    
    <script> 
    $('.datepicker').datepicker();
    </script>

    <!-- google map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU4AlB2IxjVm3usy3xHvkzopAlgCc2E2w" type="text/javascript">
           
    </script>
    <script>
    //map
    var securkku = {lat: 16.477920, lng: 102.819188}; //รปภ.มข.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: securkku,
          zoom: 16,
          mapTypeId: 'satellite'
        });
        //marker
        var marker = new google.maps.Marker({
          map: map,
          position : securkku,
          draggable: true
        });

        //dragend event of marker
        google
            .maps
            .event
            .addListener(marker,'dragend',function(){

                var myPoint = marker.getPosition();
                map.panTo(myPoint);

                console.log(myPoint.lat() + " " + myPoint.lng());

                var latm = marker.getPosition().lat();
                var lngm = marker.getPosition().lng();
                $("#case_location_lat").val(latm);
                $("#case_location_lng").val(lngm);
        });

function setCenter(btnLoad,locat_lat,locat_lng,getMap) {
	var mapShow;
    
    $("#"+btnLoad).addClass("loading");
    
    if (navigator.geolocation) {
        navigator
            .geolocation
            .getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
				};
				
                var marker = new google
                    .maps
                    .Marker({
                        position: {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        },
                        map: mapShow,
                        title: 'Maker',
                        draggable: true
                    });
                
			
				
				// gmarkers.push(marker);
				

                google
                    .maps
                    .event
                    .addListener(marker, 'dragend', function () {
                        var my_Point = marker.getPosition(); // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                        mapShow.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker
						$("#"+locat_lat).val(my_Point.lat())
						$("#"+locat_lng).val(my_Point.lng())
                    });

					mapShow.setCenter(pos);
					mapShow.setZoom(20);
                $("#"+locat_lat).val(pos.lat);
                $("#"+locat_lng).val(pos.lng);
                $("#"+btnLoad).removeClass("loading");

            }, function () {
                alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
                $("#"+btnLoad).removeClass("loading");
            });
    } else {
        // Browser doesn't support Geolocation
        alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
        $("#"+btnLoad).removeClass("loading");
    }
}
    </script>
	

<script>
$(document).ready(function(){

 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
  html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
  html += '<td><input type="text" name="test" class="form-control" /></td>';
  html += '<td><input type="text" name="test" class="form-control test" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"> ลบข้อมูล</span></button></td></tr>';
  $('#item_table').append(html);
 });

 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });

 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });

});
</script>

}
</body>

</html>
