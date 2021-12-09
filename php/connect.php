<?php 
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'viphamgiaothong';

    $conn = new mysqLi($server, $user, $pass, $database);

    if($conn){
        mysqLi_query($conn, " SETNAME 'utf8' ");
    }
    else {
        echo 'Kết nối không thành công';
    }
?>