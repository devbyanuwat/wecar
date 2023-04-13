<?php include('../header.php'); ?>
<?php include('../style/bootstrap5.php'); ?>
<!-- 
<div id="dialog" title="Basic dialog">
    <input type="password" size="25" />
</div> -->

<?php
session_start();

if (!$_SESSION['user']) {
    include("chk_login.php");
} else {
    echo $_SESSION['user'];
}
?>
<script>
    // $("#dialog").dialog();
    let login;
    // let password = prompt.hide(chalk.yellow('password: '));
    // do {
    //     login = prompt("Please enter password!");
    //     // 
    // } while (login != "weusecar")
    // alert("success");
    // document.getElementById('body1').style.display = "block";
</script>

<body style="max-width: 100%;" id="body1">
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
                } else if ($q == "edit_car") {
                    include('edit_car.php');
                    include('');
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

        function change_status() {
            alert();


        }


        function show_comment() {
            alert("click");
        }

        const id = urlParams.get('car')
        if (id) {
            console.log(id);
        } else {
            console.log("failed");
        }
    </script>
    <script>
        function change_status(id) {
            (async () => {

                /* inputOptions can be an object or Promise */
                const inputOptions = new Promise((resolve) => {
                    setTimeout(() => {
                        resolve({
                            '0': 'อยู่ในคลัง',
                            '1': 'ประกาศขาย',
                            '2': 'ขายแล้ว',
                        })
                    }, 1000)
                })

                const {
                    value: color
                } = await Swal.fire({
                    title: 'Select what you performed.',
                    input: 'radio',
                    showCloseButton: true,
                    inputOptions: inputOptions,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to choose something!'
                        } else {

                            window.location = "../database/change_status.php?id=" + id + "&status=" + value;

                        }

                    }
                })
            })()
        }

        function del_goods(id) {
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    // window.location = "?id=" + id;
                    jQuery.ajax({
                        type: "POST",
                        url: "../database/del_goods.php",
                        data: 'id=' + id,
                        cache: false,
                        success: function(response) {
                            Swal.fire({
                                title: 'Deleted!',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1500,
                            }).then(
                                function() {
                                    location.reload();
                                })
                        }
                    });
                }
            })

        }
    </script>
    <script src="../style/validate.js"></script>
</body>