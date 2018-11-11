<?php
include('connect.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM cases";

$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["case_id"];
 $sub_array[] = $row["places"];
 $sub_array[] = $row["lat"];
 $sub_array[] = $row["lng"];
 $data[] = $sub_array;
};

$output = array(
 "draw"             => intval($_POST["draw"]),
 "recordsTotal"     => $filtered_rows,
 "recordsFiltered"  => get_total_all_records(),
 "data"             => $data
);
echo json_encode($output);
?>
   