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
<style>
    .tieude{
    border: 1px solid #ccc;  
    background:#FF6600;
    padding: 15px 20px;
    border-radius:10px;
    margin:10px 30px;
    }
.content form{
            border: 1px solid #ccc;
            font-size:20px;  
            background:#E8E8E8;
            padding: 15px 30px;
            border-radius:10px;
            margin:15px;
}
.content form .box1 select{
    font-size:20px;  
}
.content form .box1 input{
    width:50%;
    height: 25px;
}
.content form .box1 div{
    margin:10px;
}
.submitt input{
    font-size:20px;
    margin:15px 10px;
   padding: 5px;
    background:#FF6600;
}
</style>

<div>   
    <div class="tieude">
        <h2>CẬP NHẬT LOẠI HÀNG</h2>
    </div>
    <div class="content">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="box1">  
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
            </div>
            <div class="submitt">
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