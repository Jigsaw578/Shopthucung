<link rel="stylesheet" type="" href="add.css">
<style>
        *{
            padding: 0;
            margin:0;
        }
        .menu1{
            padding: 10px 5px;
        }
        .box h2{
            border: 1px solid #ccc;
            
            background:#FF6600;
            padding: 15px 20px;
            border-radius:10px;
            margin:10px 30px;
        }
        .box2 form{
            border: 1px solid #ccc;
            font-size:30px;  
            background:#E8E8E8;
            padding: 15px 30px;
            border-radius:10px;
            margin:15px;
        }
        .box2 form input.nhap{
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
<div class="menu1">   
    <div class="box">
        <h2>THÊM MỚI LOẠI HÀNG</h2>
    </div>
    <div class="box2">
        <form action="index.php?act=adddm" method="post">
            <div>
                <label for="">Mã loại</label><br>
                <input type="text" name="maloai" class="nhap">
            </div>
            <div>
                <label for="">Tên loại  </label><br>
                <input type="text" name="tenloai" class="nhap">
            </div>
            <div class="nut">
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