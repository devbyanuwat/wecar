<div class="bg-light shadow p-3 pt-3 rounded-3">
    <div class="<?php echo $topic; ?>">
        คานหน้ารถ
        <br>
    </div>
    <div class="row">
        <div class="col-6 bg-light"></div>
        <div class="col-5 d-flex justify-content-between text-center  ">
            <div class="fs-6">ผ่าน</div>
            <div class="fs-6">ไม่ผ่าน</div>
            <br>
        </div>
    </div>
    <div class="row">
        <?php
        $sql_front_beam = "SELECT * FROM `goods_chk_front_beam`";
        $result_front_beam = mysqli_query($conn, $sql_front_beam);
        $count_front_beam =  mysqli_num_rows($result_front_beam);

        while ($row_front_beam = mysqli_fetch_assoc($result_front_beam)) {
            $chk_id = $row_front_beam['goods_chk_front_beam_id'];

        ?>

            <div class="<?php echo $detail; ?>">
                <div class="row">
                    <input type="hidden" name="front_beam_id_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_id_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>">
                    <?php echo $row_front_beam['goods_chk_front_beam_name'];  ?>
                </div>

            </div>
            <div class="col-5 d-flex justify-content-between ">
                <?php
                if ($id > 0) {

                    $sql_front_beam_value = "SELECT * FROM `chk_front_beam` WHERE `goods_id` = $id AND `goods_chk_front_beam_id` = $chk_id";
                    $result_front_beam_value = mysqli_query($conn, $sql_front_beam_value);
                    $row_front_beam_value = mysqli_fetch_assoc($result_front_beam_value);


                    if ($row_front_beam_value['goods_chk_status_id'] == 1) {
                ?>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="1" required checked>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="2" required>
                        </div>
                    <?php
                    } else if ($row_front_beam_value['goods_chk_status_id'] == 2) {
                    ?>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="1" required>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="2" required checked>
                        </div>
                    <?php
                    }
                } else { ?>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="1" required>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_value_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" value="2" required>
                    </div>
                <?php
                }
                ?>

                <a style="cursor: pointer;" id="a_front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" onclick="add_comment('front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
            </div>
            <div style="display:none;" class="text-end text-secondary fs-6 " id="c_front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>">
                <span name="front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>" id="front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>">
                    comment
                </span>
                <input type='hidden' name='com_front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>' id='com_front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>' value=''>
                <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('front_beam_comment_<?php echo $row_front_beam['goods_chk_front_beam_id']; ?>')"></button>
            </div>

        <?php } ?>
        <input type="hidden" name="count_front_beam" id="count_front_beam" value="<?php echo $count_front_beam; ?>">
    </div>
</div>