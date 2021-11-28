<style>
 table{
     width:100%;
     margin-top:30px ;
 }
 
.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
}
.customers tr:nth-child(even){
    -color: #f2f2f2;
}

.customers tr:hover {
    background-color: #FFFFF0;
}
.customers th {
 
  
  padding-top: 12px;
  padding-bottom: 12px;
  text-align:center;
  background-color:#FFCC66;
  color: black;
}
.button{
    margin-top: 20px ;
    margin-bottom:20px;
    border:1px solid while;
    height: 50px;
}
.button input{
    font-size:20px;
    margin:15px;
    padding: 10px;
    background:#FF6600;
}
form input {
    font-size:20px;
}
form select {
    font-size:20px;
}
.container{
    border:1px solid #ccc;
    padding: 15px;
    margin: 15px 35px;
}
.tieude{
    border: 1px solid #ccc;  
    background:#FF6600;
    padding: 15px 20px;
    border-radius:10px;
    margin:10px 30px;
}

</style>

<div >
            <div class="tieude">
                <H1>DANH SÁCH TÀI KHOẢN</H1>
            </div>
            <div class="container">

                <div class="customers">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ TK</th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>MẬT KHẨU</th>
                            <th>ĐIỆN THOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                $suatk="index.php?act=suatk&id=".$id;
                                $xoatk="index.php?act=xoatk&id=".$id;

                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$password.'</td>
                                        <td>'.$phonenumber.'</td>
                                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                            }
                        
                        ?>
                        
                        
                    </table>
                </div>
                <div class="button">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                </div>
            </div>
        </div>