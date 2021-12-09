<?php
    $isLogin = 0;
    $level = 0;
    session_start();
    if(isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
        $_SESSION['level'] = $_COOKIE['level'];
    }
    if(isset($_SESSION['username'])) {
        $isLogin = 1;
        $level = $_SESSION['level'];
    }
?>
<Style>
    #header {
        background-color: red !important;
    }

    .navbar li a {
        color: rgb(32, 32, 32) !important;
        font-size: 16px;
    }

    .navbar li a:hover {
        color: #0d6efd !important;
    }

    .nav-item.dropdown .dropdown-menu {
        position: absolute;
    }

    li.nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    .navbar-brand span {
        color: #0d6efd;
        font-size: 18px;
        font-weight: bold;
    }

    button:focus {
        box-shadow: none !important;
    }

    .bg-light {
        background-color: #f3f7fd !important;
    }

    .nav-item.nav-btn a:nth-child(2):hover {
        background-color: white;
    }
</Style>
<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
    <div class="container">
        <a href="./index.php" class="navbar-brand">
            <img src="./image/logo.png" alt="logo" height="40px">
            <span style="color: #0d6efd" !important;>GIAO THÔNG THỦ ĐÔ</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="./index.php" class="nav-link active">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                        Tra cứu
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./lookup-violations.php">Vi phạm</a></li>
                        <li><a class="dropdown-item" href="./traffic-laws.php">Luật giao thông</a></li>
                    </ul>
                </li>
                <li class="nav-item" style="margin-right: 8px;">
                    <a href="./about.php" class="nav-link">Giới thiệu</a>
                </li>
                <li class="nav-item" style="margin-right: 8px; display: <?php echo $level==2 ? "block" : "none" ?>;">
                    <a href="./admin.php" class="nav-link">Quản lý</a>
                </li>
                <li id="login-register" class="nav-item nav-btn" style="display: <?php echo $isLogin==1 ? "none" : "block" ?>;">
                    <a href="./login.php" class="btn btn-primary" style="color: white !important;">Đăng nhập</a>
                    <a href="./register.php" class="btn btn-outline-primary" style="color: #0d6efd !important;">Đăng
                        ký</a>
                </li>
                <li id="user-icon" class="nav-item dropdown" style="display: <?php echo $isLogin==0 ? "none" : "block" ?>;">
                    <div class="disable">
                        <ion-icon name="person-outline"
                            style="font-size: 24px; transform: translateY(40%); margin-left: 20px;"></ion-icon>
                    </div>
                    <ul class="dropdown-menu" style="transform: translateY(20%);">
                        <li><a class="dropdown-item" href="./php/logout.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>