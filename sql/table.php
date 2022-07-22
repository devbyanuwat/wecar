
<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "weusecar";

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
// echo $table[3];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
for ($i = 0; $i < count($table); $i++) {
    # code...
    $sql = "CREATE TABLE `weusecar`.`goods_chk_$table[$i]_comment` ( `goods_id` INT(11) NOT NULL , `goods_chk_$table[$i]_id` INT(11) NOT NULL , `goods_chk_comment` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;";
    // $sql = "CREATE TABLE `weusecar`.`goods_chk_$table[$i]` ( `goods_chk_$table[$i]_id` INT NOT NULL AUTO_INCREMENT , `goods_chk_$table[$i]_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`goods_chk_$table[$i]_id`)) ENGINE = InnoDB";

    // echo $sql;
    echo "<br>";
    if (mysqli_query($conn, $sql)) {
        echo "Table $table[$i] created successfully";
    } else {
        echo "Error creating table: " . $table[$i] . " " . mysqli_error($conn);
    }
}
mysqli_close($conn);
