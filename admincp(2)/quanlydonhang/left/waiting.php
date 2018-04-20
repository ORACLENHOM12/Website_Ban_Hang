<?php
	$tinhtrang = 'waiting...';
	$sql = "SELECT * FROM DONHANG WHERE TINHTRANG='".$tinhtrang."'";
	$run = oci_parse($conn,$sql) or die(oci_error());
	oci_execute($run);
?>
<div class="donhang">
<p style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'" align="center">Đơn hàng chưa xử lý</p>
<ul style="text-align: center;">
	<?php while($dong = oci_fetch_array($run)){ ?>
	<li style="list-style: none;"><a href="index.php?quanly=quanlydonhang&donhang=<?php echo $dong['ID'] ?>"><?php echo $dong['ID'] ?></a></li>
	<?php } ?>
</ul>
</div>	
	
	
