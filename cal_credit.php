<div class="containner">

    <div class="row">
        <div class="ms-5">

            <div class="row">
                <!-- <div class="col-3 text-center bg-primary shadow-lg p-3 m-3 text-white rounded-3">
                    <img src="img/goods/Pajero_sport.png" alt="">
                    <div class="fs-3">คุณต้องการสินเชื่อ</div>

                    <div class="col-12 text-center">
                        <hr class="bg-danger border-5 border-top border-danger " width=" 50px">
                    </div>

                    <div class="fs-3">เพื่อรถคันนี้ไหม</div>
                </div> -->
                <div class="col-9 bg-light shadow-lg p-3 m-3 rounded-3">
                    <div class="row">
                        <div class="col-4 m-3">
                            <div class="fs-4 fw-bold">
                                คำนวณสินเชื่อรถยนต์
                            </div>
                            <br>
                            <div class="fs-5">
                                ค่าผ่อนชำระต่อเดือน
                            </div>
                            <div class="d-flex ">
                                <div class="fs-3 fw-bold" id="result"> 0</div>
                                <div class="fs-6 fw-bold text-end">&nbsp;฿&nbsp;</div>
                                <div class="fs-5 ">/ เดือน</div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-5">
                                    <div class="fs-6">อัตราดอกเบี้ย</div>
                                </div>
                                <div class="col-7 d-flex justify-content-end">
                                    <div class="fs-6 fw-bold text-end mb-3" id="interest">4.1 </div>
                                    <div class="fs-6 fw-bold text-end">&nbsp;%</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 mb-3">
                                    <div class="fs-6">ราคารถ</div>
                                </div>
                                <div class="col-7">
                                    <div class="input-group mb-3">
                                        <input type="text" id="car_price" class="form-control fs-6" placeholder="ราคารถ" aria-label="" aria-describedby="basic-addon2" onchange="cal();">
                                        <span class="input-group-text" id="basic-addon2">฿</span>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="fs-6">ยอดเงินกู้</div>
                                </div>
                                <div class="col-7 d-flex justify-content-end">
                                    <div class="fs-5 fw-bold text-end mb-3" id="principle">0 </div>
                                    <div class="fs-6 fw-bold text-end">&nbsp;฿</div>
                                </div>
                            </div>

                            <br>
                            <div class="fs-6">หมายเหตุ : การคำนวณนี้เป็นการประมาณ
                                ยอดเงินสินเชื่อเท่านั้น โดยวงเงินตามจริงนั้น
                                จะขึ้นอยู่กับเครดิตของแต่ละบุคคลและบางกรณี</div>
                        </div>



                        <div class="col-7 m-3">
                            <!--  <div class="row">
                                   <div class="col-6">
                                        <div class="fs-6 fw-bold">
                                            เลือกข้อเสนอ
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="dropdown">
                                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>-->
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <div class="fs-6 fw-bold">
                                        จำนวนเงินดาวน์
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="input-group mb-3">

                                        <input type="text" onchange="down(this.value);" id="down_payment" class="form-control text-end fw-bold" placeholder="0" aria-label="" aria-describedby="basic-addon2">

                                        <span class="input-group-text" id="basic-addon2">บาท</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <input style="pointer-events: none ;" id="ranged" type="range" width="70%" class="form-range" value="1" max="5" id="customRange2" style="pointer-events:all">
                                    <style>
                                        input[type=range]::-webkit-slider-thumb {
                                            background: orange;
                                        }

                                        input[type=range]::-moz-range-thumb {
                                            background: orange;
                                        }

                                        input[type=range]::-ms-thumb {
                                            background: orange;
                                        }
                                    </style>
                                </div>
                                <div class="col-12 d-flex justify-content-between fw-bold">
                                    <div class="fs-6">0%</div>
                                    <div class="fs-6">10%</div>
                                    <div class="fs-6">20%</div>
                                    <div class="fs-6">30%</div>
                                    <div class="fs-6">40%</div>
                                    <div class="fs-6">50%</div>



                                </div>
                            </div>
                            <br>

                            <div class="fs-6">ระยะเวลาผ่อน (เดือน)</div>
                            <br>
                            <div class="row">

                                <!-- <style>
                                        /* Style the buttons */
                                        .btn2 {
                                            border: none;
                                            outline: none;
                                            padding: 10px 16px;
                                            background-color: #f1f1f1;
                                            cursor: pointer;
                                            font-size: 18px;
                                        }

                                        /* Style the active class, and buttons on mouse-over */
                                        .active,
                                        .btn:hover {
                                            background-color: #0d6efd;
                                            color: white;
                                        }
                                    </style> -->

                                <!-- <div id="myDIV">
                                        <button onclick="btn();" class="btn active">1</button>
                                        <button onclick="btn();" class="btn ">2</button>
                                        <button onclick="btn();" class="btn">3</button>
                                        <button onclick="btn();" class="btn">4</button>
                                        <button onclick="btn();" class="btn">5</button>
                                        <button onclick="btn();" class="btn active">6</button>
                                    </div> -->

                                <ul class="nav nav-pills mb-3 d-flex justify-content-around" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button onclick="cal(48,3.7);" class="nav-link btn m-2  border text-dark" id="pills-48-tab" data-bs-toggle="pill" data-bs-target="#pills-48" type="button" role="tab" aria-controls="pills-48" aria-selected="true">48</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button onclick="cal(60,4.1);" class="nav-link btn m-2 border text-dark active" id="pills-60-tab" data-bs-toggle="pill" data-bs-target="#pills-60" type="button" role="tab" aria-controls="pills-60" aria-selected="false">60</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button onclick="cal(72,5);" class="nav-link btn m-2 border text-dark" id="pills-72-tab" data-bs-toggle="pill" data-bs-target="#pills-72" type="button" role="tab" aria-controls="pills-72" aria-selected="false">72</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button onclick="cal(84,5.6);" class="nav-link btn m-2 border text-dark" id="pills-84-tab" data-bs-toggle="pill" data-bs-target="#pills-84" type="button" role="tab" aria-controls="pills-84" aria-selected="false">84</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>
    <?php include('footer.php'); ?>
