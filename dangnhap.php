
<?php
	include('admincp/modules/config.php');
	session_start();
	//kt da dang nhap chua
		if(isset($_SESSION['username'])){
			$tenkhachhang = $_SESSION['username'];
			$tinhtrang = "waiting...";
			$sql_donhang = "INSERT INTO DONHANG (TENKHACHHANG,TINHTRANG) VALUES ('$tenkhachhang','$tinhtrang')";
			$run=oci_parse($conn,$sql_donhang) or die(mysql_error());
			oci_execute($run);
			header('location:index.php?xem=thankyou');
		}
	//
?>




<link rel="stylesheet" type="text/css" href="style/style.css">
	<?php 

 	include('admincp/modules/config.php');

	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
			$sql_search="select * from KHACHHANG where EMAIL='$email' and MATKHAU='$password'";
$sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM (' . $sql_search . ')';

$stmt= oci_parse($conn, $sql_query);
oci_define_by_name($stmt, 'NUMBER_OF_ROWS', $number_of_rows);
oci_execute($stmt);
oci_fetch($stmt);
echo $number_of_rows;
		
		if($number_of_rows>0){
			$_SESSION['username']=$email;
	
			header('location:index.php');
		}
		else{

			//header('location:dangnhap.php');
			echo 'loi';
		
		}
	}

?>
<form action="" method="post" enctype="multipart/form-data">
	<?php
		if(isset($_SESSION['success'])){?>
				<div class="alert alert-success" style="width: 300px;margin-left: 450px;margin-top: 50px;color: red;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 20px">
  <strong>Chúc mừng!</strong> <?php echo($_SESSION['success']);unset($_SESSION['success']);?>
</div>
			<?php } ?>
					
<div align="center">
 <table width="500px" border="0" align="center"  style="border-collapse: collapse;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 20px;background-color:pink;color: white;box-shadow: 6px 5px 30px 5px;border-radius:10px;margin-top: 20px">
  <tbody >
    <tr>
      <td height="56" colspan="3" align="center" style="font-weight: bold;background-color: deeppink;color: white">ĐĂNG NHẬP TÀI KHOẢN</td>
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Email:</td>
      <td><input type="text" name="email" style="width: 230px;height: 30px"></td> 
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Mật khẩu:</td>
      <td><input type="password" name="password" style="width: 230px;height: 30px"></td>     
    </tr>
    <tr align="center">
      <td height="72" colspan="2"  ><input type="submit" class="btnmua"  name="dangnhap" value="Đăng Nhập" style="width: 100px;height: 35px"></td>
    </tr>
  </tbody>
</table>
<p style="margin-top: 20px;font-weight:bold">Bạn chưa có tài khoản? </p><a href="dangky.php"><input type="button" class="btnmua"  name="dangnhap" value="Đăng Ký" style="width: 100px;height: 35px"></a>
</div>
</form>
