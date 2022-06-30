<?php
$count_front_light = $_POST['count_front_light'];

$front_light_id = array();
$front_light_value = array();

for ($i = 1; $i <= $count_front_light; $i++) {
    array_push($front_light_id, $_POST['front_light_id_' . $i]);
    array_push($front_light_value, $_POST['front_light_value_' . $i]);
    echo "<br>";
}
echo "id\t";
print_r($front_light_id);
echo "<br>";
echo "value\t";
print_r($front_light_value);
