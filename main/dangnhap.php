<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/dangnhap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>HTML</title>
		
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

		<div class="container2">
			<form class="form-login" action="login_submit.php" method="POST" autocomplete="off">
				<h1>Đăng nhập</h1>
				<div class="form-text">
					<label >Username</label>
					<input required="true" type="text" name="username" >
				</div>
				<div class="form-text">
					<label >Mật khẩu</label>
					<input required="true" type="password" name="password" minlength="6">
				</div>
                <span>
                    <?php
                        if( isset($_SESSION["thongbao"]) ) {
                            echo $_SESSION["thongbao"];
                            unset($_SESSION["thongbao"]);
                        }
                    ?>
                </span>
				<button type="submit" name="submit">Đăng nhập</button>
				<span>Bạn chưa có tài khoản? <a href="dangky.php">Đăng ký</a></span>
			</form>
			
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
                    <a href="">abc.190010xx@st.phenikaa-uni.edu.vn</a>
                </div>
            </div>
        </footer>

		<script>
			const formLogin = document.querySelectorAll('.form-text input')
			const formLabel = document.querySelectorAll('.form-text label')
			
			for(let i = 0;i<2;i++){
				formLogin[i].addEventListener("mouseover",function(){
					formLabel[i].classList.add("focus")
				})
				formLogin[i].addEventListener("mouseover",function(){
					if(formLogin[i].value ==""){
						formLabel[i].classList.remove("focus")

					}
					
				})
			}
		</script>
			
	</body>
</html>
