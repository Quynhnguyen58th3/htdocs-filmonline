<?php
require("hea.php");
$loi=array();
$loi['catename']=null;
$catename=null;
if(isset($_POST['ok']))
    {
        if(empty($_POST["txtname"])){
            $loi["catename"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $catename=$_POST["txtname"];
        }
        if($catename)
        {
            require('../../connect.php');
            $sql="insert into chuyenmuc (tencm)  values ('$catename')";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location:list_category.php");
            exit();
        }
    }
?>

<div id="wapper2">
<fieldset style="width:600px; margin=20px auto 10px;">
            <legend>Thêm chuyên mục</legend>
            <form acction="add_category.php?id=<?php echo$id ;?>" method="post">
                <table>
                    <tr>
                        <td>Tên chuyên mục</td>
                        <td><textarea cols="55" rows="2" name="txtname"></textarea></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Add"name="ok"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>
</div>
<div style="width:290px; margin:10px; text-align:center;">
<?php 
        echo $loi["catename"];
    ?>
</div>
<?php
    require("foot.php");
?>