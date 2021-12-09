<?php
$connect = mysqli_connect("localhost", "root", "", "viphamgiaothong");
$output = '';
if(isset($_GET["query"]))
{
	$search = mysqli_real_escape_string($connect, $_GET["query"]);
	$query = "
	SELECT * FROM vipham 
	WHERE nguoi_vi_pham LIKE '%".$search."%'
	OR so_dien_thoai LIKE '%".$search."%' 
	OR bien_so LIKE '%".$search."%'
    ORDER BY ngay_vi_pham DESC";
}
else
{
	$query = "
	SELECT * FROM vipham ORDER BY ngay_vi_pham DESC";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Người vi phạm</th>
							<th>Ngày vi phạm</th>
							<th>Lỗi vi phạm</th>
							<th>Biển số xe</th>
							<th>Số điện thoại</th>
                            <th></th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["nguoi_vi_pham"].'</td>
				<td>'.$row["ngay_vi_pham"].'</td>
				<td>'.$row["loi_vi_pham"].'</td>
				<td>'.$row["bien_so"].'</td>
				<td>'.$row["so_dien_thoai"].'</td>
                <td>
                <a href="./php/delete_violation.php?this_id='.$row['id_bienban'].'" class="btn btn-outline-danger" >Xóa</a>
                <a href="./update_violation_form.php?this_id='.$row['id_bienban'].'" class="btn btn-outline-warning" >Sửa</a>
            </td>
			</tr>
		';
	}
	echo $output;
}
?>