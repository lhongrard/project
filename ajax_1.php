<?php
$connect = mysqli_connect("localhost", "root", "", "project1");
$connect->set_charset("utf8");
$query ="SELECT * FROM cases";
$result = mysqli_query($connect, $query) or die ("error");

    while($row = mysqli_fetch_array($result,MYSQLI_BOTH))  { 
		echo $row['case_id'].",";
		echo $row['lat'].",";
		echo $row['lng'].",";
  		};
	mysqli_close($connect);
?>