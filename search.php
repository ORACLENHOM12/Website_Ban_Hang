<?php 
if(isset($_POST['search'])){
	$search=$_POST['txtsearch'];
	$sql_search="SELECT * from SANPHAM WHERE  upper(TENSP) like upper('%$search%')";
$run=oci_parse($conn,$sql_search);
oci_execute($run);



}

?>

			<p align="left" style="background: #ee145b;padding: 3px;color: aliceblue;font-size: 19px;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';margin-left: 20px;" >Sản phẩm tìm thấy</p>
			<div class="sanpham">
			<?php
				/*if($number_of_rows==0){?>
				<p align="center">Không tìm thấy sản phẩm nào</p>
						
			<?php	
				}
				else{	*/					
				?>
				<ul>
				<?php
					while($dong=oci_fetch_array($run)){
					?>
					<li><a href="../../?xem=chitietsanpham&id=<?php echo($dong['ID'])?>">
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