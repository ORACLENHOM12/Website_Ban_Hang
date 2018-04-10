<div class="content">
		<?php
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];
	}
	else{
		$tam='';
	}
	if($tam=='quanlydanhmucsp'){
		include('modules/quanlydanhmucsp/main.php');
	}
	if($tam=='quanlysanpham'){
		include('modules/quanlysanpham/main.php');
	}
	if($tam=='quanlythuonghieu'){
		include('modules/quanlythuonghieu/main.php');
	}
	?>
</div>
<div class="clear"></div>