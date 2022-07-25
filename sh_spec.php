<div class="text-dark accordion accordion-flush bg-light" id="accordionFlushExample">
    <?php
    // echo $id;
    for ($i = 0; $i < 20; $i++) {
        # code...
        $list = "goods_chk_" . $table[$i];
        $sql_car = "SELECT * FROM `$list`";
        $result_car = mysqli_query($conn, $sql_car);


    ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading<?php echo $i ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i ?>">
                    <?php echo $table_th[$i] ?>
                </button>
            </h2>
            <div id="flush-collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i ?>" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                    <ul class="list-group ">
                        <div class="row">
                            <div class="col-12">
                                <?php

                                while ($row_car = mysqli_fetch_assoc($result_car)) {
                                    $id_car = $row_car['goods_chk_' . $table[$i] . '_id'];
                                    $name_car = $row_car['goods_chk_' . $table[$i] . '_name'];

                                ?>
                                    <li class="list-group-item rounded d-flex justify-content-between">
                                        <div class="row">
                                            <div class="col-6 fs-6"><?php echo $name_car ?></div>

                                            <?php $sql_comm = "SELECT * FROM `goods_chk_outside_comment` WHERE `goods_id` = 41 AND `goods_chk_outside_id` = 1 ORDER BY `goods_chk_outside_comment`.`goods_chk_comment` DESC"; ?>
                                            <div class="col-6 fs-6 text-danger"> <?php echo $comm_car; ?></div>

                                    </li>
                                <?php
                                }
                                ?>


                            </div>
                        </div>
                    </ul>

                </div>
            </div>

        <?php
    }
        ?>

        </div>

        <script>

        </script>