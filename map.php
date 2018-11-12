<?php

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
    <title>Accident KKU : แผนที่</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

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
                        <li>
                            <a href="form.php">
                                <i class="fa fa-edit"></i>บันทึกข้อมูลอุบัติเหตุ</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>ดูข้อมูล</a>
                        </li>
                        <li class="active has-sub">
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>แผนที่</a>
                        </li><hr>
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
            <header class="header-desktop">

            </header>
            <!-- END HEADER DESKTOP-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-map"></i>แผนที่</h3>

                                            <div id="map"></div>

                                        <style>#map{
                                                        height: 600px;
                                                    }
                                        </style>
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
        <script src="vendor/vector-map/jquery.vmap.js"></script>
        <script src="vendor/vector-map/jquery.vmap.min.js"></script>
        <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="vendor/vector-map/jquery.vmap.world.js"></script>
        <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
        <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
        <script src="vendor/vector-map/jquery.vmap.france.js"></script>
        <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
        <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
        <script src="vendor/vector-map/jquery.vmap.usa.js"></script>


        <!-- Main JS-->
        <script src="js/main.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU4AlB2IxjVm3usy3xHvkzopAlgCc2E2w" type="text/javascript"></script>


        <script>
            var dataJson = {};
            var map;
            var marker = [];
            var gmarkers = [];
            var casemarker = [];
            var securkku = { lat: 16.477920, lng: 102.819188 }; //รปภ.มข.
            var kku = {lat: 16.462105, lng: 102.813951};
            dataJson.token = localStorage.getItem('token');
      
		     var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: kku,
			mapTypeId: 'satellite'
		    });
      
            infowindow = new google
			.maps
			.InfoWindow();

            $.ajax(
                {
                    type: "POST",
                    url: "getJson.php",
                    data: '',
                    success: function(result) {
                        //console.log(result)
                        $.each(result, function(key, value){ // loop..
                            //content = content + "Location : " + item.case_id +  ', Lat = ' + item.lat + ', Lng = ' + item.lng + ' <br>';
                            //var caselat = item.lat;
                            //var caselng = item.lng;
                            //console.log(value.lat)

                            casemarker = new google.maps.Marker({
                                position: {
                                    lat:parseFloat(value.lat),
                                    lng:parseFloat(value.lng)
                            },
                            animation: google.maps.Animation.DROP,
                            map: map,
                            
                        });
                        
                        google
                        .maps
                        .event
                        .addListener(casemarker, 'click', (function (marker, i) {
                            return function () {
                            infowindow.setContent(`<p style="text-align:center; font-size:17px">ตำแหน่งการเกิดอุบัติเหตุที่ : ${value.case_id} <br> ${value.places} </p>`);
                            infowindow.open(map, marker);
                        }
                    })(casemarker, key));
                    }); // ..loop
                       // $('#content').html(content);
                }});    

                
                     

                    
        </script>



</body>

</html>
<!-- end document-->
