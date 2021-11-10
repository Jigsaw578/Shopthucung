<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<style>
    *{
        padding: 0;
        margin:0;
     }
     .box1 h2{
            border: 1px solid #ccc;
            
            background:#FF6600;
            padding: 15px 20px;
            border-radius:10px;
            margin:10px 30px;
        }
        .box2 form .nhap{
            border: 1px solid #ccc;
            font-size:30px;  
            background:#E8E8E8;
            padding: 15px 30px;
            border-radius:10px;
            margin:15px;
        }
        .box2 form .nhap input {
            width:100%;
            height: 30px;
        }
        .box2 form .nut{
            padding:20px ;
        }
        .box2 form .nut input{
            font-size:20px;
            background:#FF6600;
            margin:15px 10px;
            padding: 5px;
        }

</style>


<div>   
    <div class="box1">
        <h2>CẬP NHẬT LOẠI HÀNG</h2>
    </div>
    <div class="box2"> 
        <form action="index.php?act=updatedm" method="post">
            <div class="nhap">
                <div>
                    <label for="">Mã loại</label>
                    <input type="text" name="maloai" >
                </div>
                <div>
                    <label for="">Tên loại  </label>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name;?>">
                </div>
            </div>  
            <div class="nut">
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