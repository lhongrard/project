<?php
function get_total_all_records()
{
 include('connect.php');
 $statement = $conn->prepare("SELECT cases.*,car.*,sufferer.* from cases,car,sufferer where cases.case_id=car.case_case_id and car.car_id=sufferer.car_car_id");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>