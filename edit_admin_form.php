<?php
include 'connect.php';

// echo "<pre>";
// print_r ($_POST);
// echo "</pre>";

try{


        $id_case = $_POST['case_id'];
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
        window.location.href='edit.php?case=$id_case'
        </script>";
}
catch(PDOException $e)
{
    echo "<script type='text/javascript'> 
        
        alert('แก้ไขข้อมูลไม่สำเสร็จ ติดต่อผู้ดูแลระบบ');
        window.location.href='edit.php?case=$id_case'
        </script>";
    }

?>