<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}
	else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/quanlythuonghieu/them.php');
	}
	if($tam=='sua'){
		include('modules/quanlythuonghieu/sua.php');
	}
	?>
</div>
<div class="right">
<?php
	include('modules/quanlythuonghieu/lietke.php');
	?>
</div>