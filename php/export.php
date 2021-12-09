<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "viphamgiaothong");
$output = '';
$thang = $_GET['thang'];
$query = "SELECT * FROM vipham WHERE ngay_vi_pham LIKE '%-".$thang."-%' ORDER BY ngay_vi_pham";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '
            <table class="table" bordered="1">  
            <tr> 
                <th>Id biên bản</th>  
                <th>Người vi phạm</th>  
                <th>Số điện thoại</th>  
                <th>Loại phương tiện</th>  
                <th>Số biển</th>
                <th>Vị trí vi phạm</th>
                <th>Lỗi vi phạm</th>
                <th>Phạt tiền</th>
                <th>Ghi chú</th>
                <th>Trạng thái nộp phạt</th>
                <th>Ngày vi phạmt</th>
            </tr>';
    while($row = mysqli_fetch_array($result))
    {
    $output .= '<tr>  
                    <td>'.$row["id_bienban"].'</td>
                    <td>'.$row["nguoi_vi_pham"].'</td>
                    <td>'.$row["so_dien_thoai"].'</td>
                    <td>'.$row["loai_phuong_tien"].'</td>
                    <td>'.$row["bien_so"].'</td>
                    <td>'.$row["vi_tri_vi_pham"].'</td>
                    <td>'.$row["loi_vi_pham"].'</td>
                    <td>'.$row["tien_phat"].'</td>
                    <td>'.$row["ghi_chu"].'</td>
                    <td>'.$row["trang_thai"].'</td>
                    <td>'.$row["ngay_vi_pham"].'</td>
                </tr>
    ';
    }
    $output .= '</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=Báo cáo tháng '.$thang.'.xls');
    echo $output;
}
?>