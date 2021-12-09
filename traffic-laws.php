<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu luật</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "header.php" ?>
    <div style="margin-top: 100px;" id="main">
        <div class="container">
            <div class="row">
                <div id="search-law" class="col-lg-3">
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tên người dùng" name="usrname">
                        </div>
                        <div class="input-group mb-3">
                            <button typp="submit" class="btn btn-primary" style="width: 100%;">
                                <span>
                                    <ion-icon name="search" style="transform: translateY(2px);"></ion-icon>
                                </span>
                                Tra cứu</button>
                        </div>
                    </form>
                    <a class="d-block pt-3" href="#">Lỗi phổ biến</a>
                    <ul class="list-group my-3">
                        <li class="list-group-item"><a class="text-dark" href="#">Vượt đèn đỏ</a></li>
                        <li class="list-group-item"><a class="text-dark" href="#">Đi quá tốc độ</a></li>
                        <li class="list-group-item"><a class="text-dark" href="#">ông đội mũ bảo hiểm</a></li>
                        <li class="list-group-item"><a class="text-dark" href="#">Lấn làn</a></li>
                        <li class="list-group-item"><a class="text-dark" href="#">Thiếu gương</a></li>
                    </ul>
                </div>
                <div id="law-detail" class="col-lg-9">
                    <h3>Mức phạt lỗi vượt đèn vàng, vượt đèn đỏ theo Nghị định 100
                    </h3>
                    <p>Nghị định 100 quy định chung về hành vi vượt đèn đỏ, vượt đèn vàng là hành vi không chấp hành
                        hiệu lệnh của đèn tín hiệu giao thông với mức phạt là như nhau, cụ thể:</p>
                    <ul>
                        <li>Đối với người điều khiển xe mô tô, xe gắn máy (kể cả xe máy điện): Phạt tiền từ 600.000 đồng
                            đến 1.000.000 đồng, tước quyền sử dụng Giấy phép lái xe từ 01 tháng đến 03 tháng (Điểm e,
                            khoản 4 và Điểm b Khoản 10 Điều 6).</li>
                        <li>Đối với người điều khiển xe ô tô và các loại xe tương tự xe ô tô: Phạt tiền từ 3.000.000
                            đồng đến 5.000.000 đồng, Tước quyền sử dụng Giấy phép lái xe từ 01 tháng đến 03 tháng; từ 02
                            đến 04 tháng nếu gây tai nạn giao thông (Điểm a Khoản 5, Điểm b, c Khoản 11 Điều 5 ).</li>
                        <li>Đối máy kéo, xe máy chuyên dùng: Phạt tiền từ 1.000.000 đồng đến 2.000.000 đồng, tước quyền
                            sử dụng Giấy phép lái xe (khi điều khiển máy kéo), chứng chỉ bồi dưỡng kiến thức pháp luật
                            về giao thông đường bộ (khi điều khiển xe máy chuyên dùng) từ 01 tháng đến 03 tháng; từ 02
                            đến 4 tháng nếu gây tai nạn (Điểm đ Khoản 5; Điểm a, b Khoản 10 Điều 7).</li>
                    </ul>
                    <p><strong>Lưu ý:</strong> Lỗi vượt đèn vàng được hiểu là lỗi không tuân thủ quy định “khi thấy tín
                        hiệu đèn vàng
                        (trừ tiến hiệu vàng nhấp nháy) phải dừng lại trước vạch dừng, trừ trường hợp đã đi quá vạch dừng
                        thì được đi tiếp”.</p>
                </div>
            </div>
        </div>
    </div>
    <div include-html="./html/footer.html" id="footer"></div>
    <script src="./js/include_html.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>