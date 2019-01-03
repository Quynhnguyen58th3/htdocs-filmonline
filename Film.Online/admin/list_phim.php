<?php
    require('hea.php');
?>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="7"></td>
                <td colspan="2"><a href="add_phim.php">Thêm Phim</a></td>
            </tr>
            <tr style="background:black; color:green;">
                <th style="width:30px;">Stt</th>
                <th>Tên Phim</th>
                <th>Thể loại</th>
                <th>Giới thiệu</th>
                <th>Diễn viên</th>
                <th>Quốc gia</th>
                <th>link</th>
                <th style="width:50px;">Edit</th>
                <th style="width:50px;">Delete</th>
            </tr>
            <tr>
            <?php
                require('../../connect.php');
                
                $stt=0;
                $sql="select * from qlphim";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$data[ten]</td>";
                echo"<td>$data[theloai]</td>";
                echo"<td>$data[gioithieu]</td>";
                echo"<td>$data[dienvien]</td>";
                echo"<td>$data[quocgia]</td>";
                echo"<td>$data[link]</td>";
                echo"<td><a href='edit_ND.php?id=$data[id_p]' style='color:#f3f'>Edit</a></td>";
                echo"<td><a href='del_ND.php?id=$data[id_p]' style='color:#f3f'>Delete</a></td>";
                echo"</tr>";
                $stt++;
                }
            ?>
        </table>
    </div>
<?php
    require('foot.php');
?>