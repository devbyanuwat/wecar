<?php
error_reporting(0);
$conn = mysqli_connect("localhost:3307", "root", "", "weusecar");
mysqli_set_charset($conn, "utf8");
if(!$conn){
    // echo "failed to connect to DB";
}
?>