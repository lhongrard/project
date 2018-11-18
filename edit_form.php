<?php
include 'connect.php';

// echo "<pre>";
// print_r ($_POST);
// echo "</pre>";

try{

        $date = $_POST['date'];
        $time= $_POST['time'];   
        $duty= $_POST['duty'];
        $selectPlace= $_POST['select_places'];
        $otherPlace= $_POST['otherplaces_des']; 
        $lat= $_POST['case_location_lat'];
        $lng= $_POST['case_location_lng'];
        $numO= $_POST['num_motor'];
        $numC= $_POST['nub_car'];
        $numM= $_POST['num_other'];
        $cause= $_POST['cause'];
        $otherDes= $_POST['othercause_des'];
        $inju= $_POST['injured'];
        $decreased= $_POST['decreased'];
        $note= $_POST['note'];
        $id_case = $_POST['case_id'];

        

        $sql2 = "UPDATE `cases` SET `date`='$date',
            `time`='$time',
            `duty`='$duty',
            `places`='$selectPlace',
            `places_des`='$otherPlace',
            `lat`='$lat',
            `lng`='$lng',
            `num_other`='$numO',
            `num_car`='$numC',
            `num_motor`='$numM',
            `cause`='$cause',
            `othercause_des`='$otherDes',
            `injured`='$inju',
            `deceased`='$decreased',
            `note`='$note'
            WHERE `case_id`='$id_case'
            ";
            $stmt99 = $conn->prepare($sql2);
             $stmt99->execute(); //เอาเข้า db


            
        
       
        
        $cars = $_POST["car"];
        
        foreach($cars as $car){

    

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
            $stmt2->bindParam('2', $car["car_type"]);
            $stmt2->bindParam('3', $car["brand"]);
            $stmt2->bindParam('4', $car["series"]);
            $stmt2->bindParam('5', $car["color"]);
            $stmt2->bindParam('6', $car["car_reg"]);
            
            $stmt2->execute(); //เอาเข้า db
            $id_car = $conn->lastInsertId();
            
            foreach($car["suff"] as $new_suff){
                $suff_type = "";
                $faculty = "";
                if ($new_suff["type_suff"] == "บุคลากร"){
                    $suff_type = "บุคลากร";
                }
                else if ($new_suff["type_suff"] == "บุคคลภายนอก"){
                    $suff_type = "บุคคลภายนอก";
                }
                else {
                    $suff_type = "นักศึกษา";
                    $faculty = $new_suff["type_suff"];
                }

                $stmt3 = $conn->prepare("INSERT INTO `sufferer`(
                    `car_car_id`,
                    `name_suff`, 
                    `type_suff`, 
                    `faculty`) VALUES (?,?,?,?)");
                        $stmt3->bindParam('1', $id_car);
                        $stmt3->bindParam('2', $new_suff["name_suff"]);
                        $stmt3->bindParam('3', $suff_type);
                        $stmt3->bindParam('4', $faculty);
                                
                        $stmt3->execute(); //เอาเข้า db
                    }
            }


    $old_car = $_POST['car_id'];
    $old_suff = $_POST['suff_id'];

//     echo "<pre>";
//     print_r ($old_car);
//     echo "</pre>";
//     echo "<pre>";
// print_r ($old_suff);
// echo "</pre>";
//     foreach ($old_suff as $id){
//         $stmt4 = $conn->prepare("DELETE FROM sufferer WHERE suffer_id = ?");
//         $stmt4->bindParam(1,$id);
//         $stmt4->execute();
//     }

    foreach ($old_car as $id){
        $stmt4 = $conn->prepare("DELETE FROM sufferer WHERE car_car_id = ?");
        $stmt4->bindParam(1,$id);
        $stmt4->execute();

        $stmt5 = $conn->prepare("DELETE FROM car WHERE car_id = ?");
        $stmt5->bindParam(1,$id);
        $stmt5->execute();
    }

    echo "<script type='text/javascript'> 
        
        alert('แก้ไขข้อมูลสำเสร็จแล้ว');
        window.location.href='table.php'
        </script>";
}
catch(PDOException $e)
{
    // echo $e;
    // exit();
    echo "<script type='text/javascript'> 
        
        alert('แก้ไขข้อมูลไม่สำเสร็จ ติดต่อผู้ดูแลระบบ');
        window.location.href='table.php'
        </script>";
    }

?>