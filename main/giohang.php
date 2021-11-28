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
    
  <div class="giohang">
                    <h1>GIỎ HÀNG</h1>
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
                <div class="row mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="giohang.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="trangchu.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
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