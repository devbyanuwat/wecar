<?php
error_reporting(1);
$conn = mysqli_connect("localhost", "root", "root", "weusecar");
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    // echo "failed to connect to DB";
} else {
    // echo "database connect successfully.";
}
