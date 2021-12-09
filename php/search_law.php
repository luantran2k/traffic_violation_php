<?php
$connect = mysqli_connect("localhost", "root", "", "viphamgiaothong");
$output = '';
$search = '';
if(isset($_GET["query"])) {
    $search = mysqli_real_escape_string($connect, $_GET["query"]);
    $query = "
    SELECT * FROM luat_giao_thong
    WHERE ten_luat LIKE '%".$search."%' LIMIT 5";
}
else {
    $query = "SELECT * FROM luat_giao_thong";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
                <li class="list-group-item" value="'.$row["id_luat"].'">'.$row["ten_luat"].'</li>
        ';
    }
    echo $output;
}
?>