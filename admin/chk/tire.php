<div class="bg-light shadow p-3 pt-3 rounded-3">
    <div class="<?php echo $topic; ?>">
        ยาง
        <br>
    </div>
    <div class="row">
        <!-- <div class="col-2 bg-light"></div> -->
        <div class="col-12 d-flex justify-content-around text-start">
            <div class="fs-6">น้อยกว่า 50%</div>
            <div class="fs-6">50-70%</div>
            <div class="fs-6">มากกว่า 70%</div>
            <br>
        </div>
    </div>
    <div class="row d-flex">
        <?php
        $sql_tire = "SELECT * FROM `goods_chk_tire`";
        $result_tire = mysqli_query($conn, $sql_tire);
        $count_tire =  mysqli_num_rows($result_tire);

        while ($row_tire = mysqli_fetch_assoc($result_tire)) {
            $chk_id = $row_tire['goods_chk_tire_id'];

        ?>

            <div class="<?php echo $detail; ?>">

                <input type="hidden" name="tire_id_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_id_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="<?php echo $row_tire['goods_chk_tire_id']; ?>">

                <div class="col-2">
                    <!-- <?php echo $row_tire['goods_chk_tire_name'];  ?> -->
                </div>


            </div>

            <div class="col-12 d-flex justify-content-around">
                <?php
                if ($id > 0) {

                    $sql_tire_value = "SELECT * FROM `chk_tire` WHERE `goods_id` = $id AND `goods_chk_tire_id` = $chk_id ORDER BY `goods_chk_status_id` DESC";

                    $result_tire_value = mysqli_query($conn, $sql_tire_value);
                    $row_tire_value = mysqli_fetch_assoc($result_tire_value);



                    if ($row_tire_value['goods_chk_status_id'] == 1) {
                ?>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="1" required checked>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="2" required>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="3" required>
                        </div>
                    <?php
                    } else if ($row_tire_value['goods_chk_status_id'] == 2) {
                    ?>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="1" required>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="2" required checked>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="3" required>
                        </div>
                    <?php
                    } else if ($row_tire_value['goods_chk_status_id'] == 3) {
                    ?>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="1" required>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="2" required>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="3" required checked>
                        </div>
                    <?php
                    }

                    $sql_com = "SELECT * FROM `goods_chk_tire_comment` WHERE `goods_id` = $id AND `goods_chk_tire_id` = $chk_id";
                    $result_com = mysqli_query($conn, $sql_com);
                    $row_com = mysqli_fetch_assoc($result_com);
                    $comm = $row_com['goods_chk_comment'];
                    if ($row_com['goods_chk_comment']) {
                    ?>
                        <a style="cursor: pointer;" id="a_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>" onclick="add_comment('tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </a>
            </div>
            <div style="display:block;" class="text-end text-secondary fs-6 " id="c_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>">
                <span name="tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>">
                    <?php echo $comm ?>
                </span>
                <input type='hidden' name='com_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>' id='com_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>' value='<?php echo $comm ?>'>
                <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>')"></button>
            </div>
        <?php
                    } else {
        ?>
            <a style="cursor: pointer;" id="a_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>" onclick="add_comment('tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                </svg>
            </a>
    </div>
    <div style="display:none;" class="text-end text-secondary fs-6 " id="c_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>">
        <span name="tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>">
            <?php echo $comm ?>
        </span>
        <input type='hidden' name='com_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>' id='com_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>' value='<?php echo $comm ?>'>
        <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>')"></button>
    </div> <?php
                    }
                } else { ?>
<div class="form-check form-check-inline ">
    <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="1" required>
</div>
<div class="form-check form-check-inline ">
    <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="2" required>
</div>
<div class="form-check form-check-inline ">
    <input class="form-check-input" type="radio" name="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_value_<?php echo $row_tire['goods_chk_tire_id']; ?>" value="3" required checked>
</div>

<a style="cursor: pointer;" id="a_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>" onclick="add_comment('tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>')">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
    </svg>
</a>
</div>
<div style="display:none;" class="text-end text-secondary fs-6 " id="c_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>">
    <span name="tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>" id="tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>">
        comment
    </span>
    <input type='hidden' name='com_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>' id='com_tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>' value=''>
    <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('tire_comment_<?php echo $row_tire['goods_chk_tire_id']; ?>')"></button>
</div>
<?php
                }
?>



<?php } ?>
<input type="hidden" name="count_tire" id="count_tire" value="<?php echo $count_tire; ?>">
</div>
</div>