<?php
include 'connect.php';

try{
        $nameMem = $_POST['name'];
        $loginPassword = $_POST['password'];
        $role = $_POST['role'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];

        $sql = "UPDATE `member` SET role_type_role_id = '$role',
        name_mem = '$nameMem',
        login_password = '$loginPassword',
        phone = '$phone' 
        WHERE username = '$username' ";

        $stmt = $conn->prepare($sql);
        $stmt->execute(); //เอาเข้า db

    echo "<script type='text/javascript'> 
        
        alert('แก้ไขข้อมูลสำเสร็จแล้ว');
        window.location.href='table_admin.php'
        </script>";
}
catch(PDOException $e)
{
    echo "<script type='text/javascript'> 
        
        alert('แก้ไขข้อมูลไม่สำเสร็จ ติดต่อผู้ดูแลระบบ');
        window.location.href='edit_admin.php?case=$username'
        </script>";
    }

?>