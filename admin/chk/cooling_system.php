<div class="bg-light shadow p-3 pt-3 rounded-3">
    <div class="row">
        <div class="col-6 bg-light"></div>
        <div class="col-5 d-flex justify-content-between text-center  ">
            <div class="fs-6">เย็น</div>
            <div class="fs-6">ไม่เย็น</div>
            <br>
        </div>
    </div>
    <div class="row">
        <?php
        $sql_cooling_system = "SELECT * FROM `goods_chk_cooling_system`";
        $result_cooling_system = mysqli_query($conn, $sql_cooling_system);
        $count_cooling_system = mysqli_num_rows($result_cooling_system);
        while ($row_cooling_system = mysqli_fetch_assoc($result_cooling_system)) {
        ?>
            <div class="<?php echo $detail; ?>">
                <div class="row">
                    <input type="hidden" name="cooling_system_id_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" id="cooling_system_id_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" value="<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>">
                    <?php echo $row_cooling_system['goods_chk_cooling_system_name'];  ?>
                </div>

            </div>
            <div class="col-5 d-flex justify-content-between ">
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="cooling_system_value_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" id="cooling_system_name_<?php echo $row_cooling_system['goods_chk_cooling_system_id'] ?>" value="3" required>
                </div>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input " type="radio" name="cooling_system_value_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" id="cooling_system_name_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" value="4" required>
                </div>
                <a style="cursor: pointer ;" id="a_cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" onclick="add_comment('cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>')" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
            </div>
            <div style="display:none;" class="text-end text-secondary fs-6 " id="c_cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>">
                <span name="cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" id="cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>">
                    comment
                </span>
                <input type="text" name="com_cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" id="com_cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>" value="">
                <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('cooling_system_comment_<?php echo $row_cooling_system['goods_chk_cooling_system_id']; ?>')"></button>
            </div>
        <?php } ?>

    </div>
</div>