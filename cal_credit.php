<div class="containner">
    <div class="row">
        <div class="m-3">
            <div class="bg-light shadow p-3">
                <div class="row">
                    <div class="col-3 text-center bg-primary shadow-lg p-3 m-3 text-white rounded-3">
                        <img src="img/goods/Pajero_sport.png" alt="">
                        <div class="fs-3">คุณต้องการสินเชื่อ</div>
                        <center>
                            <div class="col-12 ">
                                <hr class="bg-danger border-5 border-top border-danger " width=" 50px">
                            </div>
                        </center>
                        <div class="fs-3">เพื่อรถคันนี้ไหม</div>
                    </div>
                    <div class="col-8  bg-light shadow-lg p-3 m-3 rounded-3">
                        <div class="row">
                            <div class="col-4 m-3">
                                <div class="fs-3 fw-bold">
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
                                        <div class="fs-6 fw-bold text-end mb-3" id="interest">2.7 </div>
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
                                            <input type="text" id="down_payment" class="form-control text-end fw-bold" placeholder="0" aria-label="" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">บาท</span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="range" width="70%" class="form-range" value="0" id="customRange2" style="pointer-events:none">
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
                                    <div class="col-12 d-flex justify-content-around">

                                        <!-- <div id="tab-1"><button id="48" onclick="btn_active(48);" class="btn btn-outline-secondary m-2">48</button></div>
                                        <div id="tab-2"><button id="60" onclick="btn_active(60);" class="btn btn-outline-secondary m-2">60</button></div>
                                        <div id="tab-3"><button id="72" onclick="btn_active(72);" class="btn btn-outline-secondary m-2">72</button></div>
                                        <div id="tab-4"><button id="84" onclick="btn_active(84);" class="btn btn-outline-secondary m-2">84</button></div> -->

                                    </div>
                                    <style>
                                        /* Style the buttons */
                                        .btn {
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
                                    </style>

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
                                            <button class="btn btn-outside-primary m-2 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">48</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outside-primary m-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">60</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outside-primary m-2" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">72</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-outside-primary m-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">84</button>
                                        </li>
                                    </ul>
                                    <script>
                                        // Add active class to the current button (highlight it)
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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

    function cal() {
        var result = document.getElementById('result');
        var interest = document.getElementById('interest').innerHTML;
        console.log(interest + "<- interest");
        var principle = document.getElementById('principle').innerHTML;
        console.log(principle + "<- principle");
        var car_price = document.getElementById('car_price').value;
        console.log(car_price + "<- car_price");
        var down_payment = document.getElementById('down_payment').value;
        console.log(down_payment + "<- down_payment");
        // var year = document.getElementById('year').innerHTML;
        console.log(year + "<- year");

        year = 48 / 12;
        total = (principle * interest / 100 * year) + principle / 48 + principle * 0.07
        total = total.toFixed(0)

        result.innerHTML = 10;

        principle.innerHTML = 10;
        // alert(interest);
    }
</script>