<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}
	else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/quanlydanhmucsp/them.php');
	}
	if($tam=='sua'){
		include('modules/quanlydanhmucsp/sua.php');
	}
	?>
</div>
<div class="right">
<?php
	include('modules/quanlydanhmucsp/lietke.php');
	?>
</div>