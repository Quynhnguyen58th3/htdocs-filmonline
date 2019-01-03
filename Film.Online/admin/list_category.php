<?php
    require('hea.php');
?>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"><a href="add_category.php">Thêm chuyên mục</a></td>
            </tr>
            <tr style="background:black; color:green;">
                <th style="width:100px;">STT</th>
                <th>Chuyên mục</th>
                <th style="width:100px;">Edit</th>
                <th style="width:100px;">Delete</th>
            </tr>
            <?php
                
                $servername = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
                $dbname = 'phimonline'; //Đây là tên của Database
                $username11 = 'root'; //Tên sử dụng Database
                $Password = '';//Mật khẩu của tên sử dụng Database
               $conn= mysqli_connect($servername,$username11,$Password,$dbname) or  die('Kết nối thất bại:'. mysqli_connect_error());
               mysqli_query($conn,"SET NAME 'UTF8'");
            
            
                $stt=0;
                $sql="select tencm,id_cm from chuyenmuc";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($result)){
                    echo"<tr>";
                        echo"<td>$stt</td>";
                        echo"<td>$data[tencm]</td>";
                        echo"<td><a href='edit_category.php?id=$data[id_cm]' style='color:#f3f'>Edit</a></td>";
                        echo"<td><a href='del_category.php?id=$data[id_cm]' style='color:#f3f'>Delete</a></td>";
                    echo"</tr>";
                    $stt++;
                }
                mysqli_close($conn);

                ?>
        </table>
    </div>
<?php
    require('foot.php');
?>