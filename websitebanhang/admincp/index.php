<?php 
if(isset($_SESSION['dangnhap'])){
	header('location:login.php');
	
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quản trị Website</title>
<link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>
<div class="wrapper">
	<?php
	include('modules/config.php');
	include('modules/header.php');
	include('modules/menu.php');
	include('modules/content.php');
	include('modules/footer.php');
	?>
	
	
	
	
</div>

</body>
</html>