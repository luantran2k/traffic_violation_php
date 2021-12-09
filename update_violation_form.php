<?php
    include "./php/connect.php";
    $this_id = $_GET['this_id'];
    $sql = "SELECT * FROM vipham WHERE id_bienban = ".$this_id;
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['update-violation'])) {
        $nguoi_vi_pham   = addslashes($_POST['nguoi_vi_pham']);
        $so_dien_thoai   = addslashes($_POST['so_dien_thoai']);
        $loai_phuong_tien = addslashes($_POST['loai_phuong_tien']);
        $bien_so   = addslashes($_POST['bien_so']);
        $vi_tri_vi_pham   = addslashes($_POST['vi_tri_vi_pham']);
        $loi_vi_pham      = addslashes($_POST['loi_vi_pham']);
        $tien_phat   = addslashes($_POST['tien_phat']);
        $ghi_chu   = addslashes($_POST['ghi_chu']);
        $ngay_vi_pham      = addslashes($_POST['ngay_vi_pham']);
        $trang_thai      = addslashes($_POST['trang_thai']);

        $sql2 = "UPDATE vipham SET nguoi_vi_pham='$nguoi_vi_pham', so_dien_thoai='$so_dien_thoai', loai_phuong_tien='$loai_phuong_tien', bien_so='$bien_so', vi_tri_vi_pham='$vi_tri_vi_pham', loi_vi_pham='$loi_vi_pham', tien_phat=$tien_phat, ghi_chu='$ghi_chu', ngay_vi_pham='$ngay_vi_pham', trang_thai='$trang_thai' WHERE id_bienban=".$this_id;
        mysqli_query($conn, $sql2);
        header('location:./admin.php');  
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa vi phạm</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "header.php" ?>
    <div style="margin-top: 100px; min-height: 300px;" id="main" class="container center-div">
        <form method="post" id="update-violation-form" style="max-width: 800px; margin: auto;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tên người vi phạm" name="nguoi_vi_pham" value="<?php echo $row['nguoi_vi_pham'] ?>"
                    required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Số điện thoại người vi phạm"
                    name="so_dien_thoai" value="<?php echo $row['so_dien_thoai'] ?>" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Loại phương tiện" name="loai_phuong_tien"
                value="<?php echo $row['loai_phuong_tien'] ?>" 
                    required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Biển số" name="bien_so" value="<?php echo $row['bien_so'] ?>" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Vị trí vi phạm" name="vi_tri_vi_pham"
                value="<?php echo $row['vi_tri_vi_pham'] ?>"
                    required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Lỗi vi phạm" name="loi_vi_pham" 
                value="<?php echo $row['loi_vi_pham'] ?>"required>
            </div>
            <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Tiền phạt" name="tien_phat" 
                value="<?php echo $row['tien_phat'] ?>"required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ghi chú" name="ghi_chu" 
                value="<?php echo $row['ghi_chu'] ?>" >
            </div>
            <div class="input-group mb-3">
                <input type="date" class="form-control" placeholder="Ngày vi phạm" name="ngay_vi_pham"
                value="<?php echo $row['ngay_vi_pham'] ?>" required>
            </div>
            <p>Trạng thái:</p>
            <div class="input-group mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai_1"
                        value="Chưa xử lý" <?php echo ($row['trang_thai'] == "Chưa xử lý" ? 'checked="checked"': ''); ?> >
                    <label class="form-check-label pe-2" for="trang_thai_1">
                        Chưa xử lý
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai_2"
                        value="Đã xử lý" <?php echo ($row['trang_thai'] == "Đã xử lý" ? 'checked="checked"': ''); ?>>
                    <label class="form-check-label pe-2" for="trang_thai_2">
                        Đã xử lý
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai_3"
                        value="Đang thi hành" <?php echo ($row['trang_thai'] == "Đang thi hành" ? 'checked="checked"': ''); ?>>
                    <label class="form-check-label pe-2" for="trang_thai_3" >
                        Đang thi hành
                    </label>
                </div>
            </div>
            <div class="text-center">
                <a href="./admin.php" class="btn btn-secondary" >Hủy</a>
                <button name="update-violation" type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form>
    </div>
    <div include-html="./html/footer.html" id="footer"></div>
    <script src="./js/include_html.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>