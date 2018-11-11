<?php
	header('Content-Type: application/json');

	$conn = mysqli_connect("localhost","root","","project1");
	$conn->set_charset("utf8");

	$sql = "SELECT * FROM cases";

	$query = mysqli_query($conn,$sql);
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>