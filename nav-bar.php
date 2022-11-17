<style>
    .text-nav {
        font-weight: bold;
        font-size: 18px;
        display: inline-block;
        position: relative;
    }

    .text-nav::after {
        font-size: 24px;
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
            <a class="nav-link text-nav" aria-current="page" href="index.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nav" href="sale.php">ขายรถกับเรา</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nav" href="menu_3.php">รักรถต้องรู้</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nav" href="standard.php">มาตราฐานคุณภาพ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nav " href="contact.php">ติดต่อเรา</a>
        </li>
    </div>
</ul>