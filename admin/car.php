<div class="container">
    <div class="row">
        <div class="bg-light shadow-lg rounded">
            <div class="row">
                <div class="col-3 fs-1">รถ</div>
                <div class="col-9 text-end align-self-end"><button class="btn btn-success" onclick="window.location.href = '?q=add_car'">เพิ่ม</button></div>
            </div>
            <hr>
            <div class="container">
                <table class="table table-striped table-hover bg-white table-responsive">
                    <tr>
                        <th>#</th>
                        <th>รูปภาพ</th>
                        <th>รุ่น</th>
                        <th>สถานะ</th>
                        <th class="text-center">เครื่องมือ</th>
                    </tr>
                    <?php

                    $sql = "SELECT * FROM `goods`";
                    $result = mysqli_query($conn, $sql);
                    $nums = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $goods_id = $row['goods_id'];
                        // echo $row['goods_name'];
                    ?>
                        <tr>
                            <td>
                                <?php echo $nums; ?>
                            </td>
                            <td style="width:25%">
                                <?php
                                $sql_src = "SELECT * FROM `goods_img` WHERE `goods_id` = $goods_id";
                                $result_src = mysqli_query($conn, $sql_src);
                                $row_src = mysqli_fetch_assoc($result_src);
                                $src = $row_src['goods_img_src'];
                                ?>
                                <img src="../img/goods/<?php echo $src ?>" class="rounded" style="width:50%">
                            </td>
                            <td>
                                <?php echo $row['goods_name']; ?>
                            </td>
                            <td>
                                <!-- <a style="cursor:pointer" href="../database/change_status.php?id=<?php echo $row['goods_id'] ?>"> <span class="badge bg-success">ประกาศขาย</span></a> -->
                                <a style="cursor:pointer" onclick="change_status(<?php echo $row['goods_id'] ?>);">
                                    <?php if ($row['goods_status'] == 0) {
                                        echo "<span class='badge bg-primary'>อยู่ในคลัง</span>";
                                    } else if ($row['goods_status'] == 1) {
                                        echo "<span class='badge bg-success'>ประกาศขาย</span>";
                                    } else if ($row['goods_status'] == 2) {
                                        echo "<span class='badge bg-secondary'>ขายแล้ว</span>";
                                    } ?>

                                </a>
                            </td>
                            <td class=" align-content-center">
                                <div class="d-flex justify-content-around">
                                    <a href="?q=edit_car&car=<?php echo $row['goods_id']; ?>" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-right p-1 text-white text-center bg-warning rounded-3" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                    </a>

                                    <a style="cursor: pointer;" onclick="del_goods(<?php echo $row['goods_id'] ?>);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash3 p-1 text-white text-center bg-danger rounded-3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $nums++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

</script>