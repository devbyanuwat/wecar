<div class="bg-light">
    <div class="row">
        <div class="col-6">
            <div class=" text-dark accordion accordion-flush bg-light" id="accordionFlushExample">

                <?php
                // echo $id;
                for ($i = 0; $i < 17; $i++) {
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

                                                $sql_comm = "SELECT * FROM `goods_chk_`.$table[$i].`_comment` WHERE `goods_id` = $id AND `goods_chk_`.$table[$i].`_id` = $id_car ORDER BY `goods_chk_`.$table[$i].`_comment`.`goods_chk_comment` DESC";
                                                $result_comm = mysqli_query($conn, $sql_comm);
                                                $row_comm = mysqli_fetch_assoc($result_comm);
                                                $comm_car = $row_comm['goods_chk_comment'];

                                            ?>
                                                <div class="row">
                                                    <li class="list-group-item rounded d-flex justify-content-between  ">
                                                        <div class="col-6  ">
                                                            <?php
                                                            if ($comm_car) {
                                                            ?>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger bi bi-x-circle" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-check-circle" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                                </svg>
                                                            <?php
                                                            }
                                                            ?>
                                                            <?php echo $name_car ?>
                                                        </div>

                                                        <div class="col-6 fs-6 text-danger text-end"> <?php echo $comm_car; ?></div>
                                                    </li>
                                                </div>

                                            <?php
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </ul>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="col-6">
            <div class=" text-dark accordion accordion-flush bg-light" id="accordionFlushExample2">

                <?php
                // echo $id;
                for ($i = 17; $i < 34; $i++) {
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
                        <div id="flush-collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i ?>" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">

                                <ul class="list-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php

                                            while ($row_car = mysqli_fetch_assoc($result_car)) {
                                                $id_car = $row_car['goods_chk_' . $table[$i] . '_id'];
                                                $name_car = $row_car['goods_chk_' . $table[$i] . '_name'];

                                                $sql_comm = "SELECT * FROM `goods_chk_`.$table[$i].`_comment` WHERE `goods_id` = $id AND `goods_chk_`.$table[$i].`_id` = $id_car ORDER BY `goods_chk_`.$table[$i].`_comment`.`goods_chk_comment` DESC";
                                                $result_comm = mysqli_query($conn, $sql_comm);
                                                $row_comm = mysqli_fetch_assoc($result_comm);
                                                $comm_car = $row_comm['goods_chk_comment'];

                                            ?>
                                                <div class="row">
                                                    <li class="list-group-item rounded d-flex justify-content-between  ">
                                                        <div class="col-6  ">
                                                            <?php
                                                            if ($comm_car) {
                                                            ?>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger bi bi-x-circle" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-check-circle" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                                </svg>
                                                            <?php
                                                            }
                                                            ?>
                                                            <?php echo $name_car ?>
                                                        </div>

                                                        <div class="col-6 fs-6 text-danger text-end"> <?php echo $comm_car; ?></div>
                                                    </li>
                                                </div>

                                            <?php
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </ul>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </div>
</div>