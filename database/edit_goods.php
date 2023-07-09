<?php
include('db.php');
include('../style/bootstrap5.php');
$brand = $_POST['brand'];

$get_brand = "SELECT * FROM `brand` WHERE `brand_name` LIKE '$brand'";
$result_brand = mysqli_query($conn, $get_brand);
$row_brand = mysqli_fetch_assoc($result_brand);
$brand_id = $row_brand['brand_id'];

$id = $_POST['id'];
$last_id = $id;
$name = $_POST['name'];
$years = $_POST['years'];
$price = $_POST['price'];
$advert = $_POST['advert'];
// $file = $_POST['fileupload'];
$detail = $_POST['detail'];

print_r($detail);


// $total = count($_FILES['fileUpload']['name']);
// echo $total;

?>

<!-- <table class="table table-bordered table-striped table-hover">
    <tr>
        <th>symbol</th>
        <th>value</th>
    </tr>
    <tr>
        <th>ID</th>
        <th><?php echo $last_id; ?></th>
    </tr>
    <tr>
        <th>name</th>
        <th><?php echo $name; ?></th>
    </tr>
    <tr>
        <th>years</th>
        <th><?php echo $years; ?></th>
    </tr>
    <tr>
        <th>price</th>
        <th><?php echo $price; ?></th>
    </tr>
    <tr>
        <th>advert</th>
        <th><?php echo $advert; ?></th>
    </tr>

    <tr>
        <th>detail</th>
        <th><?php echo $detail; ?></th>
    </tr>
    <tr>
        <th>sql</th>
        <th> -->
<?php
$sql_goods = "UPDATE `goods` SET `brand_id` = '$brand_id', `goods_name` = '$name', `goods_year` = '$years', `goods_price` = '$price', `goods_detail` = '$detail', `goods_advert` = '$advert' WHERE `goods`.`goods_id` = $id";
if (mysqli_query($conn, $sql_goods)) {
    // echo "success";
}
// $last_id = mysqli_insert_id($conn);
// echo $last_id;
?>
<!-- </th>
    </tr>
    <tr>
        <th>file</th>
        <th> </th>
    </tr>
</table> -->

<?php
if (isset($_FILES["filUpload"])) {
    $countfiles = count($_FILES['filUpload']['name']);
    echo $countfiles;
    for ($i = 0; $i < $countfiles; $i++) {
        $filename = $_FILES['filUpload']['name'][$i];
        // echo $_FILES['filUpload']['tmp_name'][$i] . " <- File upload";
        // echo $filename;
        $sql = "INSERT INTO `goods_img` (`goods_img_id`, `goods_id`, `goods_img_src`) VALUES (NULL, '$id', '$filename')";
        mysqli_query($conn, $sql);
        copy($_FILES['filUpload']['tmp_name'][$i], "../img/goods/" . $filename);
    }
    // echo "Copy/Upload Complete";
}
?>

<?php
$spec_count = 40;

for ($i = 0; $i < $spec_count; $i++) {
    // echo $i . "\t";
    $status =  $_POST['spec' . $i];
    // echo $status;
    $comment = $_POST['com_spec_comment_' . $i];
    if ($comment) {
        $sql = "INSERT INTO `spec_comment` (`goods_id`, `chk_spec_id`, `spec_comment_detail`) VALUES ('$last_id', '$i', '$comment')";
        mysqli_query($conn, $sql);
        // echo $sql;
    } else {
        $comment = "";
        // echo "not found";
    }
    $sql = "INSERT INTO `chk_spec` (`goods_id`, `chk_spec_id`, `chk_spec_status`) VALUES ('$last_id', '$i', '$status')";
    mysqli_query($conn, $sql);
    echo "$sql";
    echo "<br>";
}

?>
<?php
$table = [
    'outside',
    'front_light',
    'fog_lamp',
    'ruby_bumper',
    'windshield',
    'front_fender',
    'car_door',
    'car_brand_symbol',
    'rear_fender',
    'car_roof',
    'handrail',
    'window_glass',
    'engine_compartment_wall',
    'shock_absorber',
    'front_beam',
    'side_mirror',
    'alloy',
    'tire',
    'car_frame',
    'seat',
    'speed_meter',
    'entertainment_control_system',
    'multimedia_system',
    'instrument_panel',
    'car_lights',
    'ceiling_light',
    'handbrake',
    'ceiling',
    'lock_system',
    'car_floor',
    'window_film',
    'engine_and_gear',
    'powertrain',
    'cooling_system'
];
echo "<table class='table table-bordered table-striped table-hover'>
    <tr>
    <th>TABLE</th>
    <th>count</th>
    <th>Value</th>
    <th>SQL Result</th>
    </tr>
";
$comment  = "";
for ($i = 0; $i < count($table); $i++) {
    $count = $_POST['count_' . $table[$i]];
    $qoute = $table[$i];
    // echo "<tr>";
    // echo "<td>";
    // echo  $table[$i];
    // echo "</td>";
    // echo "<td>";
    // echo  $count;
    // echo "</td>";
    // echo "<td>";

    for ($j = 1; $j <= $count; $j++) {

        $id = $_POST[$table[$i] . '_id_' . $j];
        $value = $_POST[$table[$i] . '_value_' . $j];
        if (($_POST['com_' . $table[$i] . '_comment_' . $j])) {
            $comment = $_POST['com_' . $table[$i] . '_comment_' . $j];
            $sql = "INSERT INTO `goods_chk_$table[$i]_comment` (`goods_id`, `goods_chk_$table[$i]_id`, `goods_chk_comment`) VALUES ('$last_id', '$id', '$comment')";
            mysqli_query($conn, $sql);
        } else {
            $comment = "";
            $sql = "";
        }
        $str = 'goods_chk_' . $qoute . '_id';
        $sql = "INSERT INTO `chk_$qoute` (`goods_id`, `$str`, `goods_chk_status_id`) VALUES ('$last_id', '$id', '$value');";
        // echo  " ID => " . $id;
        // echo "<br>";
        // echo " VALUE => " . $value;
        // echo "<br>";
        // echo " comment => " . $comment;
        // echo "<br>";
        // echo " sql => " . $sql;
        // echo "<br>";
        // echo "----------------";
        // echo "<br>";
        if (mysqli_query($conn, $sql)) {
            $status =  "$table[$i] successfully";
?>
            <script>
                success("../admin/");
            </script>
<?php
        } else {
            $status =  "Error INSERT table: " . $table[$i] . " " . mysqli_error($conn);
        }
    }
    // echo "<td>";
    // echo $status;
    // echo "</td>";
    // echo "</td>";
    // echo "</tr>";
} ?>