<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhimOnline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <!-- Bootstrap Libarry -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>
	<!-------------------------------------------------------------------------------------------------->
	<!-- Font family of body "Roboto" -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-------------------------------------------------------------------------------------------------->
	<!-- FontAwesome for put incon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-------------------------------------------------------------------------------------------------->
	<!-- Font family of Sidebar "Muli" -->
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<!-------------------------------------------------------------------------------------------------->
	<!-- library of W3School to set SlideShow in header -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-------------------------------------------------------------------------------------------------->
	
	<!-- Style of HTML -->	
	<link rel="stylesheet" type="text/css" href="css/Phim.css">
	<!-------------------------------------------------------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="css/slideshow.css">
	
 </head> 
 <style>
 #dangnhap{
	 color: green;
 }
 #login{
    margin: 200px ;
}
 form {
  box-sizing: border-box;
  width: 500px;
  margin: 20px auto 50px;
  box-shadow: 2px 2px 5px 2px black;
  padding-bottom: 20px;
  border-radius: 3px;
  border: 1px solid black;
  background: black;
}
form h2 {
  box-sizing: border-box;
  padding: 20px;
  font-family: 'Times New Roman', Times, serif;
  color: green;
}
.btn {
background:green;
color:black;
}

 
</style>
<body>
<?php include("header1.php");?>
	<div id="dangnhap">
    <?php
         $loi=array();
        $username=$password=null;
        $loi["username"]=$loi["password"]=$loi["dangnhap"]=null;
        if(isset($_POST["dang_nhap"])){
            if(empty($_POST["username"])){
                $loi["username"]="*Vui lòng nhập username<br/>";
            }else
            {
                $username=$_POST["username"];
            }

            if(empty($_POST["password"])){
                $loi["password"]="*Vui lòng nhập password<br/>";
            }else
            {
                $password=$_POST["password"];
            }
            if($username && $password){
                include('connect.php');
                $password=md5($password);
                $sql = "select * from users where username = '$username' and password = '$password'";
                $query1 = mysqli_query($conn,$sql);
                if(mysqli_num_rows($query1)==1) {
                    $data=mysqli_fetch_assoc($query1);
                    $_SESSION['lever']=$data['lever'];
                    $_SESSION['username']=$data['username'];
                    if($_SESSION['lever']==2){
                        header("location:admin/admin.php");
                        exit();
                    }
                    else
                    {
                        header("location:index.php");
                        exit();
                    }
                }else{
                    $loi["dangnhap"]="*username or password không đúng ";
                }
                

            }
        }
	?>	
        <form method="Post" action="dangnhap.php" styles="margin-left:500px">
        <h2>Đăng Nhập</h2>
            <div style="color:green;width:250px; height:auto;margin:10px auto;text-align:center;">
            <?php 
                echo $loi["username"];
                echo $loi["password"];
                echo $loi["dangnhap"];
            ?>
            </div>
            <div class="form-group">
      <label for="username">usename:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
            <div class="input-group">
                <button type="submit" name="dang_nhap" class="btn">Đăng nhập</button>
            </div>
            <p>
                Nếu bạn không phải là thành viên? <a href="dangky.php">Đăng ký</a>
            </p> 
        </form>
    </div>
 
</div>


    </body>
</html>
<?php ob_end_flush(); ?>