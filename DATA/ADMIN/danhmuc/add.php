<div>   
    <div>
        <h1>THÊM MỚI LOẠI HÀNG</h1>
    </div>
    <div>
        <form action="index.php?act=adddm" method="post">
            <div>
                <label for="">Mã loại</label>
                <input type="text" name="maloai" >
            </div>
            <div>
                <label for="">Tên loại  </label>
                <input type="text" name="tenloai">
            </div>
            <div>
                <input type="submit"name="themmoi" value="THÊM MỚI">
                <input type="submit" value="NHẬP LẠI">
                <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!=""))echo$thongbao;
            ?>
        </form>
    </div>

</div>