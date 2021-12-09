<?php
 
    if (!isset($_POST['add-violation'])){
        die('');
    }
    include('connect.php');
    header('Content-Type: text/html; charset=UTF-8');

    $nguoi_vi_pham   = addslashes($_POST['nguoi_vi_pham']);
    $so_dien_thoai   = addslashes($_POST['so_dien_thoai']);
    $loai_phuong_tien = addslashes($_POST['loai_phuong_tien']);
    $bien_so   = addslashes($_POST['bien_so']);
    $vi_tri_vi_pham   = addslashes($_POST['vi_tri_vi_pham']);
    $loi_vi_pham      = addslashes($_POST['loi_vi_pham']);
    $tien_phat   = addslashes($_POST['tien_phat']);
    $ghi_chu   = addslashes($_POST['ghi_chu']);
    $ngay_vi_pham      = addslashes($_POST['ngay_vi_pham']);
    $trang_thai      = addslashes($_POST['trang_thai']);


    $sql = "INSERT INTO vipham(nguoi_vi_pham, so_dien_thoai, loai_phuong_tien, bien_so, vi_tri_vi_pham, loi_vi_pham, tien_phat, ghi_chu, ngay_vi_pham, trang_thai) 
    VALUE ('$nguoi_vi_pham', '$so_dien_thoai', '$loai_phuong_tien', '$bien_so', '$vi_tri_vi_pham', '$loi_vi_pham', $tien_phat, '$ghi_chu', '$ngay_vi_pham', '$trang_thai')";
    if(mysqli_query($conn, $sql)) {
      header('location:../admin.php');  
        echo "Đăng ký thành công";
    }                   
    else {
        echo "Đăng ký thất bại";
    }
?>