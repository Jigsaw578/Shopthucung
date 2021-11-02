<div>   
    <div>
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Danh mục</label>
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
                <label for="">Gía  </label>
                <input type="text" name="giasp">
            </div>
            <div>
                <label for="">Hình</label>
                <input type="file" name="hinh" >
            </div>
            <div>
                <label for="">Mô tả  </label>
                <textarea name="mota"  cols="30" rows="10"></textarea>
            </div>
            
            <div>
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