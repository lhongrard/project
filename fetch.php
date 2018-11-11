<?php
include('connect.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT cases.*,car.*,sufferer.* from cases,car,sufferer where cases.case_id=car.case_case_id and car.car_id=sufferer.car_car_id";

$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["date"];
 $sub_array[] = $row["time"];
 $sub_array[] = $row["duty"];
 $sub_array[] = $row["places"];
 $sub_array[] = $row["name_suff"];
 $data[] = $sub_array;
};

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>
   