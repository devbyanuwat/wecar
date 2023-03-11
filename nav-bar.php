<style>
.menu:hover {
    cursor: pointer;
}

.text-nav {
    font-weight: bold;
    font-size: 18px;
    display: inline-block;
    position: relative;
}

.text-nav::after {

    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #0087ca;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
}

.text-nav:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;

}
</style>


<ul class="nav justify-content-center bg-white shadow p-1 mb-3">
    <div class="col-1">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">
                <img src="img/logo.png" width="200%">
            </a>
        </li>
    </div>
    <div style="font-size:18px" class="col-10  d-flex justify-content-center align-self-center">
        <li class="nav-item">
            <div class="nav-link text-nav menu" aria-current="page" onclick="goToPage('main-page.php')"
                value="index.php">
                หน้าหลัก</div>
        </li>
        <li class="nav-item">
            <div class="nav-link text-nav menu" onclick="goToPage('sale.php')" value="sale.php">ขายรถกับเรา</div>
        </li>
        <li class="nav-item">
            <div class="nav-link text-nav menu" onclick="goToPage('menu_3.php')" value="menu_3.php">รักรถต้องรู้</div>
        </li>
        <li class="nav-item">
            <div class="nav-link text-nav menu" onclick="goToPage('standard.php')" value="standard.php">มาตราฐานคุณภาพ
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link text-nav menu " onclick="goToPage('contact.php')" value="contact.php">ติดต่อเรา</div>
        </li>

    </div>
</ul>


<script>
$(document).ready(function() {
    $.ajax({
        url: `pages/main-page.php`,
        success: function(data) {
            $('#content').html(data);
        }
    })
})

function goToPage(url) {
    $.ajax({
        url: `pages/${url}`,
        success: function(data) {
            $('#content').html(data);
        }
    })
}
</script>