<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="Versatile/jquery.easy_slides.css" rel="stylesheet">
    <link rel="stylesheet" href="css/xemhang.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Versatile/Jquery.easy_slides.js"></script>
    <title>Xem thú cưng</title>

</head>
<body style="background-image: url(images/background.jpg); background-size: 100% 100%;">
	<header class="sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu">
					<a href="Trangchu.html"><img src="images/logo.png"></a>
				</div>
                <div class="col-2">
					
				</div>
				<div class="col-8 menu">
                    <ul>
                        <li><a href="">Liên hệ</a></li>	
                    </ul>
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

    <div class="mens">
         <div class="main">
                    <div class="wrap">
                             <ul class="breadcrumb"><a class="home" href="Trangchu.html">Trang chủ</a> / <a href="#">Thú cưng</a> / <a>Alaskan</a></ul>
                                <div class="span_2_of_3">
                                        <div class="images_3_of_2">
                                                <ul class="etalage">
                                                    <li>
                                                        <img class="etalage_thumb_image" src="images/Alaskan1.jpg" class="img-responsive" />                                     
                                                    </li>
                                                </ul>
                                         </div>

                                        <div class="desc1_span_3_of_2">
                                            <h3 class="m_3">Alaskan</h3>
                                            <p class="m_text2">Alaska là một giống chó cỡ lớn, hữu ích và thân thiện. Chúng sở hữu ngoại hình đáng yêu với bộ lông dày như một cục bông di động lớn. Cùng tính cách thân thiện, hoạt bát, thông minh và trung thành. Tại Việt Nam, Alaska rất được săn đón và nằm trong top những giống chó cảnh được nuôi nhiều nhất tại nước ta hiện nay. </p> 
                                                <p class="m_5">Giá  : 5.000.000 VNĐ</p>
                                                    <div class="title">
                                                        <form>
                                                            <input type="submit" value="buy" title="">
                                                        </form>
                                                    </div>
                                                
                                         </div>
                                 </div>
                         </div> 

                     <div class="supperwran">
                            <h5 class="m_1">Các loại thú cưng</h5>
					            <select class="dropdown">
                                    <option value="1">Alaskan</option>
                                    <option value="2">Husky</option>
                                    <option value="3">Chó Mực</option>
					             </select>
                            <section  class="sky-form">
                                <h4 class="giaca">Giá cả</h4>
                                    <div class="scroll-pane">
                                        <div class="col-4">
                                            <ul>
                                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> <=500K </label><br>
                                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 500K - 1Tr</label><br>
                                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 1Tr - 5Tr</label><br>
                                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 5Tr - 10Tr</label><br>
                                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i> >=10Tr</label>
                                            </ul>
                                        </div>
                                    </div>
                            </section>
                     </div>
             </div>   
    </div>

    <div class="bangthongtin">
        <h3 class="thongtin">Thông tin về thú cưng</h3>
        <table border="1">
            <caption>Bảng Thông tin thú cưng</caption>
            <thead>
                <tr>
                    <th rowspan="2" >Đặc điểm</th>
                    <th rowspan="3">Thông tin thú cưng</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Chủng loài</td>
                    <td>Alaskan</td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>Giống đực</td>
                </tr>
                <tr>
                    <td>Cân nặng</td>
                    <td>20 Kilogam</td>
                </tr>
                <tr>
                    <td>Độ tuổi</td>
                    <td>1 năm </td>
                </tr>
                <tr>
                    <td>Tình trạng sức khỏe</td>
                    <td>Tốt</td>
                </tr>
                    <td>Tình trạng tiêm Vác-xin</td>
                    <td>Đã tiên ngừa dại</td>
                </tr>
                <tr>
                    <td>Đặc điểm ngoại hình</td>
                    <td>Lông trắng đen, dễ thương</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section>
        <h3 class="hat3">MỘT SỐ THÚ CƯNG KHÁC</h3>
        <div class="slider slider_four_in_line">
            <div class="col">
				<a href="golden.html"><img src="images/Golden.jpg"></a>
               <p class="mot"> Golden-5.000.000Đ </p>
			</div>
            
            <div class="col">
			    <a href="becgie.html"><img src="images/Becgie.jpg"></a>
                <p class="mot">Becgie-5.000.000Đ</p>
			</div>
    
            <div class="col">
				<a href="alskan.html"><img src="images/Alaskan1.jpg"></a>
                <p class="mot">Alaskan-5.000.000Đ</p>
			</div>
        
            <div class="col">
				<a href="husky.html"><img src="images/Husky3.jpg"></a>
                <p class="mot">Husky-5.000.000Đ</p>
			</div>
    
            <div class="next_button"></div>
            <div class="prev_button"></div>
        </div>
        <script>
            $(document).ready(function () {
                $('.slider_four_in_line').EasySlides({
                    'autoplay': true,
                    'show': 9
                })
            });
        </script>
    </section>


    <div class="suynghivethucung"> 
        <h3 class="suynghi">Suy nghĩ về những chú thú cưng</h3>
        <p class="sp-text">
            Là một con người thì ai chả có thú vui. Với chúng tôi thì đó là ngắm nhìn những chú thú cưng chạy loanh quanh xung quanh mình cọ cọ đầu vào người chúng ta đòi ôm, đòi ăn... Rồi những lúc đau đầu khi ôm nó đi tắm, những lúc tắm là những lúc đánh trận với quân địch là chú thú cưng của mình, lúc đấy khổ nhưng mà vui. Tắm cho nó sạch sẽ rồi lại ôm nó đi ngủ với những chú chó to thì nó không khác gì con gấu bông cỡ lớn cả, còn với những chú mèo thì nó như cục bông nhìn rất đáng yêu.
        </p>
    </div>

    <div class="bang-ykien">
        <h3> Ý kiến của bạn </h3>
        <div class="form">
            <form action="" id="form1">
                <input type="text" id="fname" name="fname" placeholder="Họ tên"><br>
                <input type="text" id="femail" name="femail" placeholder="Địa chỉ Email"><br>
                <input type="text" id="fcontent" name="fcontent" placeholder="Nội dung yêu cầu"><br>
                <input type="submit" value="Gửi yêu cầu">
                </form>
        </div>
    </div>

</body>

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
</html>
