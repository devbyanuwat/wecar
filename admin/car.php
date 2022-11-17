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
                            <td class="align-content-center">
                                <div class="d-flex justify-content-around">
                                    <a href="?q=edit_car&car=<?php echo $row['goods_id']; ?>" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square p-1 text-white text-center bg-primary fs-3 rounded-3" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>

                                    <a style="cursor: pointer;" onclick="del_goods(<?php echo $row['goods_id'] ?>);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash3 p-1 text-white text-center bg-danger fs-3 rounded-3" viewBox="0 0 16 16">
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