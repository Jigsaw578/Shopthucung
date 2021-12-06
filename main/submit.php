<?php
    session_start();
    include 'connect_db.php';
    if ( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' && $_POST["phonenumber"] != '') {
        $username= $_POST["username"];
        $password= $_POST["password"];
        $repassword= $_POST["repassword"];
        $phonenumber= $_POST["phonenumber"];
        if ($password != $repassword) {
            $_SESSION["thongbao"] = "Xác nhận password không chính xác";
            header("Location:dangky.php");
            die();
        }
        $sql = "SELECT * FROM user WHERE username='$username' ";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if (mysqli_num_rows($old) > 0) {
            $_SESSION["thongbao"] = "Username đã tồn tại";
            header("Location:dangky.php");
            die();
        }
        $sql = "INSERT INTO user (username,password,phonenumber) VALUES ('$username', '$password', '$phonenumber')";
        mysqli_query($conn,$sql);
        header("Location:dangnhap.php");    
    }else{
        $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
        header("Location:dangky.php");
    }
    
    
?>