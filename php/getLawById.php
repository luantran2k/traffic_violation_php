<?php
$connect = mysqli_connect("localhost", "root", "", "viphamgiaothong");
$output = '';
if(isset($_GET["query"])) {
    $search = mysqli_real_escape_string($connect, $_GET["query"]);
    $query = "
    SELECT * FROM luat_giao_thong
    WHERE id_luat = ".$search;
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $output .= $row['noi_dung_luat'];
        echo $output;
    }
}
?>