<?php
$sql_dong="select * from DONGSANPHAM";
$run_dong=oci_parse($conn,$sql_dong);
oci_execute($run_dong);

?>
    	<!--dòng sản phẩm-->
	    	<p align="center" style="background:#ee145b;padding: 15px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">DÒNG SẢN PHẨM</p>
			<div class="danhmucsanpham">
				<ul>
				<?php
					while($dong=oci_fetch_array($run_dong)){
					?>
					<li><a href="index.php?xem=sanphamtheodanhmuc&id=<?php echo($dong['ID'])?>">&#9679;<?php echo($dong['TENDONGSP'])?></a></li>
					<?php
					}
					?>
					
				</ul>
			</div>
			<!--kết thúc dòng sản phẩm-->
			<!--Thương hiệu-->
			<?php
$sql_thuonghieu="select * from THUONGHIEU";
$run=oci_parse($conn,$sql_thuonghieu);
oci_execute($run);

?>
			<p align="center" style="background: #ee145b;padding: 15px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">THƯƠNG HIỆU</p>
			<div class="danhmucsanpham">
				<ul>
				<?php
					while($dong=oci_fetch_array($run)){
					?>
					<li><a href="index.php?xem=sanphamtheothuonghieu&id=<?php echo($dong['ID'])?>">&#9679;<?php echo($dong['TENTHUONGHIEU'])?></a></li>
					<?php
					}
					?>
					
				</ul>
			</div>
			<!--Kết thúc Thương hiệu-->
	