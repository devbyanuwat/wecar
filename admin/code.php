<div class="col-4">

    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="fs-5 text-start mb-4 fw-bold">
            ภายนอก
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
            $sql_outside = "SELECT * FROM `goods_chk_outside`";
            $result_outside = mysqli_query($conn, $sql_outside);
            while ($row_outside = mysqli_fetch_assoc($result_outside)) {
            ?>
                <div class="col-6 fw-bold ps-4">

                    <div class="row">
                        <input type="hidden" name="outside_id" id="outside_id" value="<?php echo $row_outside['goods_chk_outside_id']; ?>">
                        <?php echo $row_outside['goods_chk_outside_name'];  ?>
                    </div>

                </div>
                <div class="col-5 d-flex justify-content-between ">
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="outside_name_<?php echo $row_outside['goods_chk_outside_id']; ?>" id="outside_name_<?php echo $row_outside['goods_chk_outside_id']; ?>" value="1" required checked>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="outside_name_<?php echo $row_outside['goods_chk_outside_id']; ?>" id="outside_name_<?php echo $row_outside['goods_chk_outside_id']; ?>" value="2" required>
                    </div>

                    <a id="a_outside_comment_<?php echo $row_outside['goods_chk_outside_id']; ?>" style="cursor: pointer ;" data-toggle="tooltip" data-placement="top" title="" onclick="add_comment('outside_comment_<?php echo $row_outside['goods_chk_outside_id']; ?>')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>
                </div>
                <!-- <input type="input" name="outside_comment_<?php echo $row_outside['goods_chk_outside_id']; ?>" id="outside_comment_<?php echo $row_outside['goods_chk_outside_id']; ?>"> -->
            <?php } ?>

        </div>
    </div>
</div>


<div class="col-4">
    <div class="fs-4 text-start mb-4 fw-bold">
        ไฟหน้า
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
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
            $sql_front_light = "SELECT * FROM `goods_chk_front_light`";
            $result_front_light = mysqli_query($conn, $sql_front_light);
            $count_front_light = mysqli_num_rows($result_front_light);
            while ($row_front_light = mysqli_fetch_assoc($result_front_light)) {
            ?>
                <div class="col-6 fw-bold ps-4">
                    <div class="row">
                        <input type="hidden" name="front_light_id_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" id="front_light_id_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" value="<?php echo $row_front_light['goods_chk_front_light_id']; ?>">
                        <?php echo $row_front_light['goods_chk_front_light_name'];  ?>
                    </div>

                </div>
                <div class="col-5 d-flex justify-content-between ">
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="front_light_value_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" id="front_light_name_<?php echo $row_front_light['goods_chk_front_light_id'] ?>" value="1" required>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input " type="radio" name="front_light_value_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" id="front_light_name_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" value="2" required>
                    </div>
                    <a style="cursor: pointer ; pointer-events: none;" id="a_front_light_comment_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" onclick="add_comment('front_light_comment_<?php echo $row_front_light['goods_chk_front_light_id']; ?>')" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>
                </div>
                <div class="text-end text-secondary fs-6 " id="c_front_light_comment_<?php echo $row_front_light['goods_chk_front_light_id']; ?>">
                    <span name="front_light_comment_<?php echo $row_front_light['goods_chk_front_light_id']; ?>" id="front_light_comment_<?php echo $row_front_light['goods_chk_front_light_id']; ?>">
                        comment
                    </span>
                    <button type="button" class="btn-close" aria-label="Close" onclick="clear_comment('front_light_comment_<?php echo $row_front_light['goods_chk_front_light_id']; ?>')"></button>
                </div>
            <?php } ?>
            <input type="hidden" name="count_front_light" id="count_front_light" value="<?php echo $count_front_light; ?>">
        </div>
    </div>
</div>
<div class="col-4">
    <div class="fs-4 text-start mb-4 fw-bold">
        ที่ครอบตัดไฟหมอก
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ทับทิมกันชน
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        กระจกหน้ารถ
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        บังโคลนหน้า
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ประตูรถ
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        สัญลักษณ์/โลโก้ยี่ห้อรถ
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        บังโคลนหลัง
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-5 text-start mb-4 fw-bold">
        ราวจับ/ราวยึดบนหลังคารถ
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-5 text-start mb-4 fw-bold">
        กระจกหน้าต่าง/กระจกหน้าต่างช่วสามเหลี่ยมด้านหลัง
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ซุ้มโซ๊ค
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        กระจกข้าง(กระจกหูข้าง)
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ล้อแม็กซ์
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>

<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        เสาโครงรถ
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        เบาะนั่ง
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ฟิล์มกรองแสง
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        เครื่องยนต์ และเกียร์
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ชุดส่งกำลัง
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>
<div class="col-4 mt-3">
    <div class="fs-4 text-start mb-4 fw-bold">
        ระบบทำความเย็น
    </div>
    <div class="bg-light shadow p-3 pt-3 rounded-3">
        <div class="row">

        </div>
    </div>
</div>