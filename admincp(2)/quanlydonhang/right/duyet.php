<?php
	if(isset($_GET['donhang'])){
		$tam = $_GET['donhang'];
		$sql_hoadon = "SELECT * FROM HOADON WHERE ID_DONHANG = '".$tam."'";
		$run_hoadon = oci_parse($conn,$sql_hoadon) or die(oci_error());
		oci_execute($run_hoadon);
		$dong_hd = oci_fetch_array($run_hoadon);
		$run_hoadon2 = oci_parse($conn,$sql_hoadon) or die(oci_error());
		oci_execute($run_hoadon2);
	
?>

<table width="500" border="0" align="center">
  <tr>
    <td style="font-size:120%; color:#060"><strong>STT: </strong><?php echo $tam?></td>
    <td style="font-size:120%; color:#060"><strong>TÊN KHÁCH HÀNG: </strong><?php echo '<span style="font-style:italic">'.$dong_hd['TENKHACHHANG'].'</span>'?></td>
  </tr>
</table>
<table width="890" border="1" align="center">
<tr>
    <td style="color: #036; text-align:center; font-size: 110%"><strong>Mã hàng</strong></td>
    <td style="color: #036; text-align:center; font-size: 110%"><strong>Tên hàng</strong></td>
    <td style="color: #036; text-align:center; font-size: 110%"><strong>Số lượng</strong></td>
    <td style="color: #036; text-align:center; font-size: 110%"><strong>Thành tiền</strong></td>
</tr>
<?php
		while($dong_hoadon = oci_fetch_array($run_hoadon2)){
			echo '<tr>';
			echo '<td style="text-align:center; padding: 10px">'.$dong_hoadon['ID_SP'].'</td>';
			echo '<td>'.$dong_hoadon['SANPHAM'].'</td>';
			echo '<td style="text-align:center">'.$dong_hoadon['SOLUONG'].'</td>';
			echo '<td style="text-align:right">'.$dong_hoadon['THANHTIEN'].'</td>';
			echo '</tr>';
		}

	}
?>

</table>

<?php
	if(isset($_GET['donhang'])){
?>

<div id="check" align="center">
	<form method="post" enctype="multipart/form-data">
		<input type="submit" class="btnduyet" name="duyet" id="button" value="Duyệt đơn hàng" style="width: 150px;height: 40px;background-color: black;color: white;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana; border: 0px;margin-top: 40px;font-size: 18px" />
	</form>
</div>

<?php
	}
	if(isset($_POST['duyet'])){
		$updatetinhtrang = 'done!';
		$sql_done="UPDATE DONHANG SET TINHTRANG='$updatetinhtrang' WHERE ID='".$tam."'";
		$run=oci_parse($conn,$sql_done)or die(oci_error());
		oci_execute($run);
	}
?>