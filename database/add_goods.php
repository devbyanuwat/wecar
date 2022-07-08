<?php
include('db.php');
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
echo "<table border='1'>
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
    echo "<tr>";
    echo "<td>";
    echo  $table[$i];
    echo "</td>";
    echo "<td>";
    echo  $count;
    echo "</td>";
    echo "<td>";

    for ($j = 1; $j <= $count; $j++) {

        $id = $_POST[$table[$i] . '_id_' . $j];
        $value = $_POST[$table[$i] . '_value_' . $j];
        if (($_POST['com_' . $table[$i] . '_comment_' . $j])) {
            $comment = $_POST['com_' . $table[$i] . '_comment_' . $j];
            // com_outside_comment_
        } else {
            $comment = "";
        }
        $str = 'goods_chk_' . $qoute . '_id';
        $sql = "INSERT INTO `chk_$qoute` (`goods_id`, `$str`, `goods_chk_status_id`) VALUES ('3', '$id', '$value');";
        echo  " ID => " . $id;
        echo "<br>";
        echo " VALUE => " . $value;
        echo "<br>";
        echo " comment => " . $comment;
        echo "<br>";
        echo $sql;
        echo "<br>";
        echo "----------------";
        echo "<br>";
        if (mysqli_query($conn, $sql)) {
            $status =  "$table[$i] successfully";
        } else {
            $status =  "Error INSERT table: " . $table[$i] . " " . mysqli_error($conn);
        }
    }
    echo "<td>";
    echo $status;
    echo "</td>";
    echo "</td>";
    echo "</tr>";
}


// $front_light_id = array();
// $front_light_value = array();

// for ($i = 1; $i <= $count_front_light; $i++) {
//     array_push($front_light_id, $_POST['front_light_id_' . $i]);
//     array_push($front_light_value, $_POST['front_light_value_' . $i]);
//     echo "<br>";
// }
// echo "id\t";
// print_r($front_light_id);
// echo "<br>";
// echo "value\t";
// print_r($front_light_value);
