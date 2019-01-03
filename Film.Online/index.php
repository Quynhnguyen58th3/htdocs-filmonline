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

<body>
   <?php include("header1.php");?>
	<!--Than cua Trang web-->
    <main class="container">
		
       
			<div class="col-md-12 main_wrapper">
				<div class="slideshow-container">

					<div class="mySlides fade">
					  <div class="numbertext">1 / 6</div>
					  <img src="image/img1.jpg" style="width:1110px;margin-left:-69px;">
					</div>
					  
					
					<div class="mySlides fade">
					  <div class="numbertext">2 / 6</div>
					  <img src="image/img2.jpg" style="width:1110px;margin-left:-69px;">
					</div>
					
					<div class="mySlides fade">
					  <div class="numbertext">3 / 6</div>
					  <img src="image/img3.png" style="width:1110px;margin-left:-69px;">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">4 / 6</div>
						<img src="image/img4.jpg" style="width:1110px;margin-left:-69px;">
					</div>
						<div class="mySlides fade">
						<div class="numbertext">5 / 6</div>
						<img src="image/img5.jpg" style="width:1110px;margin-left:-69px;">
						</div>
						<div class="mySlides fade">
						<div class="numbertext">6 / 6</div>
						<img src="image/img6.jpg" style="width:1110px;margin-left:-69px;">
						</div>
					  
					</div>
					<br>
					
					<div style="text-align:center">
							<span class="dot" onclick="currentSlide(1)"></span> 
							<span class="dot" onclick="currentSlide(2)"></span> 
							<span class="dot" onclick="currentSlide(3)"></span>  
							<span class="dot" onclick="currentSlide(4)"></span> 
							<span class="dot" onclick="currentSlide(5)"></span> 
							<span class="dot" onclick="currentSlide(6)"></span> 
					</div>
					
					<script>
					var slideIndex = 0;
					showSlides();
					
					function showSlides() {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("dot");
						for (i = 0; i < slides.length; i++) {
						   slides[i].style.display = "none";  
						}
						slideIndex++;
						if (slideIndex > slides.length) {slideIndex = 1}    
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " active";
						setTimeout(showSlides, 2000); 
					}
					</script>
			</div>
			<div class="col-md-8 main"><!----cái bao chung cho nhung thg con o ben trong-->
					<div class="main">  
						<div class="title-post">
								<h2> Phim Đề cử </h2>
						</div>
			
						<div class="row pad">
								<div class="col-md-6 ">	
									<div id="post-1" class=" post-1">
										
		
										<div class="thumbnail-wrap">
											<img src="image/ma sơ.jpg">
										</div>
										<div class="entry-header">
											<h3 class="entry-title">
												<a href="ma sơ.php">Ma sơ</a>
											</h3>
										</div>
										
										<div class="entry-meta">
											<span class="entry-category">
												<a href="#">Kinh dị</a>
											</span> 
											<span class="entry-date"> <i class="far fa-clock"></i> 2018</span> 
										</div>					
										
										
		
		
									</div>
								</div>
								<div class="col-md-6 ">	

									<div id="post-1" class=" post-1">
										
										<div class="thumbnail-wrap">
											<img src="image/Truy-lung-quai-yeu.jpg" >
		
											
										</div>
										<div class="entry-header">
											<h3 class="entry-title">
												<a href="truylungquaiyeu.php">Truy lùng quái yêu</a>
											</h3>
										</div>
										
										<div class="entry-meta">
											<span class="entry-category">
												<a href="#">Hài hước,tình cảm </a>
											</span> 
											<span class="entry-date"> <i class="far fa-clock"></i>2015</span> 
										</div>					
										<div class="entry-summary">
											
										</div>
										
		
									</div>
								</div>
								
							</div>
							<div class="row pad">
		
									<div class="col-md-6 ">					
										<div id="post-1" class=" post-1">
											
			
											<div class="thumbnail-wrap">
												<img src="image/quá nhanh quá nguy hiểm.jpg" >
											</div>
											<div class="entry-header">
												<h2 class="entry-title">
													<a href="quanhanhquanguyhiem.php">Quá nhanh quá nguy hiểm</a>
												</h2>
											</div>
											
											<div class="entry-meta">
												<span class="entry-category">
													<a href="#">hành động</a>
												</span> 
												<span class="entry-date"> <i class="far fa-clock"></i> 2015</span> 
											</div>					
											
											
			
			
										</div>
									</div>
									<div class="col-md-6 ">					
										<div id="post-1" class=" post-1">
											
											<div class="thumbnail-wrap">
												<img src="image/Minions.jpg" >
			
												
											</div>
											<div class="entry-header">
													<h2 class="entry-title">
															<a href="minous.php">Minions</a>
														</h2>
												
											</div>
											
											<div class="entry-meta">
												<span class="entry-category">
													<a href="#">Hoạt hình</a>
												</span> 
												<span class="entry-date"> <i class="far fa-clock"></i>2015</span> 
											</div>					
											<div class="entry-summary">
												
											</div>
											
										</div>
									</div>
									
								</div>
								
					</div>
					
					<div class="main">  
						<div class="title-post">
								<h2> Phim Bộ </h2>
						</div>
						<div class="row pad">
								<div class="col-md-6 ">	
									<div id="post-1" class=" post-1">
										
		
										<div class="thumbnail-wrap">
											<img src="image/huyenthoaibienxanh.jpg" >
										</div>
										<div class="entry-header">
											<h3 class="entry-title">
												<a href="huyenthoaibienxanh.html">Huyền thoại biển xanh</a>
											</h3>
										</div>
										
										<div class="entry-meta">
											<span class="entry-category">
												<a href="#">Ngôn tình</a>
											</span> 
											<span class="entry-date"> <i class="far fa-clock"></i> 2016</span> 
										</div>					
						
									</div>
								</div>
								<div class="col-md-6 ">	

									<div id="post-1" class=" post-1">
										
										<div class="thumbnail-wrap">
											<img src="image/hauduemat_troi.jpg">
		
											
										</div>
										<div class="entry-header">
											<h3 class="entry-title">
												<a href="#">Hậu duệ mặt trời</a>
											</h3>
										</div>
										
										<div class="entry-meta">
											<span class="entry-category">
												<a href="#">tình cảm </a>
											</span> 
											<span class="entry-date"> <i class="far fa-clock"></i>2016</span> 
										</div>					
										<div class="entry-summary">
											
										</div>
										
		
									</div>
								</div>
								
							</div>
			</div>
			
			
			
		</div>	
	<?php include("aside.php");?>	
	</main><br>
	<div id=footer>
			<div class="container">
				<div class="row cols">
				<div class="col-md-8">
						<p><strong>FilmOnline-xem phim miễn phí</strong>,chất lượng xem phim hình ảnh rõ nét,
						xem phim không phải chờ đợi lâu, phimle.tv luôn cập nhật phim mới để mang đến cho các bạn
					những bộ phim hành động , võ thuật, phim chiếu rạp, các thể loại tâm lý, tình cảm cực lôi cuốn
				và hấp dẫn nhất. Đặc biệt website rất thân thiện với người dùng và hạn chế các quảng cáo khó chịu khi xem phim. 
			Chúc các bạn xem phim vui vẻ!</p>
					</div>
					
					<div class="link">
						<a href="#">Liên hệ</a>
						<a href="#">Giới thiệu</a>
						<a href="#">Email</a>
					</div>
				</div>
			</div>
				</div>
		

	
</body>
</html>