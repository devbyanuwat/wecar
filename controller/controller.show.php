<?php
include('../database/db.php');
include('../service/model.show.php');
header('Content-Type:application/json;charset=utf8');

if ($_GET['controller'] == "showProducts") {
    $_res = new ShowProducts($conn);
    $data = $_res->showProductActive();
    echo json_encode($data);
}

exit;
