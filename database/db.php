<?php
$conn = mysqli_connect("localhost", "root", "12345678", "weusecar");
mysqli_set_charset($conn, "utf8");
if(!$conn){
    // echo "failed to connect to DB";
}
?>
