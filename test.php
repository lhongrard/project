<?php
include 'connect.php';

$result = $conn->prepare("SELECT * FROM cases");
$result->execute();
while($rs = $result->fetch()){
    echo $rs['case_id'];
    echo $rs['places'];
    echo $rs['lat'];
    echo $rs['lng'];
}
?>