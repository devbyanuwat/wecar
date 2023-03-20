<!-- <div class="container">
    <div class="row">
        <div class="shadow mt-5 mb-5 bg-light rounded">
            <div class="col-12 ">
                <div class="d-flex justify-content-center">
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
                        <style>
                        .card {
                            transition: all 250ms ease-out
                        }

                        .card:hover {
                            box-shadow: 5px 10px #6c757d;
                        }

                        ß
                        </style>
                        <div class="col-4 pt-4 pb-4" style="padding:1px">
                            <div class="card rounded mx-auto" style="width: 90%;">
                                <img src="img/goods/<?php echo $src ?>" class="card-img-top p-4 rounded-3">
                                <div class="card-body text-dark rounded bg-light">
                                    <p class="card-text "><?php echo $row['goods_detail'] ?>
                                        <hr>
                                    <div class="row">
                                        <div class="col-12 text-end"
                                            style="font-size: 16px;color: #FF810C;font-weight: bolder;">
                                            <?php echo $row['goods_price'] ?> บาท</div>
                                        <!-- <div class="col-6" style="font-size: 14px;">17,000 บาท/เดือน <br>เงินดาวน์ 0 บาท</div> -->
</div>
</p>
<div class="col-12 d-flex justify-content-end text-center">
    <a href="car_detail.php?car=<?php echo $row['goods_id'] ?>" target="_blank" class="stretched-link  ">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search"
            viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
    </a>
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
</div> -->
<style>

</style>

<div class="container">
    <div id="content-card" class="bg-white rounded shadow-lg">
        <div id="content-detail" class=" d-flex justify-content-center  row"></div>
    </div>

    <div id="goods_price"></div>
</div>
<script>
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
            $('#content-detail').append(
                "<div class='card col-lg-3 col-md-6 col-sm-12 m-5' id='goods_name" +
                index + "' > " + data.data[index].goods_name + " </div>");
        }
        // data.data.forEach(element => $('#goods_name').text(element.goods_name));
        // $('#goods_name').text(data.data[0].goods_name);
    }

})
</script>