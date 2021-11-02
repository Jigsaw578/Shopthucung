<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
        $hinh = "no photo";
    }
?>

<div>   
    <div>
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div>
            <select name="iddm" >
                <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        if($iddm==$id) $s="selected"; else $s="";
                        echo'<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                    }
                     ?>
                </select>
            </div>
            <div>
                <label for="">Tên sản phẩm  </label>
                <input type="text" name="tensp" value="<?=$name?>">
            </div>
            <div>
                <label for="">Gía  </label>
                <input type="text" name="giasp" value="<?=$price?>">
            </div>
            <div>
                <label for="">Hình</label>
                <input type="file" name="hinh" >
                <?=$hinh?>
            </div>
            <div>
                <label for="">Mô tả  </label>
                <textarea name="mota" id="" cols="30" rows="10" value="<?=$mota?>"></textarea>
            </div>
            
            <div>
                <input type="hidden"name="id" value="<?=$id?>">
                <input type="submit"name="capnhat" value="Cập nhật">
                <input type="submit" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!=""))echo$thongbao;
            ?>
        </form>
    </div>

</div>