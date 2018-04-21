<?php
	$update = 'done!';
	$sql_update = "SELECT * FROM DONHANG WHERE TINHTRANG='".$update."'";
	$run_update = oci_parse($conn,$sql_update) or die(oci_error());
	oci_execute($run_update);
?>
<div class="donhang">
<p style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';margin-top: 20px;" align="center">Đơn hàng đã xử lý</p>
<ul style="text-align: center;">
	<?php while($dong_update = oci_fetch_array($run_update)){ ?>
	<li><a href="index.php?quanly=quanlydonhang&donhangduyet=<?php echo $dong_update['ID'] ?>"><?php echo $dong_update['ID'] ?></a></li>
	<?php } ?>
</ul>
</div>	