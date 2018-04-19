<link rel="stylesheet" type="text/css" href="style/style.css">
<body bgcolor="antiquewhite">
<?php 
include('admincp/modules/config.php');
	session_start();
if(isset($_POST['dangky'])){
	$tenkh=$_POST['tenkh'];
	$email=$_POST['email'];
	$matkhau=$_POST['matkhau'];
	$diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
	$sql="insert into khachhang (TENKH,EMAIL,MATKHAU,DIACHI,SDT) values ('$tenkh','$email','$matkhau','$diachi','$sdt')";
	$query=oci_parse($conn,$sql);
  oci_execute($query);
	if($query){
		if($tenkh!=''&& $email!=''&&$matkhau!=''&&$diachi!=''&&$sdt!=''){
		$_SESSION['success']="Đăng ký thành công";
		header('location:dangnhap.php');
		
		}
		else header('location:dangky.php');
	}
	else{
		header('location:dangky.php');
	
}

}
?>

<div class="dangky" align="center" style="margin: 70px;">

<form action="" method="post" enctype="multipart/form-data">
 <table width="500px" border="0" align="center" style="border-collapse: collapse;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 20px;background-color:pink;color: white;box-shadow: 6px 5px 30px 5px;border-radius:10px">
  <tbody >
    <tr>
      <td height="56" colspan="3" align="center" style="font-weight: bold;background-color: deeppink;color: white">ĐĂNG KÝ TÀI KHOẢN</td>
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Tên khách hàng:</td>
      <td width="312" ><input type="text" name="tenkh" style="width: 230px;height: 30px" ></td>
      
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Email:</td>
      <td><input type="text" name="email" style="width: 230px;height: 30px"></td>
     
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Mật khẩu:</td>
      <td><input type="password" name="matkhau" style="width: 230px;height: 30px"></td>
      
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Địa chỉ:</td>
      <td><input type="text"  name="diachi" style="width: 230px;height: 30px"></td>
      
    </tr>
    <tr>
      <td width="180" height="50" style="padding-left: 50px">Số điện thoại:</td>
      <td><input type="text" name="sdt" style="width: 230px;height: 30px"></td>
      
    </tr>
    <tr align="center">
      <td height="72" colspan="2"  ><input type="submit" class="btnmua" name="dangky" value="Đăng ký" style="width: 100px;height: 35px"></td>
    </tr>
  </tbody>
</table>
</form>
</div>
</body>
