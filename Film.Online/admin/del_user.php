<?php
    $id=$_GET["id"];
    require("../../connect.php");
    $sql="delete from users where id=$id";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list_user.php");
    exit();

?>