<?php include('../header.php'); ?>

<body style="max-width: 100%;">
    <?php include('../nav-bar.php'); ?>

    <div class="containner">

        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="bg-light shadow p-3 rounded-3" style="width: 50%;">
                    <div class="fs-3 text-center mb-4">
                        เพิ่มรถ
                    </div>
                    <form action="../" method="post" class="row g-3 needs-validation">
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
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-3">Add</button>
                            <button type="button" class="btn btn-outline-danger me-3">Cancel</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>