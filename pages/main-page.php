<?php
include('../header.php');
include('../database/db.php');

$id = $_GET['car'];
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

); ?>

<div class="container">
    <div id="content-card" class="bg-white rounded shadow-lg">
        <div id="content-detail" class=" d-flex justify-content-center row"></div>
    </div>
    <div id="goods_price"></div>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelName" name="titleModal">รายละเอียด</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators" id='carousel-indicators'>
                                    <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                                    <!--    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
                                </div>

                                <div class="carousel-inner m-3" id="carousel-inner">
                                    <!-- <div class="carousel-item active">
                                        <img src="./img/goods/Toyota-Vios-GR-S-Exterior-36-850x567.jpg" class="d-block w-100 rounded-3 shadow-lg">
                                    </div> -->
                                    <!-- <div class="carousel-item">
                                        <img src="./img/goods/Toyota-Vios-GR-S-Exterior-36-850x567.jpg" class="d-block w-100 rounded-3 shadow-lg">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/goods/Toyota-Vios-GR-S-Exterior-36-850x567.jpg" class="d-block w-100 rounded-3 shadow-lg">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/goods/Toyota-Vios-GR-S-Exterior-36-850x567.jpg" class="d-block w-100 rounded-3 shadow-lg">
                                    </div> -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col shadow-lg p-3 m-3 rounded-3">
                            <div id="detail"></div>
                            <div id="advert"></div>
                            <div id="price" class="fs-3"></div>
                        </div>
                    </div <div class="row">
                    <div class="m-3">
                        <div class="bg-white shadow p-3">
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
                                        <div class="col-6 bg-white">
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
                                        <div class="col-6 bg-white">
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
                                    <?php include('../sh_spec_split.php'); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Send message</button> -->
            </div>
        </div>

    </div>
</div>



</div>

<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");

    .w3-tooltip {
        position: relative;
        display: inline-block;
    }

    .w3-tooltip .w3-tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: #0d6efd;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 0;
    }

    .w3-tooltiptext {
        opacity: 0.85;
    }

    .w3-tooltip:hover {
        cursor: pointer;
    }

    .w3-tooltip:hover .w3-tooltiptext {
        visibility: visible;

    }
</style>

