<?php
include "connect.php";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
try {
    //insert ข้อมูลcase
    $date=$_POST["date"];
    $time=$_POST["time"];
    $duty=$_POST["duty"];
    $select_places=$_POST["select_places"];
    $otherplaces_des=$_POST["otherplaces_des"];
    $case_location_lat = $_POST["case_location_lat"];
    $case_location_lng = $_POST["case_location_lng"];
    $num_motor = $_POST["num_motor"];
    $nub_car = $_POST["nub_car"];
    $num_other = $_POST["num_other"];
    $select_cause = $_POST["cause"];
    $other_cause_des = $_POST["othercause_des"];
    $injured = $_POST["injured"];
    $decreased = $_POST["decreased"];
    $note = $_POST["note"];
    $img = $_POST["img"];


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
        `num_motor`, 
        `num_car`, 
        `num_other`, 
        `cause`, 
        `places_des`,
        `injured`, 
        `deceased`, 
        `note`
        ) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->bindParam('1', $date);
    $stmt->bindParam('2', $time);
    $stmt->bindParam('3', $duty);
    $stmt->bindParam('4', $select_places);
    $stmt->bindParam('5', $case_location_lat);
    $stmt->bindParam('6', $case_location_lng);
    $stmt->bindParam('7', $num_motor);
    $stmt->bindParam('8', $nub_car);
    $stmt->bindParam('9', $num_other);
    $stmt->bindParam('10', $cause);
    $stmt->bindParam('11', $otherplaces_des);
    $stmt->bindParam('12', $injured);
    $stmt->bindParam('13', $decreased);
    $stmt->bindParam('14', $note);
    
     $stmt->execute(); //เอาเข้า db
     $id_case = $conn->lastInsertId();
     
    // echo "New record created successfully";

    $car = $_POST["car"];
    for ($i=0; $i<count($car);$i++){
        // echo "<pre>";
        // print_r($car[$i]);
        // echo "</pre>";

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
