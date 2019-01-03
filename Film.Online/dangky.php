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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
 #dangky{
	 color: green;
 }
 form {
  box-sizing: border-box;
  width: 600px;
  margin: 50px auto 50px;
  box-shadow: 2px 2px 5px 2px black;
  padding-bottom: 40px;
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
<?php include("header1.php");
      ?>
<div id= "dangky">
        <?php
            require_once("connect.php");
            if (isset($_POST["dangky"])) {
                //lấy thông tin từ các form bằng phương thức POST
                $username = $_POST["username"];
                $password_1 = $_POST["password_1"];
                $password_2 = $_POST["password_2"];
                $email = $_POST["email"];
                    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                if($password_1!=$password_2){
                echo("Mật khẩu không trùng nhau! ");
                }
                else{

            
                if ($username == "" || $password_1 == "" ||$password_2 == ""|| $email == "") {
                    echo "Bạn vui lòng nhập đầy đủ thông tin! ";
                }else{
                    // Kiểm tra tài khoản đã tồn tại chưa
                    $sql="select * from users where username='$username'";
                    $kt=mysqli_query($conn, $sql);

                    if(mysqli_num_rows($kt)  > 0){
                        echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="dangky.php";</script>';
                        die();
                    }else{
                        $password_1=md5($password_1);
                        //thực hiện việc lưu trữ dữ liệu vào db
                        $sql="INSERT INTO users(username, email,password,lever) VAlUES('$username', '$email', '$password_1','1')";
                        // thực thi câu $sql với biến conn lấy từ file connect.php
                        mysqli_query($conn,$sql);
                        echo "Chúc mừng bạn đã đăng ký thành công,<a href='dangnhap.php'>(đăng nhập)</a> để tiếp tục!";
                    }

                }
            }
        }
        ?>
        <form method="Post" action="dangky.php">
        <h2>Đăng kí</h2>
  <div class="form-group">
      <label for="Tên đăng nhập">Tên đăng nhập:</label>
      <input type="text" class="form-control" id="Tên đăng nhập" placeholder="Enter tên đăng nhập" name="username">
    </div>
    <div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_1">
    </div>
	<div class="form-group">
      <label for="Nhap lai password">Nhap lai password</label>
	  <input type="password" class="form-control" id="Nhap lai password" placeholder="Enter password" name="password_2">
    </div>
    <button type="submit" class="btn btn-default" name="dangky">Đăng kí</button>
            <p>
                Bạn sẵn sàng là thành viên chưa? <a href="dangnhap.php">Đăng nhập</a>
            </p>
            
        </form>
    </div>
      </body>
</html>