<script>
    // <div class="carousel-item active">
    // <img src="./img/goods/Toyota-Vios-GR-S-Exterior-36-850x567.jpg" class="d-block w-100 rounded-3 shadow-lg">
    //</div>
    GoodsDetailModal = (model) => {


        $('#button-carouse').remove()
        $('#button-carouse-first').remove()
        $('#carousel-item').remove()
        $('#src-carousel').remove()

        const carouselInner = document.getElementById('carousel-inner')
        const div = document.createElement('div');
        const img = document.createElement('img')

        const carouselIndicator = document.getElementById('carousel-indicators')
        const button = document.createElement('button')
        const position = 0;
        // for (let i = 0; i < model.img.length; i++) {
        //     // console.log(model.img[i].goods_img_src)
        //     if (i == 0) {
        //         button.setAttribute('aria-current', 'true')
        //         div.setAttribute('class', 'carosel-item active')
        //         carouselInner.appendChild(div)
        //     }
        //     div.setAttribute('class', 'carosel-item')
        //     img.setAttribute('src', `./img/goods/${model.img[i].goods_img_src}`)
        //     img.setAttribute('class', 'd-block w-100 rounded-3 shadow-lg')
        //     carouselInner.appendChild(div)
        //     div.appendChild(img)

        //     button.setAttribute('type', 'button')
        //     button.setAttribute('data-bs-target', '#carouselExampleIndicators')
        //     button.setAttribute('data-bs-target', '#carouselExampleIndicators')
        //     button.setAttribute('data-bs-slide-to', i + 1)
        //     button.setAttribute('aria-label', `Slide${i+2}`)
        //     carouselIndicator.appendChild(button)
        // }

        // <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        // <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        // <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        if (true) {
            for (let i = 0; i < model.img.length; i++) {
                console.log('append' + i);
                //button//  
                let buttonFirst = `<button id='button-carouse-first' type='button' data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}" aria-label="Slide ${i+1}" class="active" aria-current="true">`;;
                let button = `<button id='button-carouse' type='button' data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}" aria-label="Slide ${i+1}">`;
                if (i == 0) {
                    $('#carousel-indicators').append(
                        buttonFirst
                    )
                } else {
                    $('#carousel-indicators').append(
                        button
                    )
                }

                //img//
                let div = "<div class='carousel-item' id='carousel-item'>"
                let img = `<img id='src-carousel' src='./img/goods/${model.img[i].goods_img_src}' class='d-block w-100 rounded-3 shadow-lg' >`;
                let divClose = "</div>"
                $('#carousel-inner').append(
                    div + img + divClose
                )
            }
        }
        document.querySelectorAll('.carousel-item')[0].classList.add('active')
        console.log('end')
        const goodsDetail = document.getElementById('model_goods_detail')

        console.log("img", model.img)
        console.table(model)
        document.getElementById('exampleModalLabelName').innerHTML = model.name;
        document.getElementById('detail').innerHTML = model.detail
        document.getElementById('price').innerHTML = model.price
        document.getElementById('advert').innerHTML = model.advert
    }
    $.ajax({
        url: './controller/controller.show.php',
        type: 'GET',
        contentType: "application/json;chaset=utf8",
        dataType: 'json',
        data: {
            controller: "showProducts"
        },
        success: function(data) {
            console.log(data);
            for (let index in data.data) {
                //set value
                let goods_id = data.data[index].goods_id;
                let goods_name = data.data[index].goods_name;
                let goods_price = data.data[index].goods_price;
                let goods_advert = data.data[index].goods_advert;
                let goods_year = data.data[index].goods_year;
                let contentImgGoods = (data.data[index].img_src === null) ? '404img.png' : data.data[index].img_src[0]['goods_img_src'];
                let goods_detail = data.data[index].goods_detail;
                var model = {
                    id: goods_id,
                    name: goods_name,
                    year: goods_year,
                    advert: goods_advert,
                    price: goods_price,
                    detail: goods_detail,
                    img: (data.data[index].img_src === null) ? '404img.png' : data.data[index].img_src
                };
                var json = JSON.stringify(model);
                //html tag
                let startTagCardGroup = "<div class='card-group col-lg-3 col-md-6 col-sm-12 m-3'>";
                let endTagCardGroup = "</div>";
                let startTagCard = "<div class='card'> ";
                let endTagCard = "</div>"
                let startTagCardBody = "<div class='card-body'>";
                let endTagCardBody = "</div>"
                let startTagCardTitle = "<div class='card-title'><h5>";
                let endTagCardTitle = "</h5></div>"
                let startTagCardText = "<div class='card-text'> <p>";
                let endTagCardText = "</p></div>"
                let startTagCardFooter = "<div style='background-color:white;border-top:none' class='card-footer'>";
                let endTagCardFooter = "</div>";
                let startTagImg = "<img class='card-img-top' style='height:250px' src='./img/goods/" + contentImgGoods + "' > ";

                let spanTooltip = "<span class='w3-tooltiptext'>Detail</span>";
                let iconViewDetail = "<div onclick='GoodsDetailModal(" + json + ");' class='bi bi-search w3-tooltip text-end' data-bs-toggle='modal' data-bs-target='#exampleModal'>" + spanTooltip + "</div>";
                $('#content-detail').append(
                    startTagCardGroup +
                    startTagCard +
                    startTagImg +
                    startTagCardBody +

                    startTagCardTitle +
                    goods_name + " " + goods_year +
                    endTagCardTitle +

                    startTagCardText +
                    goods_detail +
                    endTagCardText +
                    startTagCardText +
                    endTagCardText +
                    endTagCardBody +

                    startTagCardFooter +
                    iconViewDetail +
                    endTagCardFooter +

                    endTagCard +
                    endTagCardGroup
                );
            }
            // data.data.forEach(element => $('#goods_name').text(element.goods_name));
            // $('#goods_name').text(data.data[0].goods_name);
        }
    })
</script>
<!-- <?php
        include('../database/db.php');
        $sql = "SELECT * FROM goods WHERE `goods_status` = 1";
        echo $sql;
        ?> -->

<?php

// $result = mysqli_query($conn, $sql);
// while ($row = mysqli_fetch_assoc($result)) {
//     $goods_id = $row['goods_id'];

//     $sql_src = "SELECT * FROM `goods_img` WHERE `goods_id` = $goods_id";
//     $result_src = mysqli_query($conn, $sql_src);
//     $row_src = mysqli_fetch_assoc($result_src);
//     $src = $row_src['goods_img_src'];
// }
?>