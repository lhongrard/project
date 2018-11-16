<?php
    include 'connect.php';
try{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $role_type_role_id = $_POST['role'];
    $name = $_POST['name'];

    $stmt  = $conn->prepare("INSERT INTO `member` (
        `username`, 
        `role_type_role_id`, 
        `name_mem`, 
        `login_password`, 
        `phone`
        ) 
        VALUES (?,?,?,?,?) ");
    
    $stmt->bindParam('1', $username);
    $stmt->bindParam('2', $role_type_role_id);
    $stmt->bindParam('3', $name);
    $stmt->bindParam('4', $password);
    $stmt->bindParam('5', $phone);

    $stmt->execute();

    echo "<script type='text/javascript'> 
        
        alert('บันทึกสำเสร็จแล้ว');
        window.location.href='table_admin.php'
        </script>";
}
catch(PDOException $e)
    {

        echo "<script type='text/javascript'> 
        
        alert('บันทึกไม่สำเสร็จ ติดต่อผู้ดูแลระบบ');
        window.location.href='form_add_admin.php'
        </script>";
        // echo "<script type='text/javascript'> alert('มีข้อผิดพลาดในการบันทึกข้อมูล'); </script>";
        // header("location: form.php");
    


    }

?>