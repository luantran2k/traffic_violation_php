<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao thông thủ đô</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "header.php" ?>
    <div style="margin-top: 100px;" id="main">
        <div class="container">
            <canvas id="lineChart" height="100px"></canvas>
            <p class="text-center fs-3 text-secondary py-5">Số vụ tai nạn theo tháng</p>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <h4>Loại phương tiện</h4>
                    <div class="d-flex justify-content-center">
                        <div style="width: 80%;">
                            <canvas id="piechart">
                            </canvas>
                            <p class="text-center mt-2">Theo loại phương tiện T11-2021 (%)</p>
                        </div>
                    </div>
                    <h4 class="mt-5">Tin được xem nhiều</h4>
                    <div class="hot-news">
                        <div class="hot-new my-3">
                            <a href="./new-detail.php">
                                <h5 class="text-dark fs-6">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến
                                    đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                        <div class="hot-new my-3">
                            <a href="./new-detail.php">
                                <h5 class="text-dark fs-6">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến
                                    đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                        <div class="hot-new my-3">
                            <a href="./new-detail.php">
                                <h5 class="text-dark fs-6">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến
                                    đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                        <div class="hot-new my-3">
                            <a href="./new-detail.php">
                                <h5 class="text-dark fs-6">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến
                                    đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                        <div class="hot-new my-3">
                            <a href="./new-detail.php">
                                <h5 class="text-dark fs-6">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến
                                    đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 px-5">
                    <h4>Tin tức mới</h4>
                    <div class="new row mb-4">
                        <div class="col-sm-3">
                            <img class="rounded mx-auto d-block" src="./image/new1.jpg" alt="new-img" width="100%">
                        </div>
                        <div class="col-sm-9">
                            <a class="new-link" href="./new-detail.php?this_id=1">
                                <h5 class="text-dark">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p class="text-secondary" style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                    <div class="new row mb-4">
                        <div class="col-sm-3">
                            <img class="rounded mx-auto d-block" src="./image/new3.jpg" alt="new-img" width="100%">
                        </div>
                        <div class="col-sm-9">
                            <a href="./new-detail.php?this_id=2">
                                <h5 class="text-dark">Công ty Metro Hanoi cho mượn chỗ đỗ xe miễn phí dịp cuối tuần</h5>
                            </a>
                            <p class="text-secondary" style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                    <div class="new row mb-4">
                        <div class="col-sm-3">
                            <img class="rounded mx-auto d-block" src="./image/new1.jpg" alt="new-img" width="100%">
                        </div>
                        <div class="col-sm-9">
                            <a href="./new-detail.php">
                                <h5 class="text-dark">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p class="text-secondary" style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                    <div class="new row mb-4">
                        <div class="col-sm-3">
                            <img class="rounded mx-auto d-block" src="./image/new1.jpg" alt="new-img" width="100%">
                        </div>
                        <div class="col-sm-9">
                            <a href="./new-detail.php">
                                <h5 class="text-dark">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p class="text-secondary" style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                    <div class="new row mb-4">
                        <div class="col-sm-3">
                            <img class="rounded mx-auto d-block" src="./image/new1.jpg" alt="new-img" width="100%">
                        </div>
                        <div class="col-sm-9">
                            <a href="./new-detail.php">
                                <h5 class="text-dark">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p class="text-secondary" style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                    <div class="new row mb-4">
                        <div class="col-sm-3">
                            <img class="rounded mx-auto d-block" src="./image/new1.jpg" alt="new-img" width="100%">
                        </div>
                        <div class="col-sm-9">
                            <a href="./new-detail.php">
                                <h5 class="text-dark">Bảo đảm thuận tiện nhất cho hành khách đến trải nghiệm tuyến đường
                                    sắt Cát Linh - Hà
                                    Đông</h5>
                            </a>
                            <p class="text-secondary" style="font-size: 12px;">Thời gian: 12:20 P.M GMT+7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div include-html="./html/footer.html" id="footer"></div>
    <script src="./js/include_html.js"></script>
    <script src="./js/chartjs.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>