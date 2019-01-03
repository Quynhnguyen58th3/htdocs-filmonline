<?php
    $id=$_GET["id"];
    require("../../connect.php");
    $sql="delete from qlphim where id_p=$id";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list_phim.php");
    exit();

?>