<div class="bg-light shadow p-3 pt-3 rounded-3">
    <div class="<?php echo $topic; ?>">
        ชุดส่งกำลัง
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
        $sql_powertrain = "SELECT * FROM `goods_chk_powertrain`";
        $result_powertrain = mysqli_query($conn, $sql_powertrain);
        $count_powertrain = mysqli_num_rows($result_powertrain);
        while ($row_powertrain = mysqli_fetch_assoc($result_powertrain)) {
        ?>
            <div class="<?php echo $detail; ?>">
                <div class="row">
                    <input type="hidden" name="powertrain_id_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" id="powertrain_id_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>" value="<?php echo $row_front_light['goods_chk_front_light_id']; ?>">
                    <?php echo $row_powertrain['goods_chk_powertrain_name'];  ?>
                </div>

            </div>
            <div class="col-5 d-flex justify-content-between ">
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="powertrain_value_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>" id="powertrain_name_<?php echo $row_powertrain['goods_chk_powertrain_id'] ?>" value="1" required>
                </div>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input " type="radio" name="powertrain_value_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>" id="powertrain_name_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>" value="2" required>
                </div>
                <a style="cursor: pointer ;" id="a_powertrain_comment_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>" onclick="add_comment('powertrain_comment_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>')" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
            </div>
            <div style="display:none;" class="text-end text-secondary fs-6 " id="c_powertrain_comment_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>">
                <span name="powertrain_comment_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>" id="powertrain_comment_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>">
                    comment
                </span>
                <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('powertrain_comment_<?php echo $row_powertrain['goods_chk_powertrain_id']; ?>')"></button>
            </div>
        <?php } ?>
        <input type="hidden" name="count_powertrain" id="count_powertrain" value="<?php echo $count_powertrain; ?>">
    </div>
</div>