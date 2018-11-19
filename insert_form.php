<?php
include "connect.php";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
try {
    //insert ข้อมูลcase
    $date=$_POST["date"];
    $time=$_POST["time"];
    $select_places=$_POST["select_places"];
    $otherplaces_des=$_POST["otherplaces_des"];
    $case_location_lat = $_POST["case_location_lat"];
    $case_location_lng = $_POST["case_location_lng"];
    $num_motor = 0;
    $num_car = 0;
    $num_other = 0;
    $select_cause = $_POST["cause"];
    $other_cause_des = $_POST["othercause_des"];
    $injured = $_POST["injured"];
    $decreased = $_POST["decreased"];
    $note = $_POST["note"];

    $time1 = date("H:i:s",strtotime($time));
    $startM = date("H:i:s",strtotime("08:00:00"));
    $startN = date("H:i:s",strtotime("16:00:00"));
    $startE = date("H:i:s",strtotime("23:59:00"));
    if($time1 >= $startM && $time1 < $startN){
        $duty = "เช้า";
    }else if($time1 >= $startN && $time1 <= $startE){
        $duty = "บ่าย";
    }else {
        $duty = "ดึก";
    }
    if($_FILES['img']["name"]!=null){
        // upload image
        $ext = pathinfo(basename($_FILES['img']['name']), PATHINFO_EXTENSION);
        $new_image_name = 'img_'.uniqid().".".$ext;
        $target_dir = "./uploads/images/";
        $target_file = $target_dir . $new_image_name;
        // uploading
        $success = move_uploaded_file($_FILES['img']['tmp_name'], $target_file) ;
        if ($success==FALSE){
            echo "ขออภัย มีปัญหาเกิดขึ้นขณะทำการอัพโหลดรูปของท่าน";
            exit();
        }
        $img2 = $new_image_name;
    }else{
        $img2 = null;
    }


  

    // $place = "";
    // if ($select_places == "อื่นๆ"){
    //     $place = $otherplaces_des;
    // }
    // else {
    //     $place = $select_places;
    // }

    $cause = "";
    if ($select_cause == "อื่นๆ"){
        $cause = $other_cause_des;
    }
    else {
        $cause = $select_cause;
    }

    
    


    $stmt = $conn->prepare("INSERT INTO `cases`(
        `date`, 
        `time`, 
        `duty`, 
        `places`, 
        `lat`, 
        `lng`,  
        `cause`, 
        `places_des`,
        `injured`, 
        `deceased`, 
        `note`,
        `img`
        ) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->bindParam('1', $date);
    $stmt->bindParam('2', $time);
    $stmt->bindParam('3', $duty);
    $stmt->bindParam('4', $select_places);
    $stmt->bindParam('5', $case_location_lat);
    $stmt->bindParam('6', $case_location_lng);
    $stmt->bindParam('7', $cause);
    $stmt->bindParam('8', $otherplaces_des);
    $stmt->bindParam('9', $injured);
    $stmt->bindParam('10', $decreased);
    $stmt->bindParam('11', $note);
    $stmt->bindParam('12', $img2);

    
     $stmt->execute(); //เอาเข้า db
     $id_case = $conn->lastInsertId();
     
    // echo "New record created successfully";

    $car = $_POST["car"];
    for ($i=0; $i<count($car);$i++){
        // echo "<pre>";
        // print_r($car[$i]);
        // echo "</pre>";
        if($car[$i]["car_type"] == 'รถยนต์'){
            $num_car++;
        }else if($car[$i]["car_type"] == 'รถจักรยานยนต์'){
            $num_motor++;
        }else if($car[$i]["car_type"] == 'รถอื่นๆ'){
            $num_other++;
        }
         $stmt2 = $conn->prepare("INSERT INTO `car`(
        `case_case_id`,
         `car_type`,
          `brand`, 
          `series`,
          `color`, 
          `car_reg`
          ) 
        VALUES (?,?,?,?,?,?)");
        $stmt2->bindParam('1', $id_case);
        $stmt2->bindParam('2', $car[$i]["car_type"]);
        $stmt2->bindParam('3', $car[$i]["brand"]);
        $stmt2->bindParam('4', $car[$i]["series"]);
        $stmt2->bindParam('5', $car[$i]["color"]);
        $stmt2->bindParam('6', $car[$i]["car_reg"]);
        
        $stmt2->execute(); //เอาเข้า db
        $id_car = $conn->lastInsertId();

        for ($j=0; $j<count($car[$i]["suff"]);$j++){
            $suff_type = "";
            $faculty = "";

            if ($car[$i]["suff"][$j]["type_suff"] == "บุคลากร"){
                $suff_type = "บุคลากร";
            }
            else if ($car[$i]["suff"][$j]["type_suff"] == "บุคคลภายนอก"){
                $suff_type = "บุคคลภายนอก";
            }
            else {
                $suff_type = "นักศึกษา";
                $faculty = $car[$i]["suff"][$j]["type_suff"];
            }

            $stmt3 = $conn->prepare("INSERT INTO `sufferer`(
            `car_car_id`,
            `name_suff`, 
            `type_suff`, 
            `faculty`) VALUES (?,?,?,?)");
                $stmt3->bindParam('1', $id_car);
                $stmt3->bindParam('2', $car[$i]["suff"][$j]["name_suff"]);
                $stmt3->bindParam('3', $suff_type);
                $stmt3->bindParam('4', $faculty);
                        
                $stmt3->execute(); //เอาเข้า db

            }
        }

        $sql2 = "UPDATE `cases` SET 
        `num_other`='$num_other',
        `num_car`='$num_car',
        `num_motor`='$num_motor'
        WHERE `case_id`='$id_case'
        ";
        $stmt99 = $conn->prepare($sql2);
         $stmt99->execute(); //เอาเข้า db


        echo "<script type='text/javascript'> 
        
        alert('บันทึกสำเสร็จแล้ว');
        window.location.href='form.php'
        </script>";
        // header("location: form.php");


    }
catch(PDOException $e)
    {
        
        echo "<script type='text/javascript'> 
        
        alert('บันทึกไม่สำเสร็จ ติดต่อผู้ดูแลระบบ');
        window.location.href='form.php'
        </script>";
        // echo "<script type='text/javascript'> alert('มีข้อผิดพลาดในการบันทึกข้อมูล'); </script>";
        // header("location: form.php");
    


    }

?>
