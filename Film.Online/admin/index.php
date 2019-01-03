<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
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
	<script src="js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
			$(document).ready(function(){
			$(".xoa").click(function(){
			  if (confirm("Bạn có muốn xóa không?")){
		  
			  }else{
				return false;
			  }
			  })
			})
		  </script>
</head>
<style>
	.panel-table .panel-body {  
padding:0;
}
.panel-table .panel-body .table-bordered {  
border-style: none; 
margin:0;
}
.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type { 
text-align:center;  width: 100px;}.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type, .panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {  
border-right: 0px;
}
.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type, .panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {  
border-left: 0px;
}
.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td { 
border-bottom: 0px;
}
.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th { 
border-top: 0px;
}
.panel-table .panel-footer .pagination {    
margin:0;
}
.panel-table .panel-footer .col {   
line-height: 34px;  
height: 34px;
}
.panel-table .panel-heading .col h3 {   
line-height: 30px;  
height: 30px;
}
.panel-table .panel-body .table-bordered > tbody > tr > td {   
line-height: 34px;
}
</style>
<body>
		<?php require('connect.php');?>
		<div class="container"> 
				<div class="row"> 
				 <h1 class="text-center">Quản lí thành viên</h1> 
				 <div class="col-md-10 col-md-offset-1"> 
				  <div class="panel panel-default panel-table"> 
				   <div class="panel-heading"> 
					<div class="row"> 
					 <div class="col col-xs-6"> 
					  <h3 class="panel-title">Danh sách thành viên</h3> 
					 </div> 
					 <div class="col col-xs-6 text-right"> 
					  <button type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</button> 
					 </div> 
					</div> 
				   </div> 
				   <div class="panel-body"> 
					<table class="table table-striped table-bordered table-list"> 
					 <thead> 
					  <tr> 
					   <th><em class="fa fa-cog"></em>
					   </th> 
					   <th class="hidden-xs">Mã số</th> 
					   <th>Họ tên</th> 
					   <th>Email</th> 
					  </tr> 
					 </thead> 
					 <tbody><tr> 
					  <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
					  </td> 
					  <td class="hidden-xs">1</td> 
					  <td>Nguyễn văn A</td> 
					  <td>hocwebgiare@gmail.com</td> 
					 </tr> 
					 <tr> 
					  <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
					  </td> 
					  <td class="hidden-xs">2</td> 
					  <td>Nguyễn văn B</td> 
					  <td>hocwebgiare@gmail.com</td> 
					 </tr> 
					 <tr> 
					  <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
					  </td> 
					  <td class="hidden-xs">3</td> 
					  <td>Nguyễn văn C</td> 
					  <td>hocwebgiare@gmail.com</td> 
					 </tr> 
					 <tr> 
					  <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
					  </td> 
					  <td class="hidden-xs">4</td> 
					  <td>Nguyễn văn D</td> 
					  <td>hocwebgiare@gmail.com</td> 
					 </tr> 
					</tbody></table> 
				   </div> 
				   <div class="panel-footer"> 
					<div class="row"> 
					 <div class="col col-xs-4">Trang 1 của 5 </div> 
					 <div class="col col-xs-8"> 
					  <ul class="pagination hidden-xs pull-right"> 
					   <li><a href="#">1</a>
					   </li> 
					   <li><a href="#">2</a>
					   </li> 
					   <li><a href="#">3</a>
					   </li> 
					   <li><a href="#">4</a>
					   </li> 
					   <li><a href="#">5</a>
					   </li> 
					  </ul> 
					  <ul class="pagination visible-xs pull-right"> 
					   <li><a href="#">«</a>
					   </li> 
					   <li><a href="#">»</a>
					   </li> 
					  </ul> 
					 </div> 
					</div> 
				   </div> 
				  </div> 
				 </div> 
				</div>
			   </div>
</body>