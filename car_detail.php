<?php
include('header.php');
include('database/db.php');
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
    'cooling_system',
];
$table_th = [
    'ภายนอก',
    'ไฟหน้า',
    'ไฟตัดหมอก',
    'ทับทิมกันชน',
    'กระจกหน้ารถ',
    'บังโคลนหน้า',
    'ประตูรถ',
    'สัญลักษณ์ / โลโก้ยี่ห้อรถ',
    'บังโคลนหลัง',
    'หลังคารถ',
    'ราวจับ / ราวยึดบนหลังคารถ',
    'กระจกหน้าต่าง / กระจกหน้าต่างช่วงสามเหลี่ยมด้านหลัง',
    'ผนังของห้องเครื่อง',
    'ซุ้มโชค',
    'คานหน้ารถ',
    'กระจกข้าง (กระจกหูช้าง)',
    'ล้อแม็ก',
    'ยาง',
    'เสาโครงรถ',
    'เบาะนั่ง',
    'เรือนไมล์',
    'ระบบควบคุมสาระบันเทิง',
    'ระบบมัลติมีเดีย',
    'แผงหน้าปัด',
    'ไฟในรถ',
    'ไฟเพดาน',
    'เบรกมือ',
    'เพดาน',
    'ระบบล็อค',
    'พื้นรถ',
    'ฟิล์มกรองแสง',
    'เครื่องยนต์และเกียร์',
    'ชุดส่งกำลัง',
    'ระบบทำความเย็น'
];

$spec = array(
    //col 1
    "ถุงลมนิรภัย",
    "ระบบควบคุมการทรงตัว",
    "ระบบป้องกันการโจรกรรม",
    "ระบบตรวจสอบจุดอับสายตา",
    "ระบบติดตั้งคาร์ซีทสำหรับเด็ก",
    "ระบบล็อคสำหรับเด็ก",
    "ระบบเตือนการชน",
    // "ไฟหน้า",
    // "ไฟท้าย",
    "ไฟตัดหมอกหน้า",
    "ไฟตัดหมอกหลัง",
    "ไฟ LED กลางวัน",
    // "เบาะหน้า",
    // "เบาะหลัง",
    "หลังคารับแสง",
    // "ไฟในรถ",
    // "ที่บังแดด",
    // "ปลั๊กไฟ",
    // "ที่วางแก้วน้ำ",
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
    // "Boot Operation",
    "เกียร์ที่พวงมาลัย",
    // "เบรกมือ",
    "ระบบคุมความเร็วอัตโนมัติ",
    "เกียร์ทิปทรอนิค",
    "ระบบควบคุมเสียงที่พวงมาลัย",
    // "ที่ปรับของพวงมาลัยไฟฟ้า",
    // "ที่ปรับของพวงมาลัยไฟฟ้า",
    // "ระบบจอดอัตโนมัติ",
    // "กระจกมองหลังนอกรถ",
    // "แผงหน้าปัด",

);
$id = $_GET['car'];
?>
<style>
    .preview-img {
        cursor: pointer;
    }

    .preview-img:hover {
        transition: 0.5s;
        opacity: 0.5;
        transform: scale(1.05);
    }
</style>

