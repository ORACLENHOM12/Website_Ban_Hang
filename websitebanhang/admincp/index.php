<?php 
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('location:login.php');
	unset($_SESSION['dangnhap']);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quản trị Website</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body style="background-color:antiquewhite;">
<div class="wrapper">
	<?php
	include('modules/config.php');
	include('modules/header.php');
	include('modules/menu.php');
	include('modules/content.php');
	?>
	
	
	
	
</div>

</body>
</html>