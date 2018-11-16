<?php
    // session_start();
    require('connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = $password;

    $sql = "SELECT * from member where username = '$username' ";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$expectedPassword = $row['password'];

    if ($hashedPassword == $expectedPassword) {
        if($row['role_type_role_id'] == '1'){
            // $_SESSION["CardH"] = $row['CardH'];
        header("Location: index_admin.php");
        exit();
        }
        else if($row['role_type_role_id'] == '3'){
            // $_SESSION["CardH"] = $row['CardH'];
        header("Location: index_officer.php");
        exit();
        }
        else if($row['role_type_role_id'] == '2'){
        header("Location: index_manager.php");
        exit();
        }

    }
        echo "<script>";
			  echo "alert('รหัสผู้ใช้ หรือ รหัสผ่าน ผิด กรุณาใส่ข้อมูลใหม่ !');";
        echo "location='login.php'";
			  echo "</script>";
}
?>
