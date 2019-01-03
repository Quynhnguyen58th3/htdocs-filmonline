<?php
    $servername = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $dbname = 'phimonline'; //Đây là tên của Database
    $username11 = 'root'; //Tên sử dụng Database
    $Password = '';//Mật khẩu của tên sử dụng Database
   $conn= mysqli_connect($servername,$username11,$Password,$dbname) or  die('Kết nối thất bại:'. mysqli_connect_error());
   mysqli_query($conn,"SET NAME 'UTF8'");

?>