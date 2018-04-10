<?php 
 	include('admincp/modules/config.php');
	session_start();
session_destroy();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="select * from khachhang where Email='$email' and MatKhau='$password' limit 1";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			
			header('location:index.php');
		}
		else{
			header('location:dangnhap.php');
		
		}
	}

?>
<form action="" method="post" enctype="multipart/form-data">
 <table width="500" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center">ĐĂNG NHẬP</td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>Mật khẩu:</td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
    </tr>
  </tbody>
</table>
</form>