<body>
    <?php include('nav-bar.php'); ?>
    <div class="container">
        <div class="row">

            <div class="bg-light shadow p-3 m-3">

                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $sql_img = "SELECT * FROM `goods_img` WHERE `goods_id` = $id";
                        $result_img = mysqli_query($conn, $sql_img);
                        $nums = 1;
                        while ($row_img = mysqli_fetch_assoc($result_img)) {
                            $img_src = $row_img['goods_img_src'];
                        ?>

                            <div id="img_<?php echo $nums ?>" class="carousel-item img-fluid ">
                                <div class="text-center">
                                    <img src="img/goods/<?php echo $img_src; ?>" class="d-block rounded" width="100%">
                                </div>
                            </div>

                        <?php
                            $nums++;
                        }
                        ?>
                        <script>
                            window.onload = src_img();

                            function src_img() {
                                document.getElementById('img_1').classList.add("active");
                            }
                        </script>
                    </div>

                    <style>
                        .arrow:hover {
                            background-color: #373737;
                            transition: 0.5s;
                        }
                    </style>
                    <button class="carousel-control-prev arrow" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next arrow" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
        <div class="row ">
            <div class="bg-light shadow rounded p-3 ms-3 me-3">
                <div class="d-flex table-responsive">
                    <?php
                    $sql_img = "SELECT * FROM `goods_img` WHERE `goods_id` = $id";
                    $result_img = mysqli_query($conn, $sql_img);
                    while ($row_img = mysqli_fetch_assoc($result_img)) {
                        // echo "start";
                        $img_src = $row_img['goods_img_src'];
                    ?>
                        <div class="table">
                            <!-- <?php echo $img_src; ?> -->
                            <div class=" pe-3">
                                <img src="img/goods/<?php echo $img_src; ?>" class="rounded mx-auto preview-img bg-info" width="200px">
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="bg-light shadow p-3 m-3">
                <?php
                $sql_detail = "SELECT * FROM `goods` WHERE `goods_id` = $id";
                $result_detail = mysqli_query($conn, $sql_detail);
                $row_detail = mysqli_fetch_assoc($result_detail);

                $advert = $row_detail['goods_advert'];
                $detail = $row_detail['goods_detail'];
                ?>
                <div class="fs-5 fw-b">รายละเอียด</div>
                <div class="fs-6"> <?php echo $detail ?></div>
                <br>
                <div class="fs-5 fw-b">โฆษณา</div>
                <div class="fs-6"> <?php echo $advert ?></div>

            </div>
        </div>
        <div class="row">
            <div class="m-3">
                <div class="bg-light shadow p-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                สเปค
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                ตรวจสภาพรถ
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-6 bg-light">
                                    <ul class="list-group">
                                        <?php
                                        for ($i = 0; $i <  count($spec) / 2; $i++) {
                                            # code...

                                            $sql = "SELECT * FROM `chk_spec` WHERE `goods_id` = $id";

                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            $chk_spec_status = $row['chk_spec_status'];
                                            // echo $chk_spec_status . " <- status1";
                                        ?>
                                            <li class="list-group-item border-bottom">
                                                <div class="d-flex jsutify-content-between">


                                                    <?php
                                                    $sql_com = "SELECT * FROM `spec_comment` WHERE `goods_id` = $id AND `chk_spec_id` = $i";
                                                    $result_com = mysqli_query($conn, $sql_com);
                                                    $row_comm = mysqli_fetch_assoc($result_com);
                                                    $comm = $row_comm['spec_comment_detail'];

                                                    if ($comm) {
                                                    ?>
                                                        <div class="col-1 text-danger text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle " viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                            </svg>
                                                        </div>
                                                        <div class="col-7"><?php echo $spec[$i] ?></div>
                                                        <div class="col-4 text-end text-danger">
                                                        <?php
                                                        echo $comm;
                                                    } else {
                                                        ?>
                                                            <div class="col-1 text-success text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                                </svg>
                                                            </div>


                                                            <div class="col-7"><?php echo $spec[$i] ?></div>
                                                            <div class="col-4 text-end">
                                                            <?php
                                                        }

                                                            ?>
                                                            </div>
                                                        </div>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                                <div class="col-6 bg-light">
                                    <ul class="list-group">
                                        <?php
                                        for ($i = count($spec) / 2 + 1; $i <  count($spec); $i++) {
                                            # code...

                                            $sql = "SELECT * FROM `chk_spec` WHERE `goods_id` = $id";
                                            // echo $sql;
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            $chk_spec_status = $row['chk_spec_status'];

                                            // echo $chk_spec_status . " <- status2";

                                        ?>
                                            <li class="list-group-item border-bottom">
                                                <div class="d-flex jsutify-content-between">

                                                    <?php
                                                    $sql_com = "SELECT * FROM `spec_comment` WHERE `goods_id` = $id AND `chk_spec_id` = $i";
                                                    $result_com = mysqli_query($conn, $sql_com);
                                                    $row_comm = mysqli_fetch_assoc($result_com);
                                                    $comm = $row_comm['spec_comment_detail'];
                                                    if ($comm) {
                                                    ?>
                                                        <div class="col-1 text-danger text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle " viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                            </svg>
                                                        </div>


                                                        <div class="col-7"><?php echo $spec[$i] ?></div>
                                                        <div class="col-4 text-end text-danger">
                                                        <?php
                                                        echo $comm;
                                                    } else {
                                                        ?>
                                                            <div class="col-1 text-success text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                                </svg>
                                                            </div>


                                                            <div class="col-7"><?php echo $spec[$i] ?></div>
                                                            <div class="col-4 text-end">
                                                            <?php

                                                        }

                                                            ?>
                                                            </div>
                                                        </div>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php include('sh_spec_split.php'); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</body>
<footer>
    <div class="container">
        <?php include('cal_credit.php'); ?>
    </div>
</footer>

</html>