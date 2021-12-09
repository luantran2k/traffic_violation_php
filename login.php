<?php 
    include './php/connect.php';
    session_start();
    if(isset($_SESSION['username'])) {
        header('location:index.php');
    }
    if(isset($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $level = $row['level'];
            $_SESSION['level'] = $level;
            $_SESSION['username'] = $username;
            setcookie("level", $level, time() + 3600, '/');
            setcookie("username", $username, time() + 3600, '/');
            header("location:index.php");
        }
        else {
            echo "Tài khoản/ mật khẩu không chính xác";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<style>
    body {
        background-color: #f2f7ff;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #loginForm {
        border-radius: 10px;
        width: 500px;
        background-color: white;
        padding: 40px;
        border: 2px solid #ddd;
    }
</style>

<body>
    <form action="login.php" method="post" id="loginForm">
        <img src="./image/logo.png" alt="Logo" width="200px" height="200px"
            style="display: block; margin: 0 auto 40px; " />
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tên người dùng" name="username" required>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
        </div>
        </div>
        <div class="text-center">
            <button name="dangnhap" type="submit" class="btn btn-primary">Đăng nhập</button>
            <p class="mt-2">Hoặc</p>
            <a href="./register.php" class="btn btn-outline-primary">Đăng ký</a>
        </div>
    </form>
</body>

</html>