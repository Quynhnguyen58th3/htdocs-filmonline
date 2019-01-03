<?php
require("hea.php");
$loi=array();
$loi['cate1']=$loi['cate2']=$loi['cate3']=$loi['cate4']=$loi['cate5']=null;
$caten1=$caten2=$caten3=$caten4=$caten5=null;
if(isset($_POST['ok']))
    {
        if(empty($_POST["txt1"])){
            $loi["cate1"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate1=$_POST["txt1"];
        }
        if(empty($_POST["txt2"])){
            $loi["cate1"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate2=$_POST["txt2"];
        }
        if(empty($_POST["txt3"])){
            $loi["cate3"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate3=$_POST["txt3"];
        }
        if(empty($_POST["txt4"])){
            $loi["cate4"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate4=$_POST["txt4"];
        }
        if(empty($_POST["txt5"])){
            $loi["cate5"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate5=$_POST["txt5"];
        }
        if(empty($_POST["txt6"])){
            $loi["cate5"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate6=$_POST["txt6"];
        }
        if($cate1 && $cate2 && $cate3 && $cate4 && $cate5  && $cate6)
        {
            require('../../connect.php');
            $sql="insert into qlphim (ten ,theloai, gioithieu , dienvien, quocgia ,link)  
            values ('$cate1','$cate2','$cate3','$cate4','$cate5', $cate6)";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location:list_phim.php");
            exit();
        }
    }
?>

<div id="wapper2">
<fieldset style="width:600px; margin=20px auto 10px;">
            <legend>Thêm Phim</legend>
            <form acction="add_phim.php?id=<?php echo$id ;?>" method="post">
                <table>
                    <tr>
                        <td>Tên Phim</td>
                        <td><textarea cols="55" rows="1" name="txt1"></textarea></td>
                    </tr>
                    <tr>
                        <td>Thể loại</td>
                        <td><textarea cols="55" rows="2" name="txt2"></textarea></td>
                    </tr>
                    <tr>
                        <td>Giới thiệu</td>
                        <td><textarea cols="55" rows="5" name="txt3"></textarea></td>
                    </tr>
                    <tr>
                        <td>Diễn viên</td>
                        <td><textarea cols="55" rows="3" name="txt4"></textarea></td>
                    </tr>
                    <tr>
                        <td>Quốc Gia</td>
                        <td><textarea cols="55" rows="1"name="txt5"></textarea></td>
                    </tr>
                    <tr>
                        <td>link</td>
                        <td><textarea cols="55" rows="1"name="txt6"></textarea></td>
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
        echo $loi["cate1"];
        echo $loi["cate2"];
        echo $loi["cate3"];
        echo $loi["cate4"];
        echo $loi["cate5"];
        

    ?>
</div>
<?php
    require("foot.php");
?>