
<?php
    require('hea.php');
?>
    <div id="wrapper">
        <table>
            <tr style="background:black; color:green;">
                <th>STT</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Lever</th>
                <th>Delete</th>
            </tr>
            <?php


                $servername = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
                $dbname = 'phimonline'; //Đây là tên của Database
                $username11 = 'root'; //Tên sử dụng Database
                $Password = '';//Mật khẩu của tên sử dụng Database
                $conn= mysqli_connect($servername,$username11,$Password,$dbname) or  die('Kết nối thất bại:'. mysqli_connect_error());
                mysqli_query($conn,"SET NAME 'UTF8'");


                $stt=0;
                $sql="select id,username ,email,lever from users";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($result)){
                    echo"<tr>";
                        echo"<td>$stt</td>";
                        echo"<td>$data[username]</td>";
                        echo"<td>$data[email]</td>";
                       if($data['lever']==1)
                       {
                           echo"<td>Thành viên</td>";
                       }else
                       {
                           echo"<td>Admin</td>";
                       }
                        echo"<td><a href='del_user.php?id=$data[id]'onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
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