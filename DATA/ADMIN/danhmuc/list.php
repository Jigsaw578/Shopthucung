<style>
.tieude{
        border: 1px solid #ccc;  
        background:#FF6600;
        padding: 15px 20px;
        border-radius:10px;
        margin:10px 30px;
    }
table{
     width:100%;
     margin-top:30px ;
 }
 .box td, .box th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
 }
 .oclick input{
    font-size:20px;
            background:#FF6600;
            margin:15px 10px;
            padding: 5px;
 }

    </style>
<div>
    <div class="tieude">
        <h2>DANH SÁCH LOẠI HÀNG</h2>
    </div>
    <div>
        <div class="box">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>Chỉnh Sửa</th>
                </tr>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=".$id;
                        $xoadm = "index.php?act=xoadm&id=".$id;
                        echo '<tr>
                                <td> <input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button"value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                             </tr>';
                    }
                ?>
                
            </table>
        </div>
        <div class="oclick">
            <input type="button" value = "Chọn tất cả">
            <input type="button" value = "Bỏ tất cả">
            <input type="button" value = "Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"> </a>
        </div>
    </div>
</div>