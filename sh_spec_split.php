<div class="bg-light">


    <div class="row">

        <div class="col-md-4 col-xs-1">
            <?php
            for ($i = 0; $i < 11; $i++) {
                # code...
                $list = "goods_chk_" . $table[$i];
                $sql_car = "SELECT * FROM `$list`";
                $result_car = mysqli_query($conn, $sql_car);
            ?>
                <div class="shadow rounded-3 bg-white m-3">
                    <div class="fs-4 fw-bold ps-4 pt-2">
                        <?php echo $table_th[$i] ?>
                    </div>
                    <?php

                    while ($row_car = mysqli_fetch_assoc($result_car)) {
                        $id_car = $row_car['goods_chk_' . $table[$i] . '_id'];

                        $name_car = $row_car['goods_chk_' . $table[$i] . '_name'];

                        $sql_comm = "SELECT * FROM `goods_chk_$table[$i]_comment` WHERE `goods_id` = $id AND `goods_chk_$table[$i]_id` = $id_car ORDER BY `goods_chk_$table[$i]_comment`.`goods_chk_comment` ASC";
                        // echo $sql_comm." <- sql_comm";
                        $result_comm = mysqli_query($conn, $sql_comm);
                        $row_comm = mysqli_fetch_assoc($result_comm);
                        $comm_car = $row_comm['goods_chk_comment'];
                    ?>

                        <ul class="list-group list-group-flush ps-4">
                            <li class="list-group-item  ">
                                <div class="d-flex justify-content-between">
                                    <div class="justify-content-start g-3">
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
                                        <?php echo $name_car; ?>
                                    </div>
                                    <div class="text-danger">
                                        <?php echo $comm_car; ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php }  ?>
                </div>
            <?php
            } ?>
        </div>
        <div class="col-md-4 col-xs-1">
            <?php
            for ($i = 11; $i < 22; $i++) {
                # code...
                $list = "goods_chk_" . $table[$i];
                $sql_car = "SELECT * FROM `$list`";
                $result_car = mysqli_query($conn, $sql_car);
            ?>
                <div class="shadow rounded-3 bg-white m-3">
                    <div class="fs-4 fw-bold ps-4 pt-2">
                        <?php echo $table_th[$i] ?>
                    </div>
                    <?php

                    while ($row_car = mysqli_fetch_assoc($result_car)) {
                        $id_car = $row_car['goods_chk_' . $table[$i] . '_id'];

                        $name_car = $row_car['goods_chk_' . $table[$i] . '_name'];

                        $sql_comm = "SELECT * FROM `goods_chk_$table[$i]_comment` WHERE `goods_id` = $id AND `goods_chk_$table[$i]_id` = $id_car ORDER BY `goods_chk_$table[$i]_comment`.`goods_chk_comment` ASC";
                        // echo $sql_comm." <- sql_comm";
                        $result_comm = mysqli_query($conn, $sql_comm);
                        $row_comm = mysqli_fetch_assoc($result_comm);
                        $comm_car = $row_comm['goods_chk_comment'];
                    ?>

                        <ul class="list-group list-group-flush ps-4">
                            <li class="list-group-item  ">
                                <div class="d-flex justify-content-between">
                                    <div class="justify-content-start g-3">
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
                                        <?php
                                        if ($table[$i] == "tire") {
                                            $sql_tire = "SELECT * FROM `chk_tire` WHERE `goods_id` = $id ORDER BY `goods_chk_status_id` DESC";
                                            $result_tire = mysqli_query($conn, $sql_tire);
                                            $row_tire = mysqli_fetch_assoc($result_tire);
                                            $value = $row_tire['goods_chk_status_id'];
                                            $text = "0";
                                            if ($value == 1) {
                                                $text = "น้อยกว่า 50%";
                                            } else if ($value == 2) {
                                                $text = "50 - 70%";
                                            } else if ($value == 3) {
                                                $text = "มากกว่า 70%";
                                            }
                                            echo $name_car . " " . $text;
                                        } else {
                                            echo $name_car;
                                        } ?>
                                    </div>
                                    <div class="text-danger">
                                        <?php echo $comm_car; ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php }  ?>
                </div>
            <?php
            } ?>
        </div>
        <div class="col-md-4 col-xs-1">
            <?php
            for ($i = 22; $i < 34; $i++) {
                # code...
                $list = "goods_chk_" . $table[$i];
                $sql_car = "SELECT * FROM `$list`";
                $result_car = mysqli_query($conn, $sql_car);
            ?>
                <div class="shadow rounded-3 bg-white m-3">
                    <div class="fs-4 fw-bold ps-4 pt-2">
                        <?php echo $table_th[$i] ?>
                    </div>
                    <?php

                    while ($row_car = mysqli_fetch_assoc($result_car)) {
                        $id_car = $row_car['goods_chk_' . $table[$i] . '_id'];

                        $name_car = $row_car['goods_chk_' . $table[$i] . '_name'];

                        $sql_comm = "SELECT * FROM `goods_chk_$table[$i]_comment` WHERE `goods_id` = $id AND `goods_chk_$table[$i]_id` = $id_car ORDER BY `goods_chk_$table[$i]_comment`.`goods_chk_comment` ASC";
                        // echo $sql_comm." <- sql_comm";
                        $result_comm = mysqli_query($conn, $sql_comm);
                        $row_comm = mysqli_fetch_assoc($result_comm);
                        $comm_car = $row_comm['goods_chk_comment'];
                    ?>

                        <ul class="list-group list-group-flush ps-4">
                            <li class="list-group-item  ">
                                <div class="d-flex justify-content-between">
                                    <div class="justify-content-start g-3">
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
                                        <?php echo $name_car; ?>
                                    </div>
                                    <div class="text-danger">
                                        <?php echo $comm_car; ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php }  ?>
                </div>
            <?php
            } ?>
        </div>

    </div>
</div>