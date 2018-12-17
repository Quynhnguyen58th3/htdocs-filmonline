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
	 
 </head> <?php 
echo' 
<body>
   <header>
           <div class="container">
               
               <div class="row-1">
                   <!-- Logo -->
                   <div class="col-md-5">
                       <div id="logo"><img src="image/logoche.png" style="float:left;">
                           
                       </div> 
                   </div><!-- end Logo -->
                   <!--  Search bar -->
                   <div class="col-md-7  search-top">
                       <div class="col">
                               <div class="col-md-8 search-nav">
                                   <form class="example" action="#" >
                                           <input type="text" placeholder="Search.." name="search2">
                                           <button type="submit"><i class="fa fa-search"></i></button>
                                   </form>
                   
                   
                               </div>
                               <div class="col-md-4">
                                   <div class="col-md-4" style="background-color:rgb(122, 209, 243); color: black;"><a href="dangky.php">Đăng Ký</a></div>
                                   <div class="col-md-4" style="background-color:rgb(219, 10, 209); color:black;"><a href="dangnhap.php">Đăng Nhập</a></div>
                               </div>
                       </div> <!-- End SearchBar -->
                   </div>
           </div>
           
   
           <!-- Menu  Nav-->
           <nav class="navbar navbar-expand-sm ">
               <div class="container">
   
                   <!-- Cái này chưacaainf đụng đến-->
   
                   <div class="collapse navbar-collapse" id="collapsibleNavbar">
                       <!-- Links -->
                       <ul class="navbar-nav ">
   
                           <li class="nav-item icon-home"><a href="phimOnline.html"><i class="fas fa-home"></a></i></li>
                           <!-- Dropdown -->
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                   Thể Loại
                               </a>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="#">Kinh dị</a>
                                   <a class="dropdown-item" href="#">Hoạt hình</a>
                                   <a class="dropdown-item" href="#">Tình cảm</a>
                                   <a class="dropdown-item" href="#">Khoa học</a>
                                   <a class="dropdown-item" href="#">Gia đình</a>
                                   <a class="dropdown-item" href="#">Hành động</a>
                                   
                           
                               </div>
                           </li>
                   
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
                                       Quốc gia</a>
                                       <div class="dropdown-menu">
                                               <a class="dropdown-item" href="#">Thái Lan</a>
                                               <a class="dropdown-item" href="#">Việt Nam</a>
                                               <a class="dropdown-item" href="#">Trung Quốc</a>
                                               <a class="dropdown-item" href="#">Hong Kong</a>
                                               <a class="dropdown-item" href="#">Nga</a>
                                               <a class="dropdown-item" href="#">Nhật Bản</a>
                                               <a class="dropdown-item" href="#">Mỹ</a>
                                           
                                       </div>
                           </li>
                           <li class="nav-item dropdown">
   
                               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                   Phim Chiếu Rạp
                               </a>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="#">Phim Chiếu Rạp 2018</a>
                                   <a class="dropdown-item" href="#">Phim Chiếu Rạp 2017</a>
                                   <a class="dropdown-item" href="#">Phim Chiếu Rạp 2016</a>
                                   <a class="dropdown-item" href="#">Phim Chiếu Rạp 2015</a>
                                   <a class="dropdown-item" href="#">Phim chiếu Rạp 2014</a>
                               
                               </div>
                           </li>
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
                                   Phim bộ</a>
                                   <div class="dropdown-menu">
                                           <a class="dropdown-item" href="#">Phim bộ 2018</a>
                                           <a class="dropdown-item" href="#">Phim bộ 2017</a>
                                           <a class="dropdown-item" href="#">Phim bộ 2016</a>
                                           <a class="dropdown-item" href="#">Phim bộ 2015</a>
                                           <a class="dropdown-item" href="#">Phim bộ 2014</a>
                                       
                                       </div>
                           </li>
                           
                           <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
                                           Phim lẻ</a>
                                           <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Phim lẻ 2018</a>
                                                   <a class="dropdown-item" href="#">Phim lẻ 2017</a>
                                                   <a class="dropdown-item" href="#">Phim lẻ 2016</a>
                                                   <a class="dropdown-item" href="#">Phim lẻ 2015</a>
                                                   <a class="dropdown-item" href="#">Phim lẻ 2014</a>
                                               
                                           </div>
                           </li>
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
                                       Phim mới</a>
                                       <div class="dropdown-menu">
                                               <a class="dropdown-item" href="#">Phim mới 2018</a>
                                               <a class="dropdown-item" href="#">Phim mới 2017</a>
                                               <a class="dropdown-item" href="#">Phim mới 2016</a>
                                               <a class="dropdown-item" href="#">Phim mới 2015</a>
                                               <a class="dropdown-item" href="#">Phim mới 2014</a>
                                           
                                       </div>
                       </li>
                           
   
                       </ul>
   
                   </div>
                   
               </div>
           </nav>	<!-- end Menu -->
       </header>

';
?>