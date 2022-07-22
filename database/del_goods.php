<?php
include('db.php');

$id = $_POST['id'];

$sql = "DELETE FROM `goods` WHERE `goods`.`goods_id` = $id";

mysqli_query($conn, $sql);
