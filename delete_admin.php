<?php
include 'connect.php';

try{
    $usern = $_GET['user'];

    $sql = "DELETE FROM member WHERE member.username='$usern' ";
    $conn->exec($sql);

    echo "<script type='text/javascript'> 
        alert('ลบข้อมูลเรียบร้อยแล้ว');
        window.location.href='table_admin.php'
        </script>";

}
catch(PDOException $e)
{
    // echo $e->getMessage();
    echo "<script type='text/javascript'> 
        
        alert('ลบข้อมูลไม่สำเร็จ');
        window.location.href='table_admin.php'
        </script>";
    }

?>