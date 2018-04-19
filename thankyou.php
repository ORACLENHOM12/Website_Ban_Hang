<?php	
	//chi tiet hoa don
		$tenkhachhang = $_SESSION['username'];
		$tinhtrang = 'waiting...';
		$sql_donhang = "SELECT ID,TENKHACHHANG FROM DONHANG WHERE TENKHACHHANG='".$tenkhachhang."' AND TINHTRANG='".$tinhtrang."'";
		$query_donhang = oci_parse($conn,$sql_donhang) or die (oci_error());
		oci_execute($query_donhang);
		$row = oci_fetch_array($query_donhang);
	
	foreach($_SESSION as $name => $value){
		if($value > 0){
			if(substr($name,0,5)=='cart_'){
				$id=substr($name,5);
				$sql_sp="SELECT * FROM SANPHAM WHERE ID='".$id."'";
				$query = oci_parse($conn,$sql_sp) or die (oci_error());
				oci_execute($query);
				while($dong=oci_fetch_array($query)){
					$thanhtien=$dong['GIA']*$value;
					$sql_details = "INSERT INTO HOADON (ID_DONHANG, TENKHACHHANG,ID_SP, SANPHAM, SOLUONG, THANHTIEN) VALUES ('".$row['ID']."','".$row['TENKHACHHANG']."','".$dong['ID']."','".$dong['TENSP']."','$value','$thanhtien')";
					$run=oci_parse($conn,$sql_details) or die (oci_error());
					oci_execute($run);
					
				}
				//xoa gio hang
				unset($_SESSION[$name]);
			}
		}
	}
?>	
	<script>alert("Đơn hàng đã được tạo!");</script>
    <br/><br/><br/><p style="text-align:center; font-size:300%; color:deeppink">Cảm ơn bạn đã mua hàng!</p><br/><br/><br/>