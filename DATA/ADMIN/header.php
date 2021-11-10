<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>ADMIN</title>
       <style>
            *{
                padding: 0px;
                margin: 0px;
            }
            .head h1{
                border: 1px solid #ccc;
                height:50px;
                background:#ccc;
                padding: 15px 30px;
                border-radius:10px;
                margin:15px;
            }
           .menu{
                margin:15px;
                background: black;
                color: white;
                height: 40px;
                display: flex;
                border-radius:10px;
                padding: 10px 10px;
               
            }

            ul.box>li{
                list-style: none;
                float: left;
                position: relative;

            }
            ul.box>li>a{
                color: white;
                text-decoration: none;
                display: flex;
                line-height: 30px;
                padding: 0px 15px ;
                font-size:20px;
            }
            ul.box>li>a:hover{
                color: #FF6633;
            }
        </style>    
    </head>
    <body>
        <div>
            <div class="head">
                <h1>ADMIN</h1>
            </div>
            <div class="menu">
                <ul class="box">
                    <li><a href="index.php">Trang chủ </a> </li>
                    <li> <a href="index.php?act=adddm">Danh mục</a></li>
                    <li> <a href="index.php?act=addsp">Hàng hóa</a></li>
                    <li> <a href="index.php?act=dskh">Khách hàng</a></li>
                    
                    <li> <a href="index.php?act=dsbl ">Bình luận</a></li>
                    <li> <a href="index.php?act=thongke">Thống kê</a></li>
                    
                </ul>
            </div>
           
        </div>
        
    </body>
</html>