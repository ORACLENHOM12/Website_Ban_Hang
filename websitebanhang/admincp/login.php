<?php 
 	include('modules/config.php');
	session_start();
session_destroy();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where Username='$username' and Password='$password' limit 1";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			
			header('location:index.php');
		}
		else{
			header('location:login.php');
		
		}
	}

?>
 
<form action="" method="post" enctype="multipart/form-data">
 <table width="400" border="1" align="center">
  <tbody>
    <tr align="center">
      <td colspan="3">Login</td>
    </tr>
    <tr>
      <td width="116" height="23">Username:</td>
      <td width="268"><input type="text" name="username"></td>
      
    </tr>
    <tr>
      <td height="23">Password:</td>
      <td>
      <input type="password" name="password" id="textfield2"></td>
      
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" name="login" value="Login"></td>
    </tr>
  </tbody>
</table>
</form>
