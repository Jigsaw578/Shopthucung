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
					<a href="Trangchu.html"><img src="images/logo.png"></a>
				</div>
				<div class="col-2">
					
				</div>
				<div class="col-8 menu">
					<ul>
						<li><a href="Trangchu.html">Trang chủ</a></li>
						<li><a href="">Thú cưng</a>
							<ul class="menu_child">
								<li><a href="">Corgi</a></li>
								<li><a href="">Husky</a></li>
								<li><a href="">Pomeranian</a></li>
							</ul>
						</li>
						<li><a href="">Vật dụng</a></li>
						<li><a href="">Liên hệ</a></li>						
						<li><a href="dangnhap.php">Đăng nhập</a></li>
						<li><a href="dangky.php">Đăng kí</a></li>
					</ul>
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
                                                <p class="m_5"><?php echo $item['price']; ?></p>
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
    
    <h3 class="hat3">MỘT SỐ THÚ CƯNG KHÁC</h3>
    

    <div class="supper-col-one">
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
</html>
