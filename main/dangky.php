<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/dangky.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Đăng Ký</title>

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

        <div class="sptitle-col2">
			<div class="title-col2 spmenu">
				<img src="images/iconmenu.png"><span class="danhmuc">Danh mục sản phẩm</span>
				<ul>
					<li><a href="thucung.html">Chó</a>
						<ul class="spmenu_child">
							<li><a href="">Corgi</a></li>
							<li><a href="">Husky</a></li>
							<li><a href="">Pomeranian</a></li>
							<li><a href="">Alaskan</a></li>
							<li><a href="">Becgie</a></li>
							<li><a href="">Labrador</a></li>
							<li><a href="">American Eskimo</a></li>
							<li><a href="">Samoyed</a></li>
							<li><a href="">Yorkshire Terrier</a></li>
						</ul>
					</li>
					<li><a href="vatdung.html">Mèo</a>
						<ul class="spmenu_child">
							<li><a href="">Munchkin</a></li>
							<li><a href="">Balinese</a></li>
							<li><a href="">Somali</a></li>
							<li><a href="">Ragdoll</a></li>
							<li><a href="">Mèo Mướp</a></li>
							<li><a href="">Mèo lông dài </a></li>
							<li><a href="">Mèo lông ngắn</a></li>
							<li><a href="">Mèo Ba Tư</a></li>
						</ul>
					</li>
					<li><a href="vatdung.html">Phụ kiện</a>
						<ul class="spmenu_child">
							<li><a href="">Thức ăn chó</a></li>
							<li><a href="">Thức ăn mèo</a></li>
							<li><a href="">Chuồng thú cưng</a></li>
							<li><a href="">Vòng cổ, rọ mõn</a></li>
							<li><a href="">Đồ chơi, Đồ huấn luyện</a></li>
							<li><a href="">Cát vệ sinh cho mèo</a></li>
							<li><a href="">Đồ dùng cho mèo</a></li>
							<li><a href="">Đồ dùng cho Chó/a></li>
						</ul>
					</li>
				</ul>
				<div ><a href="https://www.facebook.com/"><img class="face" src="images/logofb.png"> </a><a href="https://www.youtube.com/"><img class="tube" src="images/logoyt.png"></a></div>
			</div>
		</div>
	</header>

        <div class="container2">
            
            
            <form class="form" action="submit.php" method="POST" autocomplete="off" onsubmit="return validateForm();">
                <h1>Đăng ký</h1>
                
                    <label >Username</label>
                    <input type="text" name="username">
                
                <div>
                    <label>Mật Khẩu</label>
                    <input required="true" type="password" name="password" id="pwd" minlength="6">   
                </div>
                <div>
                    <label>Xác nhận mật khẩu</label>
                    <input required="true" type="password" name="repassword" id="confirmation_pwd"  minlength="6">   
                </div>
                 
                <div>
                    <label >Số điện thoại</label>
                    <input required="true" type="text" name="phonenumber"> 
                </div>
                <span>
                    <?php
                        if( isset($_SESSION["thongbao"]) ) {
                            echo $_SESSION["thongbao"];
                            unset($_SESSION["thongbao"]);
                        }
                    ?>
                </span>
                <div class="dangky">
                    <input required="true" id="submit" type="submit" name="submit" value="Đăng ký">
                </div>
                
                <span>Bạn đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a></span>
            </form>    
        
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
<script type="text/javascript">
	function validateForm() {
		$pwd = $('#pwd').val();
		$confirmPwd = $('#confirmation_pwd').val();
		if($pwd != $confirmPwd) {
			alert("Mật khẩu không khớp, vui lòng kiểm tra lại")
			return false
		}
		return true
	}
</script>
    </body>
</html>