<div class="content">
	<div class="left">
	<?php
		include('left/danhmucsanpham.php');	
	?>
	</div>
	
	<div class="right">
	<?php	
	if(isset($_GET['xem'])){
		$tam=$_GET['xem'];
	}
	else{
		$tam='';
		include('modules/right/sanpham.php');
	}
	if($tam=='sanphamtheodanhmuc'){
		include('modules/right/sanphamtheodanhmuc.php');
	}
	else if($tam=='chitietsanpham'){
		include('modules/right/chitietsanpham.php');
	}
	else if($tam=='sanphamtheothuonghieu'){
		include('modules/right/sanphamtheothuonghieu.php');
	}
	else if($tam=='giohang'){
		include('modules/right/cart.php');
	}
	else if($tam=='dangky'){
		include('modules/right/dangky.php');
	}
		
	?>
	</div>		
</div>
	<div class="clear"></div>