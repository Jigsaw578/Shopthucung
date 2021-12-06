<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


        <div class="main" style="justify-content: space-between;">
                    
            <div class="wrap">
                <ul class="breadcrumb"><a class="home" href="Trangchu.html">Trang chủ</a> / <a href="#">Thú cưng</a> / <a>Alaskan</a></ul>
                                
                <?php
                            include "connect_db.php";
                            $this_id= $_GET['this_id'];
                            
                            $sql = "SELECT * FROM sanpham WHERE id='$this_id'";

                            
                            $result = mysqli_query($conn,$sql)
                            

                        ?>

                        <?php foreach ($result as $item) { ?>
                <?php } ?>        
                            
                            <div class="span_2_of_3" style="justify-content: space-between;">
                                        <div class="images_3_of_2">
                                                <ul class="etalage">
                                                    <li>
                                                        <img class="etalage_thumb_image" src="./upload/<?php echo $item['img']; ?>" class="img-responsive" width="100%" height="400px">                                     
                                                    </li>
                                                </ul>
                                         </div>

                                        <div class="desc1_span_3_of_2">
                                            <h3 class="m_3"><?php echo $item['name']; ?></h3>
                                            <p class="m_text2"><?php echo $item['mota']; ?></p> 
                                                <p class="m_5"><?php echo $item['price']; ?> VND</p>
                                                <?php
                                                    echo '<div class="title">
                                                        <form action="giohang.php" method="post">
                                                            <input type="number" name="soluong" min="1" max="10" value="1">
                                                            <input type="submit" name="addcart" value="Thêm vào giỏ hàng" >
                                                            
                                                            <input type="hidden" name="tensp" value="'.$item['name'].'">
                                                            <input type="hidden" name="gia" value="'.$item['price'].'">
                                                            <input type="hidden" name="hinh" value="'.$item['img'].'">

                                                        </form>
                                                    </div>'
                                                ?>    
                                                    <!-- <div class="title">
                                                        <form action="giohang.php" method="post">
                                                            <input type="number" name="soluong" min="1" max="10" value="1">
                                                            <input type="submit" value="buy" title="">
                                                            <input type="hidden" name="tensp" value="">
                                                            <input type="hidden" name="gia" value="10">
                                                            <input type="hidden" name="hinh" value="1.jpg">
                                                        </form>
                                                    </div> -->
                                                
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

            <div class="quyenloikhachhang">
                <h2>Quyền lợi khách hàng</h2>
                <ul>
                    <li> Tặng bộ đồ dùng giá trị 1.000.000 đồng.</li>
                    <li>Bảo hành sức khỏe dài hạn. Gói bảo hành lên đến 365 ngày (liên hệ để biết thêm chi tiết).</li>
                    <li>Giảm 5% giá phụ kiện trọn đời tại hệ thống Dogily Petshop.</li>
                    <li>Giảm 20% phí dịch vụ Spa Grooming & Pet Hotel tại Tphcm, Hà Nội.</li>
                    <li>Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.</li>
                    <li> Miễn phí giao hàng toàn quốc.</li>
                </ul>
            </div>
            <div class="luuy">
                <h2>Lưu ý</h2>
                <ul>
                    <li>Luôn có sẵn HÀNG TRĂM BÉ POODLE CON ĐỦ CHỦNG LOẠI tại hệ thống các Trại cún, cửa hàng của Công ty Cổ phần Dogily Việt Nam trên toàn quốc.</li>
                    <li>Toàn bộ hình ảnh, video chó Poodle THẬT trong bài viết là thuộc bản quyền của Công ty Cổ phần Dogily Việt Nam.</li>
                </ul>
            </div>
                        
    <h3 class="hat3">MỘT SỐ THÚ CƯNG KHÁC</h3>
    

    <div class="row2" style="margin: 0px 20px;">
    <?php
        include "connect_db.php";
        $sql = "SELECT *FROM sanpham";
        $result = mysqli_query($conn,$sql);
    ?>
    <?php foreach ($result as $item) { ?>

        <div class="col-2th ">
            <div class="card">
                <div class="image">
					<a href="view.php?this_id=<?php echo $item['id'] ?>">
                        <img src="./upload/<?php echo $item['img']; ?>">
                    </a>
				</div>
				
					<a class="name" href="view.php?this_id=<?php echo $item['id'] ?>"><?php echo $item['name']; ?></a>
				
				
					<a href="view.php?this_id=<?php echo $item['id'] ?>" ><p class="price"><?php echo $item['price']; ?> VND</p></a>
				
            </div>
        </div>
    <?php } ?>
    
    </div>

    

    <div class="suynghivethucung"> 
        <h3 class="suynghi">Suy nghĩ về những chú thú cưng</h3>
        <p class="sp-text">
            Là một con người thì ai chả có thú vui. Với chúng tôi thì đó là ngắm nhìn những chú thú cưng chạy loanh quanh xung quanh mình cọ cọ đầu vào người chúng ta đòi ôm, đòi ăn... Rồi những lúc đau đầu khi ôm nó đi tắm, những lúc tắm là những lúc đánh trận với quân địch là chú thú cưng của mình, lúc đấy khổ nhưng mà vui. Tắm cho nó sạch sẽ rồi lại ôm nó đi ngủ với những chú chó to thì nó không khác gì con gấu bông cỡ lớn cả, còn với những chú mèo thì nó như cục bông nhìn rất đáng yêu.
        </p>
    </div>

    <div class="bang-ykien">
        <h3> Ý kiến của bạn </h3>
        <div class="bang">
            <div class="ykien">
                <textarea name="ykiencuaban" id="" cols="100" rows="6"> Hãy ghi ý kiến của bạn vào đây </textarea>
            </div>
            <div class="guidi">
                <button type="Submitbutton" style="text-align: center">GỬI ĐI</button>
            </div>
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
