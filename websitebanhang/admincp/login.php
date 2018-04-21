<?php 
  include('modules/config.php');
session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from admin where Username='$username' and Password='$password'";
    $sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM (' .$sql. ')';
$stmt= oci_parse($conn, $sql_query);
oci_define_by_name($stmt, 'NUMBER_OF_ROWS', $number_of_rows);
oci_execute($stmt);
oci_fetch($stmt);
    if($number_of_rows==1){
      $_SESSION['dangnhap']=$username;
      header('location:index.php');
    }
    
  }

?>
 <link rel="stylesheet" type="text/css" href="style/style.css">
 <div align="center" style="border: 1px solid #000000;width: 400px;height: auto;margin-top: 100px;margin-left: 480px">
<form action="" method="post" enctype="multipart/form-data">
 <table width="400" border="0" align="center" style="">
  <tbody>
    <tr align="center">
      <td height="55" colspan="3" style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';height: 40px">Login</td>
    </tr>
    <tr>
      <td width="115" height="79" align="center">Username:</td>
      <td width="275" align="center"><input type="text" name="username" style="width: 200px;height: 35px" ></td>
      
    </tr>
    <tr>
      <td height="35" align="center">Password:</td>
      <td align="center">
      <input type="password" name="password"  style="width: 200px;height: 35px"></td>
      
    </tr>
    <tr align="center">
      <td height="42" colspan="2"><input type="submit" class="btn" name="login" value="Login"></td>
    </tr>
  </tbody>
</table>
</form>
</div>
