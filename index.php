<?php
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý điện thoại</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="asset/css/my_css.css">
</head>
<body>
	<div class="container">
		<h3 style="text-align: center;">QUẢN LÝ ĐỒNG HỒ</h3>
		<hr>

		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  	<div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="image/anhbia.jpg" style="width: 1200px; height: 350px">
			   </div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<?php
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					}else{
						$page = 'index'; 
					}

					switch ($page) {
									
						case 'index':				
							include_once 'controller/product_c.php';
							$pro = new product_c();
							$pro->product();
							break;

						case 'add':
							include_once 'controller/product_c.php';
							$pro = new product_c();
							$pro->add();
							break;

						default:
							echo "<h4 style='color: red;'>ERROR 404, trang không tồn tại <span><a href='index.php' style='color: blue;'>Quay lại</a></span></h4>";
							break;
							} 
				?>
			</div>
			
		</div>
		<br>
	<div class="row footer">
		<div class="col-md-12 text-center">
				HBich. Copyright © 2011 All Rights Reserved. 
		</div>
	</div>
	</div>
	<script src="asset/js/jquery.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>