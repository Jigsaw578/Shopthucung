<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }

    function showgiohang(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    echo '<tr>
                            <td>'.($i+1).'</td>
                            <td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                            <td>
                                <div>'.$tt.'</div>
                            </td>
                            <td>
                                <a href="giohang.php?delid='.$i.'">Xóa</a>
                            </td>
                        </tr>';
                }
                echo '<tr>
                        <th colspan="5">Tổng đơn hàng</th>
                        <th>
                            <div>'.$tong.'</div>
                        </th>
    
                    </tr>';
            }else{
                echo "Giỏ hàng rỗng!";
            }    
        }
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/giohang.css">
</head>
<body style="background-image: url(images/background.jpg); background-size: 100% 100%;">
<header class="sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu">
					<a href="trangchu.php"><img src="images/logo.png"></a>
				</div>
				<div class="col2 menu2">
					
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
								<li><a href="giohang.php">Giỏ hàng</a></li>
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
    
  <div class="giohang">
                    <h1>GIỎ HÀNG</h1>
                    <div class="customers">

                   
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php showgiohang(); ?>
                        </table>
                </div>
                 </div>
                <div class="dathang">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="giohang.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="trangchu.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
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

    <script>
        var remove_cart = document.getElementsByClassName("btn-danger");
for (var i = 0; i < remove_cart.length; i++) {
  var button = remove_cart[i]
  button.addEventListener("click", function () {
    var button_remove = event.target
    button_remove.parentElement.parentElement.remove()
  })
}
function updatecart() {
  var cart_item = document.getElementsByClassName("cart-items")[0];
  var cart_rows = cart_item.getElementsByClassName("cart-row");
  var total = 0;
  for (var i = 0; i < cart_rows.length; i++) {
    var cart_row = cart_rows[i]
    var price_item = cart_row.getElementsByClassName("cart-price ")[0]
    var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0]
    var price = parseFloat(price_item.innerText)// chuyển một chuổi string sang number để tính tổng tiền.
    var quantity = quantity_item.value // lấy giá trị trong thẻ input
    total = total + (price * quantity)
  }
  document.getElementsByClassName("cart-total-price")[0].innerText = total + '.000.000 VNĐ'
  // Thay đổi text = total trong .cart-total-price. Chỉ có một .cart-total-price nên mình sử dụng [0].
}
var quantity_input = document.getElementsByClassName("cart-quantity-input");
for (var i = 0; i < quantity_input.length; i++) {
  var input = quantity_input[i];
  input.addEventListener("change", function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart()
  })
}
    </script>
</body>
</html>