<?
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

$str = "";
?>
<table class="table stript">
    <tr>
        <th>#</th>
        <th>Table</th>
        <th>Script</th>
    </tr>
    <?php
    for ($i = 0; $i < count($table); $i++) {
    ?>
        <tr>
            <th><?php echo $i; ?></th>
            <th><?php echo $table[$i] ?></th>

        </tr>
    <?php
    }
    ?>
</table>