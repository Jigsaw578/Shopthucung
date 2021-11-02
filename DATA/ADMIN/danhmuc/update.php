<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div>   
    <div>
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div>
        <form action="index.php?act=updatedm" method="post">
            <div>
                <label for="">Mã loại</label>
                <input type="text" name="maloai" >
            </div>
            <div>
                <label for="">Tên loại  </label>
                <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name;?>">
            </div>
            <div>
                <input type="hidden"name="id" value="<?php if(isset($id)&&($id>0))echo $id;?>">
                <input type="submit"name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!=""))echo$thongbao;
            ?>
        </form>
    </div>

</div>