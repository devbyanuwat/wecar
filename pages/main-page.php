<div class="container">
    <div id="content-card" class="bg-white rounded shadow-lg">
        <div id="content-detail" class=" d-flex justify-content-center row"></div>
    </div>
    <div id="goods_price"></div>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" name="titleModal">รายละเอียด</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/goods/malong.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/goods/malong.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/goods/malong.png" class="d-block w-100" alt="...">
                            </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
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
    GoodsDetailModal = (model) => {
        console.log(model);

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
                let goods_year = data.data[index].goods_year;
                let contentImgGoods = (data.data[index].img_src === null) ? '404img.png' : data.data[index].img_src[0]['goods_img_src'];
                let goods_detail = data.data[index].goods_detail;
                var model = {
                    id: goods_id,
                    name: goods_name,
                    year: goods_year,
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