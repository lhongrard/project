<?php
include 'connect.php';

$a1 = $conn->query("SELECT places FROM cases WHERE places = 'วงเวียนคณะมนุษยศาสตร์และสังคมศาสตร์'");
$x1 = $a1->rowCount();

$a2 = $conn->query("SELECT places FROM cases WHERE places = 'วงเวียนหอพักชายที่ 16'");
$x2 = $a2->rowCount();

$a3 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนหน้าปั๊มน้ำมันปตท.'");
$x3 = $a3->rowCount();

$a4 = $conn->query("SELECT places FROM cases WHERE places = 'ยูเทิร์นหน้าแฟลตจามจุรี'");
$x4 = $a4->rowCount();

$a5 = $conn->query("SELECT places FROM cases WHERE places = 'สี่แยกประตู 6'");
$x5 = $a5->rowCount();

$a6 = $conn->query("SELECT places FROM cases WHERE places = 'วงเวียนคณะวิศวกรรมศาสตร์ (โรตาแล็ค)'");
$x6 = $a6->rowCount();

$a7 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนมอดินแดง ด้านหน้าหอพัก 8 หลัง'");
$x7 = $a7->rowCount();

$a8 = $conn->query("SELECT places FROM cases WHERE places = 'แยกคณะเภสัชศาสตร์'");
$x8 = $a8->rowCount();

$a9 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนมอดินแดง แยกไฟแดง สนง.รปภ.มข.'");
$x9 = $a9->rowCount();

$a10 = $conn->query("SELECT places FROM cases WHERE places = 'ถนนสหศาสตร์ ด้านหน้าคณะสถาปัตยกรรมศาสตร์'");
$x10 = $a10->rowCount();

$a11 = $conn->query("SELECT places FROM cases WHERE places = 'อื่นๆ'");
$x11 = $a11->rowCount();
?>