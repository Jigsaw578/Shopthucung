<?php
function loadall_taikhoan(){
    $sql="select * from user order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($username,$password){
    $sql="insert into taikhoan(username,password) values('$username','$password')";
    pdo_execute($sql);
}
function checkuser($username,$password){
    $sql="select * from taikhoan where user='".$username."' AND  pass='".$password."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$username,$password,$phonenumber){
    $sql="update taikhoan set username='".$username."', password='".$password."',phonenumber='".$phonenumber."' where id=".$id;   
    pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql="delete from user where id=".$id;
    pdo_execute($sql);
}
?>