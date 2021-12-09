<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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

    #registerForm {
        border-radius: 10px;
        width: 500px;
        background-color: white;
        padding: 40px;
        border: 2px solid #ddd;
    }
</style>

<body>
    <form action="./php/add_account.php" method="post" id="registerForm">
        <h1 class="text-primary mb-4 text-center">Đăng ký</h1>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tên người dùng" name="username" required>
            <br>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Nhập lại khẩu" name="rPassword" required>
        </div>
        </div>
        <div class="text-center">
            <button name="add-account" type="submit" class="btn btn-primary mb-4">Đăng ký</button>
            <br>
            <a href="./login.php" class="text-center mt-5">Quay lại</a>
        </div>
    </form>
</body>

</html>