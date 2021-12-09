<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu vi phạm</title>
    <link rel="icon" href="./image/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<?php include "header.php" ?>
    <div style="margin-top: 100px; min-height: 400px" id="main">
        <div class="container">
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="search_text" id="search_text" placeholder="Nhập tên/ Số điện thoại/ Biển số xe để tìm kiếm" class="form-control" />
				</div>
			</div>
			<br />
			<table id="result" class="table table-striped table-bordered"></table>
			<div id="vio-detail"></div>
        </div>
    </div>
		<!-- Modal -->
	<div class="modal fade" id="detaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-body">
			...
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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
<script>
$(document).ready(function(){
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data('*');	
			$('#vio-detail').html("");		
		}
	});
});
function load_data(search)
{
	$.get("./php/search_violation.php", {query:search}, function(data) {
		$('#result').html(data);
		setEventItem();
	})
}
function setEventItem() {
        $('.chi-tiet').click(function() {
		getVioDetail($(this).val());
		console.log($(this).val())
    })
}

function getVioDetail(id) {
    $.get("./php/violation_detail.php", {query: id}, function(data){
        $(".modal-body").html(data)
    })
}
</script>