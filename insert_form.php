<?php
include "connect.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
try {

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
    
    



    $stmt->execute();
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $stmt . "<br>" . $e->getMessage();
    }

?>
