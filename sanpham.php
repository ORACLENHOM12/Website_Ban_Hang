<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = '';
	}
	if($page == '' || $page == 1){
		$get = 0;
	}else{ 
		$get = ($page*8)-8;
	}
		$sql = "SELECT * FROM   SANPHAM  OFFSET '$get' ROWS FETCH NEXT 8 ROWS ONLY";
		$run_page = oci_parse($conn,$sql);
		oci_execute($run_page);

?>

			<p align="left" style="background: #ee145b;padding: 3px;color: aliceblue;font-size: 19px;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';margin-left: 20px;" >TẤT CẢ SẢN PHẨM</p>
			<div class="sanpham">
				<ul>
					<?php
$sql="select * from SANPHAM";
$run=oci_parse($conn,$sql);
oci_execute($run);
?>
				<?php 
					while($dong=oci_fetch_array($run_page)){
					?>
					<li><a href="?xem=chitietsanpham&id=<?php echo($dong['ID'])?>">
						<img src="admincp/modules/quanlysanpham/hinhanhsp/<?php echo($dong['HINHANH'])?>" width="100%" height="180px" >
						<div class="tensp" style="width: 100%;height: 90px" >
						<p ><?php echo($dong['TENSP'])?>
						</p></div>
						
						<p style="color: red"><?php echo number_format($dong['GIA'])?> VND</p>
					</a></li>
					
					<?php 
					}
					?>
				</ul>
			</div>
			<div class="clear"></div>
	
<div class="page" style="margin-top: 40px">
<?php
	$sql_trang = "SELECT * FROM SANPHAM";
	$run_trang = oci_parse($conn,$sql_trang) or die(oci_error());
	$sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM (' . $sql_trang. ')';
$stmt= oci_parse($conn, $sql_query);
oci_define_by_name($stmt, 'NUMBER_OF_ROWS', $number_of_rows);
oci_execute($stmt);
oci_fetch($stmt);
	$count = $number_of_rows;
	//echo $count;
	$a = ceil($count/8);
	//echo $a;
	echo '<p style="text-align:center">';
	for($b=1;$b<=$a;$b++){
		if(isset($_GET['page']) && $_GET['page'] == $b){
			echo '<a href="?page='.$b.'" style="text-decoration:none; padding:10px; color:#ee145b;"><strong><u>'.$b.'</u></strong></a>';
		}else{
			echo '<a href="?page='.$b.'" style="text-decoration:none; padding:10px; color:#ee145b;"><strong>'.$b.'</strong></a>';
		}
	}
	echo '</p><br/><br/>';
?>
</div>
			