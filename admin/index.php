<?php include('../header.php'); ?>

<body style="max-width: 100%;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-2 ">
                <?php include('menu.php'); ?>
            </div>
            <div class="col-9">
                <?php
                $q =  $_GET['q'];
                if ($q == "") {
                    include('car.php');
                } else if ($q == "car") {
                    include('car.php');
                } else if ($q == "shop") {
                    include('shop.php');
                } else if ($q == "doc") {
                    include('doc.php');
                } else if ($q == "standard") {
                    include('standard.php');
                } else if ($q == "add_car") {
                    include('add_car.php');
                }
                ?>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#submit").click(function() {

                var brand = $("#brand").find(':selected').val();
                var name = $("#name").val();

                console.log(brand);

                // if (name == '') {
                //     alert("Please fill all fields.");
                //     return false;
                // }
            })
        })
    </script>
    <script>
        function goods_comment() {
            alert("comment");
            const {
                value: text
            } = await Swal.fire({
                input: 'textarea',
                inputLabel: 'Message',
                inputPlaceholder: 'Type your message here...',
                inputAttributes: {
                    'aria-label': 'Type your message here'
                },
                showCancelButton: true
            })

            if (text) {
                Swal.fire(text)
            }
        }

        function show_comment() {
            alert("click");
        }
    </script>

    <script src="../style/validate.js"></script>