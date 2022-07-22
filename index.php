<?php include('header.php'); ?>

<body style="max-width: 100%;">
    <?php include('nav-bar.php'); ?>


    <div class="container">
        <div class="row">
            <div class="shadow mt-5 mb-5 bg-light rounded">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="row">
                            <?php include('database/db.php');
                            $sql = "SELECT * FROM goods WHERE `goods_status` = 1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $goods_id = $row['goods_id'];

                                $sql_src = "SELECT * FROM `goods_img` WHERE `goods_id` = $goods_id";
                                $result_src = mysqli_query($conn, $sql_src);
                                $row_src = mysqli_fetch_assoc($result_src);
                                $src = $row_src['goods_img_src'];

                            ?>
                                <div class="col-4 p-3">
                                    <div class="card rounded mx-auto" style="width: 70%;">
                                        <img src="img/goods/<?php echo $src ?>" class="card-img-top p-4 rounded-3">
                                        <div class="card-body text-dark rounded bg-light">
                                            <p class="card-text ">2018 Mitsubishi Pajero-Sport <br>2.4 Gls Limited | เกียร์อัตโนมัติ <br>54,773 กม. | ดีเซล
                                                <hr>
                                            <div class="row">
                                                <div class="col-12 text-end" style="font-size: 16px;color: #FF810C;font-weight: bolder;">841,100 บาท</div>
                                                <!-- <div class="col-6" style="font-size: 14px;">17,000 บาท/เดือน <br>เงินดาวน์ 0 บาท</div> -->
                                            </div>
                                            </p>
                                            <div class="col-12">
                                                <a href="car_detail.php?car=<?php echo $row['goods_id'] ?>" target="_blank" class="btn btn-primary stretched-link justify-content-end text-center ">รายละเอียด</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>


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