<?php
    $connect = mysqli_connect("localhost", "root", "", "viphamgiaothong");
    $output = '';
    $query = "SELECT loai_phuong_tien, COUNT(loai_phuong_tien) as soluong 
    FROM vipham
    GROUP BY loai_phuong_tien";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
	{
		$output .= $row["soluong"]." ";
	}
	echo $output;
?>