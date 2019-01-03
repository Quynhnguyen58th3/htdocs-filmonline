<?php
require("hea.php");
$id=$_GET["id"];
$loi=array();
$loi['cate1']=$loi['cate2']=$loi['cate3']=$loi['cate4']=$loi['cate5']=$loi['cate6']=null;
$caten1=$caten2=$caten3=$caten4=$caten5=$cate6=null;
require('../../connect.php');
$sql1="select ten ,theloai, gioithieu , dienvien, quocgia,link  from qlphim where id_p=$id";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_assoc($result1);
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
            $loi["cate6"]="*Vui lòng nhập tên chuyên muc";
        }else
        {
            $cate6=$_POST["txt6"];
        }
        if(isset($cate1) &&  isset($cate2) && isset($cate3) && isset($cate4) && isset($cate5) && isset($cate6))
        {
           
            $sql1="update qlphim 
            set ten='$cate1' ,theloai='$cate2', gioithieu ='$cate3', dienvien='$cate4', quocgia='$cate5',link='$cate6' where id_p=$id";
            mysqli_query($conn,$sql1);
            header("location:list_phim.php");
            exit();
            
        }
    }

?>
    <div id="wapper2">
        <fieldset style="width:27px; margin=20px auto 10px;">
            <legend>Chỉnh sửa Nội dung</legend>
            <form acction="edit_ND.php?id=<?php echo$id ;?>" method="post">
                <table>
                <table>
                    <tr>
                        <td>Tên Phim</td>
                        <td><textarea cols="55" rows="1" name="txt1"> <?php echo $data1['ten'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>Thể loại</td>
                        <td><textarea cols="55" rows="2" name="txt2"><?php echo $data1['theloai'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>Giới thiệu</td>
                        <td><textarea cols="55" rows="5" name="txt3"><?php echo $data1['gioithieu'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>Diễn viên</td>
                        <td><textarea cols="55" rows="3" name="txt4"><?php echo $data1['dienvien'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>Quốc Gia</td>
                        <td><textarea cols="55" rows="1"name="txt5"><?php echo $data1['quocgia'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>link</td>
                        <td><textarea cols="55" rows="1"name="txt6"><?php echo $data1['link'];?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Update"name="ok"/></td>
                    </tr>
                </table>
                </table>
            </form>
        </fieldset>
    </div>
<?php
    require("foot.php");
?>