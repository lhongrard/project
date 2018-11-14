<?php
include 'connect.php';
// echo ($_GET['case_id']);
$case_id = $_GET['case_id'];
// $id_car = array();

try{


$stmtCase = $conn->prepare("SELECT car_id FROM car WHERE case_case_id =?");
$stmtCase->bindParam(1,$case_id);
$stmtCase->execute();


while ($rows = $stmtCase->fetch()) {
    $stmt5 = $conn->prepare("DELETE FROM sufferer WHERE car_car_id = ?");
    $stmt5->bindParam(1,$rows['car_id']);
    $stmt5->execute();

    $stmt4 = $conn->prepare("DELETE FROM car WHERE car_id = ?");
    $stmt4->bindParam(1,$rows['car_id']);
    $stmt4->execute();

}

    $stmt4 = $conn->prepare("DELETE FROM cases WHERE case_id = ?");
    $stmt4->bindParam(1,$case_id);
    $stmt4->execute();



    echo "<script type='text/javascript'> 
        alert('ลบข้อมูลเรียบร้อยแล้ว');
        window.location.href='table.php'
        </script>";

}
catch(PDOException $e)

{
    // echo $e->getMessage();
    echo "<script type='text/javascript'> 
        
        alert('ลบข้อมูลไม่สำเร็จ');
        window.location.href='table.php'
        </script>";
    }

?>