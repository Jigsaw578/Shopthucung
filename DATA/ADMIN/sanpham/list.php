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
<div>
    <div class="tieude">
        <h2>DANH SÁCH SẢN PHẨM</h2>
    </div>
    <div class="container">
        <div >
            <form action="index.php?act=listsp" method="post">
                <input type="text" name=kyw >
                <select name="iddm" >
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo'<option value="'.$id.'">'.$name.'</option>';
                    }
                     ?>
                </select>
                <input type="submit"name="listok" value="GO">
            </form>
            <table class="customers">
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ</th>
                    <th>LƯỢT XEM</th>
                    <th>Chỉnh sửa</th>
                </tr>
                <?php
                    foreach($listsanpham as $sanpham){
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        $hinhpath="../upload/".$img;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='80' width='80'>";
                        }else{
                            $hinh = "no photo";
                        }
                        echo '<tr>
                                <td> <input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$mota.'</td>
                                <td>'.$luotxem.'</td>
                                <td><a href="'.$suasp.'"><input type="button"value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                             </tr>';
                    }
                ?>
                
            </table>
        </div>
        <div class="button">
            <input type="button" value = "Chọn tất cả">
            <input type="button" value = "Bỏ tất cả">
            <input type="button" value = "Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"> </a>
        </div>
    </div>
</div>