<?php
    include "connect.php";
    $this_id = $_GET['this_id'];
    $sql = "DELETE FROM vipham WHERE id_bienban='$this_id'";
    mysqli_query($conn, $sql);
    header('location:../admin.php'); 
?>