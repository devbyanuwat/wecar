<form action="../database/add_goods.php" method="post" class="row g-3  needs-validation" novalidate>
    <div class="fs-2 text-start mb-4 fw-bold">
        เพิ่มรถ
    </div>
    <div class="d-flex justify-content-center">
        <div class="bg-light shadow p-3 pt-3 rounded-3">
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="brand" class="form-label"> ยี่ห้อรถ</label>
                    <select name="brand" id="brand" class="form-control form-select">
                        <option selected disabled value="">เลือกยี่ห้อรถ..</option>
                        <?php
                        $sql_brand = "SELECT * FROM `brand`";
                        $result_brand = mysqli_query($conn, $sql_brand);
                        while ($row_brand = mysqli_fetch_assoc($result_brand)) {
                        ?>
                            <option><?php echo $row_brand['brand_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name" class="form-label">ชื่อรถ</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                    <div class="invalid-feedback">
                        กรอกชื่อรถ
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <label for="years" class="form-label">ปีรถ</label>
                    <input type="text" name="years" id="years" maxlength="4" pattern="[0-9]{1,4}" class="form-control" required>

                    <!-- <div class="invalid-feedback">
                                    กรอกข้อมูลประเภทตัวเลข
                                </div> -->
                </div>
                <div class="col-6 mb-3 ">
                    <label for="price" class="form-label">ราคา</label>
                    <div class="input-group flex-nowrap">


                        <input type="text" name="price" id="price" class="form-control" aria-describedby="addon-wrapping" aria-label="price" pattern="[1-9]{1,9}" maxlength="9" required>
                        <span class="input-group-text" id="price">฿</span>
                        <!-- <div class="invalid-feedback">
                                        กรอกข้อมูลประเภทตัวเลข
                                    </div> -->
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="file" name="file" multiple required>
                    <label class="input-group-text" for="file">Upload</label>
                </div>
                <div class="col-12 mb-3">
                    <lable for="detail" class="form-label">รายละเอียด</lable>
                    <textarea class="form-control" name="detail" id="detail" cols="10" rows="3"></textarea>
                </div>

            </div>
        </div>

    </div>

    <div class="fs-2 text-start mb-4 fw-bold">
        สเปค
    </div>
    <?php
    $spec = array(
        //col 1
        "ถุงลมนิรภัย",
        "ระบบควบคุมการทรงตัว",
        "ระบบป้องกันการโจรกรรม",
        "ระบบตรวจสอบจุดอับสายตา",
        "ระบบติดตั้งคาร์ซีทสำหรับเด็ก",
        "ระบบล็อคสำหรับเด็ก",
        "ระบบเตือนการชน",
        "ไฟหน้า",
        "ไฟท้าย",
        "ไฟตัดหมอกหน้า",
        "ไฟตัดหมอกหลัง",
        "ไฟ LED กลางวัน",
        "เบาะหน้า",
        "เบาะหลัง",
        "หลังคารับแสง",
        "ไฟในรถ",
        "ที่บังแดด",
        "ปลั๊กไฟ",
        "ที่วางแก้วน้ำ",
        "หน้าต่างไฟฟ้า",
        //col 2
        "ระบบป้องกันรถไหลเมื่อขึ้นทางลาด",
        "บลูทูธ",
        "ระบบนำทาง",
        "ไฟหน้าอัตโนมัติ",
        "ที่ปัดน้ำฝนอัตโนมัติ",
        "เซ็นเซอร์จอดด้านหน้า",
        "เซ็นเซอร์จอดด้านหลัง",
        "กล้องถอย",
        "ประตูไฟฟ้า",
        "Boot Operation",
        "เกียร์ที่พวงมาลัย",
        "เบรกมือ",
        "ระบบคุมความเร็วอัตโนมัติ",
        "เกียร์ทิปทรอนิค",
        "ระบบควบคุมเสียงที่พวงมาลัย",
        "ที่ปรับของพวงมาลัยไฟฟ้า",
        "ที่ปรับของพวงมาลัยไฟฟ้า",
        "ระบบจอดอัตโนมัติ",
        "กระจกมองหลังนอกรถ",
        "แผงหน้าปัด",
    );
    $topic = "fs-5 text-start mb-2";
    $detail = "col-6 ps-4";
    ?>

    <div class="d-flex justify-content-center">
        <div class="bg-light shadow p-3 pt-3 rounded-3">

            <div class="row">
                <div class="col-5 m-4 p-3">
                    <?php

                    for ($i = 0; $i <  count($spec) / 2; $i++) {
                        # code...
                    ?>
                        <div class="row">
                            <div class="col-9">
                                <label for="spec<?php echo $i; ?>" class="form-label fw-bold"><?php echo $spec[$i]; ?></label>
                            </div>
                            <div class="col-3 d-flex">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spec<?php echo $i; ?>" id="spec<?php echo $i; ?>" value="1" required>
                                    <label class="form-check-label" for="spec<?php echo $i; ?>">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spec<?php echo $i; ?>" id="spec<?php echo $i; ?>" value="2" required>
                                    <label class="form-check-label" for="spec<?php echo $i; ?>">ไม่มี</label>
                                </div>

                                <a onclick="goods_comment();" style="cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-danger" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </a>


                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-5 m-4 p-3">
                    <?php for ($i = 20; $i < 40; $i++) {
                        # code...
                    ?>
                        <div class="row">
                            <div class="col-9">
                                <label for="spec<?php echo $i; ?>" class="form-label fw-bold"><?php echo $spec[$i]; ?></label>
                            </div>
                            <div class="col-3 d-flex">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spec<?php echo $i; ?>" id="spec<?php echo $i; ?>" value="1" required>
                                    <label class="form-check-label" for="spec<?php echo $i; ?>">มี</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="spec<?php echo $i; ?>" id="spec<?php echo $i; ?>" value="2" required>
                                    <label class="form-check-label" for="spec<?php echo $i; ?>">ไม่มี</label>
                                </div>

                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text text-danger" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="row ">
                                <div class="col-10 d-flex">
                                    <label for="spec99" class="form-label">ระบบป้องกันรถไหลเมื่อขึ้นทางลาด</label>
                                </div>
                                <div class="col-2 d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spec99" id="spec99" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">มี</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spec99" id="spec99" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    </div>
                                </div>
                            </div>

                                -->
    </div>


    <div class="fs-2 text-start mb-4 fw-bold">
        ตรวจสอบสภาพรถ
    </div>
    <div class="d-flex flex-warp justify-content-center">
        <div class="bg-white shadow p-3 pt-3 rounded-3">
            <div class="row">
                <div class="col-4 bg-white ">

                    <?php include('chk/outside.php'); ?>
                    <br>
                    <?php include('chk/front_light.php'); ?>
                    <br>
                    <?php include('chk/fog_lamp.php'); ?>
                    <br>
                    <?php include('chk/ruby_bumper.php'); ?>
                    <br>
                    <?php include('chk/windshield.php'); ?>
                    <br>
                    <?php include('chk/front_fender.php'); ?>
                    <br>
                    <?php include('chk/car_door.php'); ?>
                    <br>
                    <?php include('chk/car_brand_symbol.php'); ?>
                    <br>
                    <?php include('chk/rear_fender.php'); ?>
                    <br>
                    <?php include('chk/car_roof.php'); ?>

                </div>
                <div class="col-4 bg-white">
                    <?php include('chk/handrail.php'); ?>
                    <br>
                    <?php include('chk/window_glass.php'); ?>
                    <br>
                    <?php include('chk/engine_compartment_wall.php'); ?>
                    <br>
                    <?php include('chk/shock_absorber.php'); ?>
                    <br>
                    <?php include('chk/front_beam.php'); ?>
                    <br>
                    <?php include('chk/side_mirror.php'); ?>
                    <br>
                    <?php include('chk/alloy.php'); ?>
                    <br>
                    <?php include('chk/tire.php'); ?>
                    <br>
                    <?php include('chk/car_frame.php'); ?>

                </div>
                <div class="col-4 bg-white">
                    <?php include('chk/seat.php'); ?>
                    <br>
                    <?php include('chk/speed_meter.php'); ?>
                    <br>
                    <?php include('chk/entertainment_control_system.php'); ?>
                    <br>
                    <?php include('chk/multimedia_system.php'); ?>
                    <br>
                    <?php include('chk/instrument_panel.php'); ?>
                    <br>
                    <?php include('chk/car_lights.php'); ?>
                    <br>
                    <?php include('chk/ceiling_light.php'); ?>
                    <br>
                    <?php include('chk/handbrake.php'); ?>
                    <br>
                    <?php include('chk/ceiling.php'); ?>
                    <br>
                    <?php include('chk/lock_system.php'); ?>
                    <br>
                    <?php include('chk/car_floor.php'); ?>
                    <br>
                    <?php include('chk/window_film.php'); ?>
                    <br>
                    <?php include('chk/engine_and_gear.php'); ?>
                    <br>
                    <?php include('chk/powertrain.php'); ?>
                    <br>
                    <?php include('chk/cooling_system.php'); ?>


                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary me-3">Add</button>
            <button type="button" class="btn btn-outline-danger me-3">Cancel</button>
        </div>
    </div>

</form>

<script>
    function add_comment(name) {
        Swal.fire({
            title: "ระบุสาเหตุ" + name,
            icon: 'info',
            input: 'text',
            showCancelButton: true
        }).then((result) => {
            if (result.value) {
                console.log("Result: " + result.value);
                document.getElementById(name).innerHTML = result.value;
                document.getElementById('c_' + name).style.display = 'block';
            }
        });
    }

    function clear_comment(name) {
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Deleted!',
                    icon: 'success'
                })
                document.getElementById(name).innerHTML = "";
                document.getElementById('c_' + name).style.display = 'none';
            }
        })

    }
</script>