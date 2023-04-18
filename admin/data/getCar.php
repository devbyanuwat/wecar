<?php

header('content-type:Application/json');
?>

<?php
function getCar()
{
    include('../../database/db.php');

    // echo "start";
    $sql = "SELECT * FROM `goods`";
    // echo $conn ? "connect" : "failed.";
    $result = mysqli_query($conn, $sql);
    $nums = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $sql_src = "SELECT * FROM `goods_img` WHERE `goods_id` = '" . $row['goods_id'] . "'";
        $result_src = mysqli_query($conn, $sql_src);
        $row_src = mysqli_fetch_assoc($result_src);
        $src[] = $row_src['goods_img_src'];

        $data[$nums]['nums'] = $nums;
        $data[$nums]['img'] = $src;
        $data[$nums]['model'] = $row['goods_name'];
        $data[$nums]['status'] = $row['goods_status'];
        $data[$nums]['setting'] = 'btn';
        $nums++;
    }

    return $data;
}

echo json_encode(
    array(
        "data" => (object)getCars()
    )
);

function getCars()
{
    include('../../database/db.php');
    $sql = "SELECT * FROM `goods`";
    // echo $conn ? "connect" : "failed.";
    $result = mysqli_query($conn, $sql);

    while ($rows = mysqli_fetch_assoc($result)) {
        return $rows;
    }
}
?>