
<div>
    <div>
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div>
        <div >
            <form action="index.php?act=listsp" method="post">
                <input type="text" name=kyw>
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
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ</th>
                    <th>LƯỢT XEM</th>
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
        <div>
            <input type="button" value = "Chọn tất cả">
            <input type="button" value = "Bỏ tất cả">
            <input type="button" value = "Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"> </a>
        </div>
    </div>
</div>