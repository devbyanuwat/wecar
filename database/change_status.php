<?php
include('../database/db.php');
include('../style/bootstrap5.php');
$id = $_GET['id'];
$status = $_GET['status'];
$sql = "UPDATE `goods` SET `goods_status` = '$status' WHERE `goods`.`goods_id` = $id";
mysqli_query($conn, $sql);
header("location:../admin/");
