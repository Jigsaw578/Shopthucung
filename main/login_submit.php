<?php
    session_start();
    include 'connect_db.php';
    if ( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username= $_POST["username"];
        $password= $_POST["password"];
        // $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
        $user = mysqli_query($conn,$sql);

        if (mysqli_num_rows($user) > 0) {
            $_SESSION["user"] = $username;
            header("Location:trangchu.php");
        }
        else{
            $_SESSION["thongbao"] = "Sai tên đăng nhập hoặc mật khẩu";
            header("Location:dangnhap.php");
        }
    }else{
        $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
        header("Location:dangnhap.php");
    }
    
?>