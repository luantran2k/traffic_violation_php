<?php include "./php/navControl.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin vi phạm</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "header.php" ?>
    <div style="margin-top: 100px;" id="main">
        <div class="container-sm py-5">
            <div class=" row">
                <div class="col">
                    <h3>Biên bản vi phạm giao thông số: 42389837</h3>
                    <p class="text-secondary" style="font-size: 12px;">Ngày: 10/10/2020 <span>Thời gian: 09.00 A.M
                            GMT+7</span></p>
                    <p>Người vi phạm: Trần Văn Luân</p>
                    <p>Số điện thoại: 19008198</p>
                    <p>Nghề nghiệp: Sinh viên</p>
                    <p>Loại phương tiện: Xe máy</p>
                    <p>Số biển: 29-X0 0000</p>
                    <p>Vị trí vi phạm: Đường Tố Hữu, Quận Nam Từ Liêm, Thành phố Hà Nội</p>
                    <p>Lỗi vi phạm: vượt đèn đỏ</p>
                    <p>Hình thức xử lý:</p>
                    <ul>
                        <li>Phạt tiền: 800.000 đồng</li>
                        <li>Tước quyền sử dụng Giấy phép lái xe từ 02 tháng tính từ ngày vi phạm</li>
                    </ul>
                    <p>Trạng thái nộp phạt: Đã nộp phạt</p>
                    <p>Hình thức nộp phạt: Tại chỗ</p>
                </div>
                <div class="col">
                    <h4>Vị trí vi phạm:</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1415.6439651160922!2d105.77843936323347!3d20.9873082419073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1636686400906!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
    <div include-html="./html/footer.html" id="footer"></div>
    <script src="./js/include_html.js"></script>
</body>

</html>