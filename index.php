<?php include('header.php'); ?>

<body style="max-width: 100%;">
    <?php include('nav-bar.php'); ?>


    <div class="container">
        <div class="row">
            <div class="shadow mt-5 mb-5 bg-light rounded">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="col-4 ">
                            <?php include('database/db.php');
                            $sql = "SELECT * FROM goods";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $src = $row['goods_img'];
                            ?>

                                <div class="card rounded mx-auto" style="width: 75%;">
                                    <img src="img/goods/<?php echo $src ?>" class="card-img-top p-4 rounded" alt="...">
                                    <div class="card-body text-white rounded" style="background-color: #19456B;">
                                        <p class="card-text ">2018 Mitsubishi Pajero-Sport <br>2.4 Gls Limited | เกียร์อัตโนมัติ <br>54,773 กม. | ดีเซล
                                            <hr>
                                        <div class="row">
                                            <div class="col-6" style="font-size: 16px;color: #FF810C;font-weight: bolder;">841,100 บาท</div>
                                            <div class="col-6" style="font-size: 14px;">17,000 บาท/เดือน <br>เงินดาวน์ 0 บาท</div>
                                        </div>
                                        </p>
                                        <div class="col-12">
                                            <a href="car_detail.php" class="btn btn-primary stretched-link justify-content-end text-center ">รายละเอียด</a>
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
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card with stretched link</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
        </div>

    </div>

</body>

</html>