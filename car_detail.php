<?php
include('header.php');
include('database/db.php');
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
$id = $_GET['car'];
?>

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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="m-3">
                <div class="bg-light shadow p-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ตรวจสภาพรถ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">สเปค</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-group">
                                        <?php
                                        for ($i = 0; $i <  20; $i++) {
                                            # code...

                                            $sql = "SELECT * FROM `chk_spec` WHERE `goods_id` = $id";
                                            mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);

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
                                <div class="col-6">
                                    <ul class="list-group">
                                        <?php
                                        for ($i = 20; $i <  40; $i++) {
                                            # code...

                                            $sql = "SELECT * FROM `chk_spec` WHERE `goods_id` = $id";
                                            mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);

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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>

                    </div>
                </div>
            </div>
        </div>


    </div>


</body>
<footer>
    <?php include('cal_credit.php'); ?>
</footer>

</html>