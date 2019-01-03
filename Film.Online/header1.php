<style>
	 .btn-green {
    color: green;
    background-color: black;
    border-color:black;
}
.btn {
    display: inline-block;
    padding: 12px 12px ;
	margin: 5px 25px;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.block.info-film .col1 .poster .status {
    position: absolute;
    top: 15px;
    left: 15px;
    background-color: #f3b61c;
    color: #000;
    height: 29px;
    line-height: 29px;
    padding: 0 8px;
    text-transform: uppercase;
    font-weight: 700;
    z-index: 5;
}
.block.info-film .col2 dl dd a {
    color: black;
    font-size: 16px;
}
.block.info-film .col2 dl dd.status {
    color: red;
}
.tabs .tab.active span, .tabs .tab.active .name {
    background: #2ecc71;
    color: #352702;
}
.tabs .tab span, .tabs .tab .name {
    background: #252525;
    display: block;
    padding: 2px 15px;
    line-height: 10px;
    position: relative;
    font-size: 16px;
    height: 15px;
    transition: all .1s;
    transition-delay: 0s;
    transition-timing-function: linear;
    -moz-transition: all .1s;
    -moz-transition-delay: 0s;
    -moz-transition-timing-function: linear;
    -webkit-transition: all .1s;
    -webkit-transition-delay: 0s;
    -webkit-transition-timing-function: linear;
    *padding: 10px;
}
.block.info-film .col2 .name2 {
    color: rgb(28, 8, 121);
    font-size: 17px;
    margin-bottom: 6px;
}
</style>
<body>
		<header>
				<div class="container">
					
					<div class="row-1">
					
					
						<!-- Logo -->
						<div class="col-md-5" id="logo" style="float:left;">
							<img src="image/logoche.png" >
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
				
		
						
						
					
						<div class="collapse navbar-collapse" >
							<!-- Links -->
							<div id="collapsibleNavbar">
							<ul class="navbar-nav ">

								<li class="nav-item icon-home"><a href="index.php"><i class="fas fa-home"></a></i></li>
								<!-- Dropdown -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										Thể Loại
									</a>
									<div class="dropdown-menu">
									<?php
										require("connect.php");
										$sql="select tencm from chuyenmuc";
										$result=mysqli_query($conn,$sql);
										while($data=mysqli_fetch_assoc($result)){
										echo"<a class='dropdown-item' href='#'>$data[tencm]</a>";
										}
									?>
								
									</div>
								</li>
						
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
											Quốc gia</a>
											<div class="dropdown-menu">
									<?php
										require("connect.php");
										$sql="select tenqg from quocgia";
										$result=mysqli_query($conn,$sql);
										while($data=mysqli_fetch_assoc($result)){
										echo"<a class='dropdown-item' href='#'>$data[tenqg]</a>";
										}
									?>
								
									</div>
								</li>
								<li class="nav-item dropdown">
		
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										Phim Chiếu Rạp
									</a>
									<div class="dropdown-menu">
									<?php
										require("connect.php");
										$sql="select phimcr from phimcr";
										$result=mysqli_query($conn,$sql);
										while($data=mysqli_fetch_assoc($result)){
										echo"<a class='dropdown-item' href='#'>$data[phimcr]</a>";
										}
									?>
								
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
										Phim bộ</a>
										<div class="dropdown-menu">
									<?php
										require("connect.php");
										$sql="select phimbo from phimbo";
										$result=mysqli_query($conn,$sql);
										while($data=mysqli_fetch_assoc($result)){
										echo"<a class='dropdown-item' href='#'>$data[phimbo]</a>";
										}
									?>
								
									</div>
								</li>
								
								<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
												Phim lẻ</a>
												<div class="dropdown-menu">
									<?php
										require("connect.php");
										$sql="select phimle from phimle";
										$result=mysqli_query($conn,$sql);
										while($data=mysqli_fetch_assoc($result)){
										echo"<a class='dropdown-item' href='#'>$data[phimle]</a>";
										}
									?>
								
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#"id="navbardrop" data-toggle="dropdown">
											Phim mới</a>
											<div class="dropdown-menu">
									<?php
										require("connect.php");
										$sql="select phimmoi from phimmoi";
										$result=mysqli_query($conn,$sql);
										while($data=mysqli_fetch_assoc($result)){
										echo"<a class='dropdown-item' href='#'>$data[phimmoi]</a>";
										}
									?>
								
									</div>
							</li>
								
		
							</ul>
		
						</div>
						</div>


						
			
				</nav>	<!-- end Menu -->
			
				
		</header>

</body>
