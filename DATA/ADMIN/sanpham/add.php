
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
        <h2>THÊM MỚI SẢN PHẨM</h2>
    </div>
    <div class="content">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="box1">
                <div>
                    <label for="">Danh mục :</label>
                    <select name="iddm" >
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo'<option value="'.$id.'">'.$name.'</option>';

                        }
                        ?>
                        
                    </select>
                </div>
                <div>
                    <label for="">Tên sản phẩm  </label>
                    <input type="text" name="tensp">
                </div>
                <div>
                    <label for="">Giá  </label>
                    <input type="text" name="giasp">
                </div>
                <div>
                    <label for="">Hình</label>
                    <input type="file" name="hinh" >
                </div>
                <div>
                    <label for="">Mô tả  </label><br>
                    <textarea name="mota"  cols="50" rows="10"></textarea>
                </div>
            </div>
            <div class="submitt">
                <input type="submit"name="themmoi" value="THÊM MỚI">
                <input type="submit" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!=""))echo$thongbao;
            ?>
        </form>
    </div>

</div>