<?php
$sql_dong="select * from dongsanpham";
$run_dong=mysqli_query($conn,$sql_dong);

?>
    	<!--dòng sản phẩm-->
	    	<p align="center" style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">DÒNG SẢN PHẨM</p>
			<div class="danhmucsanpham">
				<ul>
				<?php
					while($dong=mysqli_fetch_array($run_dong)){
					?>
					<li><a href="index.php?xem=sanphamtheodanhmuc&id=<?php echo($dong['ID'])?>">&#9679;<?php echo($dong['TenDongSP'])?></a></li>
					<?php
					}
					?>
					
				</ul>
			</div>
			<!--kết thúc dòng sản phẩm-->
			<!--Thương hiệu-->
			<?php
$sql_thuonghieu="select * from thuonghieu";
$run=mysqli_query($conn,$sql_thuonghieu);

?>
			<p align="center" style="background: #ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">THƯƠNG HIỆU</p>
			<div class="danhmucsanpham">
				<ul>
				<?php
					while($dong=mysqli_fetch_array($run)){
					?>
					<li><a href="index.php?xem=sanphamtheothuonghieu&id=<?php echo($dong['ID'])?>">&#9679;<?php echo($dong['TenThuongHieu'])?></a></li>
					<?php
					}
					?>
					
				</ul>
			</div>
			<!--Kết thúc Thương hiệu-->
	