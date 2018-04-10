<?php
$sql="select * from sanpham";
$run=mysqli_query($conn,$sql);
?>
			<p align="left" style="background: #ee145b;padding: 3px;color: aliceblue;font-size: 19px;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';margin-left: 20px;" >TẤT CẢ SẢN PHẨM</p>
			<div class="sanpham">
				<ul>
				<?php 
					while($dong=mysqli_fetch_array($run)){
					?>
					<li><a href="?xem=chitietsanpham&id=<?php echo($dong['ID'])?>">
						<img src="admincp/modules/quanlysanpham/hinhanhsp/<?php echo($dong['HinhAnh'])?>" width="100%" height="180px" >
						<div class="tensp" style="width: 100%;height: 90px" >
						<p ><?php echo($dong['TenSP'])?>
						</p></div>
						
						<p style="color: red"><?php echo number_format($dong['Gia'])?> VND</p>
					</a></li>
					
					<?php 
					}
					?>
				</ul>
			</div>
			