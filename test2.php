<?php 
    include "./php/connect.php";
    $this_id = $_GET['this_id'];
    $sql = "SELECT * FROM tin_tuc WHERE id_tintuc =".$this_id;
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
         echo $row['noi_dung'];
    }
?>
                    