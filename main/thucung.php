<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
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
								<li><a href="giohang.html">Giỏ hàng</a></li>
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


		<div class="row2">
			<div class="col-12 title">
				<h3>MẶT HÀNG NỔI BẬT</h3>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Alaskan1.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Alaskan</p></a>
					</div>
					<div class="price">
						<a href=""><p>5.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Golden.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Golden</p></a>
					</div>
					<div class="price">
						<a href=""><p>6.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Becgie.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Becgie</p></a>
					</div>
					<div class="price">
						<a href=""><p>5.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Husky3.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Husky</p></a>
					</div>
					<div class="price">
						<a href=""><p>5.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Labrador.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Labrador</p></a>
					</div>
					<div class="price">
						<a href=""><p>9.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Samoyed.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Samoyed</p></a>
					</div>
					<div class="price">
						<a href=""><p>4.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Great Dane.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Great Dane</p></a>
					</div>
					<div class="price">
						<a href=""><p>10.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Doberman.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Doberman</p></a>
					</div>
					<div class="price">
						<a href=""><p>5.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>

			<div class="col-12 title">
				<h3>CHÓ</h3>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Pomeranian3.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Pomeranian</p></a>
					</div>
					<div class="price">
						<a href=""><p>5.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/dog4.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Corgi</p></a>
					</div>
					<div class="price">
						<a href=""><p>5.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/American Eskimo.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>American Eskimo</p></a>
					</div>
					<div class="price">
						<a href=""><p>8.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Yorkshire Terrier.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Yorkshire Terrier</p></a>
					</div>
					<div class="price">
						<a href=""><p>8.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>

			<div class="col-12 title">
				<h3>MÈO</h3>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Munchkin.png"></a>
					</div>
					<div class="name">
						<a href=""><p>Munchkin</p></a>
					</div>
					<div class="price">
						<a href=""><p>8.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Balinese.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Balinese</p></a>
					</div>
					<div class="price">
						<a href=""><p>11.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Somali.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Somali</p></a>
					</div>
					<div class="price">
						<a href=""><p>10.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<a href=""><img src="images/Ragdoll.jpg"></a>
					</div>
					<div class="name">
						<a href=""><p>Ragdoll</p></a>
					</div>
					<div class="price">
						<a href=""><p>15.000.000 VNĐ</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<div class="row footer">
				<div class="col-3">
					<h3>FACEBOOK</h3>
				</div>
				<div class="col-3">
					<h3>FROM TWITTER</h3>
					<ul class="menu_footer">
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>INFORMATION</h3>
					<ul class="menu_footer">
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>CONTACT US</h3>
					<ul class="menu_footer">
						<li><a href=""></a></li>
						<li><a href="">Phone:(00) 222 666 444</a></li>
						<li><a href="">Fax: (000) 000 00 00 0</a></li>
						<li><a href="">Email: abc.190010xx@st.phenikaa-uni.edu.vn</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 copy_right">
				<a href="">No copyRight designer By abc.190010xx@st.phenikaa-uni.edu.vn</a>
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