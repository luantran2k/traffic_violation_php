<?php
 
    if (!isset($_POST['add-account'])){
        die('');
    }
    include('connect.php');
    header('Content-Type: text/html; charset=UTF-8');

    $username   = addslashes($_POST['username']);
    $password   = addslashes($_POST['password']);
    $email      = addslashes($_POST['email']);
    //Check username exist
    if (mysqli_num_rows(mysqli_query($conn,"SELECT username FROM taikhoan WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        die('');
    }
    $sql = "INSERT INTO taikhoan(username, password, email, level) 
    VALUE ('$username','$password','$email',1)";
    if(mysqli_query($conn, $sql)) {
        header('location:../login.php');  
    }                   
    else {
        echo "Đăng ký thất bại";
    }
?>