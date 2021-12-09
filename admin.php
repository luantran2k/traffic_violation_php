<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý vi phạm</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<script>
$(document).ready(function(){
    load_data()
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data('');			
		}
	});
    $('#export').click(function() {
        var thang = $('#thang').val();
        if(thang != null) {
            console.log(thang);
            window.location = `./php/export.php?thang=${thang}`;  
        }
        else {
            alert("Mời chọn tháng");
        }
    })
});
function load_data(search)
{
	$.get("./php/getDataAdmin.php", {query:search}, function(data) {
		$('#result').html(data);
	})
}
</script>

<body>
    <?php include "header.php" ?>
    <?php if($level != 2) {echo "<script>window.location.href = './index.php';</script>";}?>
    <div style="margin-top: 100px; min-height: 400px;" id="main" class="container">
        <div class="row">
            <div class="col-2">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#themvipham">
                    Thêm vi phạm
                </button>
            </div>
            <div class="col-2">
            <select id="thang" class="form-select" aria-label="Default select example">
                <option value="0" disabled selected>Tháng</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            </div>
            <div class="col-2 text-left">
                <button id="export" type="button" class="btn btn-outline-primary mb-3">
                    Xuất file excel
                </button>
            </div>
            <div class="col-2"></div>
            <div class="col-4">
            <input type="text" name="search_text" id="search_text" placeholder="Nhập tên/ Số điện thoại/ Biển số xe để tìm kiếm" class="form-control" />
            </div>
        </div>
        
        <table id="result" class="table table-striped table-bordered"></table>
    </div>
    <div include-html="./html/add-violation-modal.html"></div>
    <div include-html="./html/footer.html" id="footer"></div>
    <script src="./js/include_html.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>