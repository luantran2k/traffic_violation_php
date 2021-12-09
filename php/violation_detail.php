<?php
$connect = mysqli_connect("localhost", "root", "", "viphamgiaothong");
$output = '';
if(isset($_GET["query"])) {
    $search = mysqli_real_escape_string($connect, $_GET["query"]);
    $query = "
    SELECT * FROM vipham
    WHERE id_bienban = ".$search;
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $output .= '                    
        <h3>Biên bản vi phạm giao thông số: '.$row['id_bienban'].'</h3>
        <p class="text-secondary" style="font-size: 12px;">Ngày: '.$row['ngay_vi_pham'].'</p>
        <p>Người vi phạm: '.$row['nguoi_vi_pham'].'</p>
        <p>Số điện thoại: '.$row['so_dien_thoai'].'</p>
        <p>Loại phương tiện: '.$row['loai_phuong_tien'].'</p>
        <p>Số biển: '.$row['bien_so'].'</p>
        <p>Vị trí vi phạm: '.$row['vi_tri_vi_pham'].'</p>
        <p>Lỗi vi phạm: '.$row['loi_vi_pham'].'</p>
        <p>Hình thức xử lý:</p>
        <ul>
            <li>Phạt tiền: '.$row['tien_phat'].'</li>
            <li>Ghi chú: '.$row['ghi_chu'].'</li>
        </ul>
        <p>Trạng thái nộp phạt: '.$row['trang_thai'].'</p>';
        echo $output;
    }
}
?>