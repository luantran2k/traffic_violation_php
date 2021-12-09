<?php
    include "connect.php";
    $kq=array();
    for ($i = 1; $i <= 12; $i++) {
        $this_id = $i;
        if($this_id < 10) {
            $this_id = "0".$this_id;
        }
        $sql = "SELECT COUNT(ngay_vi_pham) AS so_ngay
        FROM vipham
        WHERE ngay_vi_pham LIKE '%2021-".$this_id."-%'";
        mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        array_push($kq, $row['so_ngay']);
    }
    foreach ($kq as $result) {
		echo $result." ";
	}
?>