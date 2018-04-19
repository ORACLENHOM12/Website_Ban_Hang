<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql="select * from SANPHAM where IDTHUONGHIEU='$id'";
$run=oci_parse($conn,$sql);
oci_execute($run);
$sql_dongsp="select * from THUONGHIEU where ID='$id'";
$run_dongsp=oci_parse($conn,$sql_dongsp);
oci_execute($run_dongsp);
while($dong=oci_fetch_array($run_dongsp)){

?>

			<p align="left" style="background: #ee145b;padding: 3px;color: aliceblue;font-size: 19px;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';margin-left: 20px;" ><?php echo($dong['TENTHUONGHIEU'])?></p>
			<?php }?>
			<div class="sanpham">
				<ul>
				<?php
					while($dong=oci_fetch_array($run)){
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
			
			