<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu luật</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    input::-webkit-calendar-picker-indicator {
        display: none !important;
    }
    li {
        cursor: pointer;
    }
    h4 {
        font-weight: normal;
        color: #0d6efd;
    }
</style>
<script>
$(document).ready(function(){
    setEventItem();
	function load_data_search(query)
	{
		$.ajax({
			url:"./php/search_law.php",
			method:"get",
			data:{query:query},
			success:function(data)
			{
				$('#search-res').html(data);
                setEventItem();
			}
		});
	}
	$('#search-law-input').keyup(function(){
		let search = $(this).val();
		if(search != '')
		{
			load_data_search(search);
		}
		else
		{
			load_data_search('*');			
		}
	});
});
function setEventItem() {
        $('.list-group-item').click(function() {
        getLawById($(this).val());
    })
}

function getLawById(id) {
    $.get("./php/getLawById.php", {query: id}, function(data){
        $("#law-detail").html(data)
    })
}
</script>
<body>
    <?php include "header.php" ?>
    <div style="margin-top: 100px;" id="main">
        <div class="container">
            <div class="row">
                <div id="search-law" class="col-lg-3">
                    <div class="input-group mb-3">
                        <input id="search-law-input" list="lawList" type="text" class="form-control" placeholder="Nhập tên lỗi" name="usrname">
                    </div>
                    <ul id="search-res" class="list-group my-3">
                        
                    </ul>
                    <a class="d-block pt-3" href="#">Lỗi phổ biến</a>
                    <ul class="list-group my-3">
                        <li class="list-group-item" value="1">Vượt đèn đỏ</li>
                        <li class="list-group-item" value="2">Đi quá tốc độ</li>
                        <li class="list-group-item" value="7">Không đội mũ bảo hiểm</li>
                        <li class="list-group-item" value="4">Lấn làn</li>
                        <li class="list-group-item" value="3">Thiếu gương</li>
                    </ul>
                </div>
                <div id="law-detail" class="col-lg-9">

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