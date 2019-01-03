<?php
session_start();
if($_SESSION['lever']==2){
    header("location:../index.php");
    exit();
}
else{
    
    header("location:admin/list_user.php");
}
?>