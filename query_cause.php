<?php
include 'connect.php';

$a1 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถเสียหลักเอง หรือล้มเอง'");
$a = $a1->rowCount();

$a2 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์)'");
$b = $a2->rowCount();

$a3 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถยนต์)'");
$c = $a3->rowCount();

$a4 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนฟุตบาท เสาไฟฟ้า ป้ายจราจรหรือสิ่งกีดขวาง'");
$d = $a4->rowCount();

$a5 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนกันหรือชนท้าย (ระหว่างรถจักรยานยนต์ - รถจักรยานยนต์)'");
$e = $a5->rowCount();

$a6 = $conn->query("SELECT cause FROM cases WHERE cause = 'แซงหรือตัดหน้าระยะกระชั้นชิด โดยไม่ให้สัญญาณ'");
$f = $a6->rowCount();

$a7 = $conn->query("SELECT cause FROM cases WHERE cause = 'เมาสุรา เสพสารออกฤทธิ์ต่อประสาทหรือหลับใน'");
$g = $a7->rowCount();

$a8 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถไม่ชำนาญเส้นทาง'");
$h = $a8->rowCount();

$a9 = $conn->query("SELECT cause FROM cases WHERE cause = 'อุปกรณ์ชำรุด เครื่องขัดข้อง'");
$i = $a9->rowCount();

$a10 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์ - รถจักรยานยนต์พ่วง)'");
$j = $a10->rowCount();

$a11 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนกันหรือชนท้าย (ระหว่างรถยนต์โดยสาร - รถยนต์)'");
$k = $a11->rowCount();

$a12 = $conn->query("SELECT cause FROM cases WHERE cause = 'เจ็บป่วยกะทันหันขณะขับขี่'");
$l = $a12->rowCount();

$a13 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถชนกันหรือชนท้าย (ระหว่างรถบรรทุก - รถจักรยานยนต์)'");
$m = $a13->rowCount();

$a14 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถด้วยความเร็ว หรือประมาท'");
$n = $a14->rowCount();

$a15 = $conn->query("SELECT cause FROM cases WHERE cause = 'ขับรถฝ่าฝืนเครื่องหมาย/สัญญาณจราจร'");
$o = $a15->rowCount();

$a16 = $conn->query("SELECT cause FROM cases WHERE cause = 'คนหรือสัตว์ วิ่งตัดหน้า กะทันหัน'");
$p = $a16->rowCount();

$a17 = $conn->query("SELECT cause FROM cases WHERE cause = 'อื่นๆ'");
$q = $a17->rowCount();

?>