</div>

</div>
<script>
    function btn() {
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";

            });
        }
    }

    function cal(year, inter, rate) {

        var result = document.getElementById('result');

        var interest = document.getElementById('interest').innerHTML;
        interest = (interest / 100);
        interest = interest.toFixed(3);



        var principle = document.getElementById('principle');

        var car_price = document.getElementById('car_price').value;

        var down_payment = document.getElementById('down_payment');


        var ranged = document.getElementById('ranged').value;
        if (rate) {
            alert(rate);
        } else {
            if (ranged == 0) {
                rate = 1;
            } else if (ranged == 1) {
                rate = 0.1;
            } else if (ranged == 2) {
                rate = 0.2;
            } else if (ranged == 3) {
                rate = 0.3;
            } else if (ranged == 4) {
                rate = 0.4;
            } else if (ranged == 5) {
                rate = 0.5;
            }
            rate = car_price * rate;
        }
        down_payment.value = rate; //จำนวนเงินดาวน์


        principle.innerHTML = car_price;
        if (!year) {
            year = 60;
        }

        var total = ((car_price - rate) * interest) + car_price / year;
        total = total.toFixed(2);

        result.innerHTML = total;

        console.log(interest + "<- interest"); //ดอกเบี้ย
        console.log(principle + "<- principle"); //ยอดเงินกู้
        console.log(car_price + "<- car_price"); //ราคารถ
        console.log(down_payment + "<- down_payment"); //ราคาดาว
        console.log(year + "<- year");



        // alert(interest);
    }

    function down(value) {
        var car_price = document.getElementById('car_price').value;
        var ranged = document.getElementById('ranged');
        downed = value / car_price;
        if (downed <= 0.1) {
            ranged.value = 0;
        } else if (downed <= 0.2) {
            ranged.value = 1;
        } else if (downed <= 0.3) {
            ranged.value = 2;
        } else if (downed <= 0.4) {
            ranged.value = 3;
        } else if (downed <= 0.5) {
            ranged.value = 4;
        } else if (downed <= 0.6) {
            ranged.value = 5;
        }

    }
</script>