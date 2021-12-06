<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
include "connect_db.php"; 
?>
<body style="background-image: url(images/background.jpg); background-size: 100% 100%;">
<header class="sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu">
					<a href="trangchu.php"><img src="images/logo.png"></a>
				</div>
				<div class="col2 menu2">
					<ul>
						<li><a href="trangchu.php">Trang chủ</a></li>
						<li><a href="thucung.php">Thú cưng</a>
							<ul class="menu_child">
								<li><a href="">Corgi</a></li>
								<li><a href="">Husky</a></li>
								<li><a href="">Pomeranian</a></li>
							</ul>
						</li>
						<li><a href="vatdung.php">Vật dụng</a>
							<ul class="menu_child">
								<li><a href="">Thức ăn chó</a></li>
								<li><a href="">Thức ăn mèo</a></li>
								<li><a href="">Chuồng thú cưng</a></li>
							</ul>
						</li>
						<li><a href="">Liên hệ</a></li>	
					</ul>
				</div>
				<div class="col-8 menu">
					<?php 
                        if(empty($_SESSION['user'])){
	
                	?>	
					<ul>
							
							<li><a href="dangnhap.php">Đăng nhập</a></li>
							<li><a href="dangky.php">Đăng kí</a></li>
					</ul>
					<?php    

                        }else{
                    ?>
					
					<ul>
						<li><img class="user" src="images/user.png" style="height: 40px; margin-left: 30px;">
                            <ul class="menu_child">
								<li style="color: white; font-size: 20px;">Xin chào: <span style="color: blue;"><?=$_SESSION['user']?> </span></li>
								<li><a href="giohang.php">Giỏ hàng</a></li>
								<li><a href="logout.php">Log out</a></li>
							</ul>
                        </li>
					</ul>
					<?php }?>
				</div>
			</div>
		</div>
	</header>
	
	<div class="container slider-margin">

		<div class="row">
			<div class="col-12">
					<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">
				1/3
			</div>
			<img src="images/banner1.jpg" style="width: 100%;">
		</div>
		<div class="mySlides fade">
			<div class="numbertext">
				2/3
			</div>
			<img src="images/banner2.webp" style="width: 100%;">
		</div>
		<div class="mySlides fade">
			<div class="numbertext">
				3/3
			</div>
			<img src="images/banner3.png" style="width: 100%;">
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<div style="text-align: center;">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot"onclick="currentSlide(3)"></span>
	</div>
			</div>
		</div>


		<div class="row2">
			<div class="col-12 title">
				<h3>MẶT HÀNG NỔI BẬT</h3>
			</div>

            <?php
                    include "connect_db.php";
                    $sql = "SELECT *FROM sanpham";
                    $result = mysqli_query($conn,$sql);
                ?>
            <?php foreach ($result as $item) { ?>
			<div class="col-2th">
                
				<div class="card">
					<div class="image">
						<a href="view.php?this_id=<?php echo $item['id'] ?>">
                            <img src="./upload/<?php echo $item['img']; ?>">
                        </a>
					</div>
					<div class="name">
						<a href="view.php?this_id=<?php echo $item['id'] ?>"><p><?php echo $item['name']; ?></p></a>
					</div>
					<div class="price">
						<a href="view.php?this_id=<?php echo $item['id'] ?>"><p><?php echo $item['price']; ?> VND</p></a>
					</div>
				</div>
                
			</div>
			<?php } ?>
		</div>
	</div>
	
	<footer class="footer-max">
		<div class="image-footer">
			<div class="one-footer">
				<div><img src="images/tinnhan.png"></div>
				<div>
					<form id="form2" class="form2">
						<div><input type="text" id="fcontent" name="fcontent" placeholder="Đăng kí nhận tin"><br></div>
						<div class="dangky"><input type="submit" value="Đăng Ký"></div>
					</form>
				</div>
			</div>

			<div class="two-footer">
				<div><img src="images/xe.png"></div>
				<div class="giaohang">Giao hàng miễn phí tại Hà Nội </div>
			</div>

			<div class="three-footer">
				<img src="images/nganhang.png">
			</div>
		</div>

		<div class="thongtin-footer">
			<div class="chungtoi">
				<div>
					<h3>Về chúng tôi</h3>
					<ul>
						<li>Giới thiệu</li>
						<li>Các chi nhánh</li>
						<li>Liên hệ</li>
					</ul>
					<p><img src="images/logo.png"></p>
				</div>
				<div class="hotro">
					<h3>Hỗ trợ khách hàng</h3>
					<ul>
						<li>Hướng dẫn mua hàng</li>	
						<li>Điều khoản và điều kiện</li>
						<li>Điều khoản và điều kiện</li>
						<li>Chính sách giao hàng</li>
						<li>Chính sách đổi trả</li>
						<li>Hướng dẫn gửi trả hàng</li>
						<li>Chính sách bảo hành</li>
						<li>Mua trả góp</li>
						<li>Chất lượng dịch vụ</li>
					</ul>
				</div>
			</div>

			<div class="hotrotimkiem">
				<h3>Hỗ trợ tìm kiếm</h3>
				<a href=""><span>Mèo lông ngắn</span></a>
				<a href=""><span>Mèo Mướp</span> </a>
				<a href=""><span>Munchkin</span></a>
				<a href=""><span>Balinese</span></a>
				<a href=""><span>Somali</span></a>
				<a href=""><span>Ragdoll</span></a>
			</div>

			<div class="diachilienhe">
				<h3>Địa chỉ liên hệ</h3>
				<ul>
					<li>81-95 Nghi Tàm, phường Yên Phụ, quận Tây Hồ, Tp Hà Nội. Chỉ đường.</li>
					<li>606/121 đường Ba Tháng Hai, phường 14, quận 10, thành phố Hồ Chí Minh Chỉ đường</li>
					<li>171 Quang Trung, phường 10, quận Gò Vấp, thành phố Hồ Chí Minh. Chỉ đường. </li>
					<li>391 Đường Cộng Hoà, phường 13, quận Tân Bình, thành phố Hồ Chí Minh Chỉ đường</li>
					<li>108 Lý Nam Đế, phường 8, thành phố Đà Lạt, tỉnh Lâm Đồng. Chỉ đường.</li>
					<li>Email: dogily.vn@gmail.com</li>
					<li>Hotline mua thú cưng: 0916299911 và 0965086079</li>
					<li>Hotline phụ kiện: 0392086079</li>
					<li>https://dogily.vn</li>
				</ul>
			</div>
		</div>


	</footer>
	
</body>
<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += "active";
	  setTimeout(showSlides, 1000);
	}
</script>
</html>