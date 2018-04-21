

<?php
$sql="select * from SANPHAM where ID='$_GET[id]'";
$run=oci_parse($conn,$sql);
oci_execute($run);
?>
<?php 
					while($dong=oci_fetch_array($run)){
					?>

<div class="ctwrapper" style="width:100%;height:auto;border: 1px solid #FFF">
<div class="ct">
<div class="ctleft" style="width: 300px;height: 350px;float: left">
	<img src="admincp/modules/quanlysanpham/hinhanhsp/<?php echo($dong['HINHANH']) ?>" height="350px" width="300px">
</div>
<div class="ctright" style="width: 620px;height: 350px;float: right">
<div style="width: 100%;height: 250px" >
	<h4 style="font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 35px;font-weight: bold;text-align: center;"> <?php  echo($dong['TENSP'])?></h4>
	<p style="color: red;text-align: center;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 40px"><?php  echo(number_format($dong['GIA']))?> VND</p>
	</div>
	<a href="index.php?xem=giohang&add=<?php echo($dong['ID'])?>" style="text-decoration: none"><button class="btnmua">MUA NGAY</button></a>
</div>
</div>
<div class="mota" style="width:900px;height:auto;margin-top: 380px;margin-left: 20px">
<p style="font-weight: bold;font-size: 20px;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">Xuất xứ: <?php echo($dong['XUATXU'])?></p>
	<p style="font-size: 20px;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'"><?php echo($dong['MOTA'])?></p>
</div>
<?php 
					}					
?>	

</div>

