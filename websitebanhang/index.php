<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Website bán hàng</title>
<link rel="stylesheet" type="text/css"  href="style/style.css"/>
<link rel="stylesheet" type="text/css" href="style/stylecss.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">


</head>

<body>

<div class="wrapper">
<div class="logo">
	<img src="images/logo.png" width="230px" height="90px">
	<ul>
			<p><i class="fa fa-phone-square" aria-hidden="true"></i> Liên hệ: 0123456789</p>
			<p ><i class="fa fa-envelope" aria-hidden="true"></i> Email: thebeautyshop@gmail.com</p>
			<li class="dangky" style="margin-left: 390px"><a href="dangky.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Đăng ký</a></li>
			<li class="dangnhap"><a href="dangnhap.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Đăng nhập</a></li>
			<li class="giohang"><a href="index.php?xem=giohang"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng</a></li>
		</ul>
</div>
	<?php
	include('admincp/modules/config.php');
	include('modules/header.php');
	include('modules/menu.php');
	include('modules/content.php');
	include('modules/footer.php');
	
	?>
	
	
	
	
</div>
</body>
<script>
		
		var inDex = 1;
		function plusIndex(n){
			inDex+=1;
			showImages(inDex);
}
		//showImages(n);
		function showImages(n){
			var x =document.getElementsByClassName("slider");			
			if(n >x.length){inDex=1;}
			if(n <1){inDex=x.length;}
			for( i=0;i<x.length;i++){ 
				
				x[i].style.display="none";
				
			}
			x[inDex-1].style.display="block";
		
		}
		autoSlide();
		function autoSlide(){
			var i;
			var x =document.getElementsByClassName("slider");	
			for( i=0;i<x.length;i++){ 
				
				x[i].style.display="none";
				
			}
			if(inDex>x.length){inDex=1;}
			x[inDex-1].style.display="block";
			inDex++;
			setTimeout(autoSlide,2000);	
		}
	</script>
</html>