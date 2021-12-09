<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý vi phạm</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "header.php" ?>
    <?php if($level != 2) { header('location:./index.php');}?>
    <div style="margin-top: 100px; min-height: 400px;" id="main" class="container">
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#themvipham">
        Thêm vi phạm
    </button>
    <div include-html="./html/add-violation-modal.html"></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Người vi phạm</th>
                <th>Số điện thoại</th>
                <th>Biển số xe</th>
                <th>Loại phương tiện</th>
                <th>Lỗi vi phạm</th>
                <th>Ngày vi phạm</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "./php/connect.php";

                $sql = "SELECT * FROM vipham ORDER BY ngay_vi_pham DESC";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['nguoi_vi_pham'] ?></td>
                    <td><?php echo $row['so_dien_thoai'] ?></td>
                    <td><?php echo $row['bien_so'] ?></td>
                    <td><?php echo $row['loai_phuong_tien'] ?></td>
                    <td><?php echo $row['loi_vi_pham'] ?></td>
                    <td><?php echo $row['ngay_vi_pham'] ?></td>
                    <td>
                        <a href="./php/delete_violation.php?this_id=<?php echo $row['id_bienban'] ?>" class="btn btn-outline-danger" >Xóa</a>
                        <a href="./update_violation_form.php?this_id=<?php echo $row['id_bienban'] ?>" class="btn btn-outline-warning" >Sửa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <div include-html="./html/footer.html" id="footer"></div>
    <script src="./js/include_html.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>