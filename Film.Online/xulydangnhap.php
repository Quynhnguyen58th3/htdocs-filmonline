<?php
//check có nhập tên đăng nhập chưa
if($_POST["txtname"]==null){
    echo" xin vui lòng nhập tên đăng nhập<br/>";
}
else{
    $username=$_POST["txtname"];
}
//check  có nhập passwword chưa
if($_POST["txtpass"]==null){
    echo"xin vui long nhap password<br/>";
}
else{
    $passsword=$_POST["txtpass"];
}
//check co dung usename và password chưa
if($username && $passsword){
if($username=="admin"&& $passsword=="123456"){
    echo"welcome";
}
else{
    echo"nhập tên đăng nhập hoặc passwword";
}
}
?>