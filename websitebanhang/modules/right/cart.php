 <?php 
//session_start();
//session_destroy();
//them san pham
if(isset($_GET['add']) && !empty($_GET['add'])){
	$id=$_GET['add'];
	 @$_SESSION['cart_'.$id]+=1;
	header('location:index.php?xem=giohang');
}
if(isset($_GET['cong']) && !empty($_GET['cong'])){
	$id=$_GET['cong'];
	 @$_SESSION['cart_'.$id]+=1;
	header('location:index.php?xem=giohang');
}
if(isset($_GET['tru']) && !empty($_GET['tru'])){
	$id=$_GET['tru'];
	 @$_SESSION['cart_'.$id]-=1;
	header('location:index.php?xem=giohang');
}
if(isset($_GET['xoa']) && !empty($_GET['xoa'])){
	$id=$_GET['xoa'];
	 @$_SESSION['cart_'.$id]=0;
	header('location:index.php?xem=giohang');
}
?>

<table width="100%" border="1" align="center" style="border-collapse: collapse">
  <tbody>
    <tr>
      <td height="30" colspan="6" align="center" bgcolor="#ee145b" style="font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif';font-size: 25px;color: white">GIỎ HÀNG</td>
    </tr>
    <tr align="center">
      <td height="40">Tên Sản Phẩm</td>
      <td>Số Lượng</td>
      <td>Đơn Giá</td>
      <td>Thành Tiền</td>
      <td>Xóa</td>
    </tr>
    <?php
	   
//hien thi san pham da mua
	$tongtien=0;  
foreach($_SESSION as $name =>$values){
	if($values>0){
		 $id=substr($name,5);
		$sql="select TENSP,GIA from sanpham where ID='$id'";
		$run=oci_parse($conn,$sql);
		oci_execute($run);
		while($dong=oci_fetch_array($run)){
			$thanhtien=$dong['GIA']*$values;
			$tongtien+=$thanhtien;
				
	?> 
    <tr align="center">
      <td width="39%" height="46"><?php echo($dong['TENSP'])?></td>
      <td width="9%">
		<a style="font-size: 19px;text-decoration: none;color:#ee145b" href="index.php?xem=giohang&tru=<?php echo $id?>">[-]</a><?php echo($values)?>
		<a style="font-size: 19px;text-decoration: none;color:#ee145b" href="index.php?xem=giohang&cong=<?php echo $id?>">[+]</a>	
      </td>
       
      <td width="17%"><?php echo(number_format($dong['GIA'])) ?> VND</td>
      <td width="22%"><?php echo(number_format($dong['GIA']*$values))?> VND</td>
      <td width="7%"><a href="index.php?xem=giohang&xoa=<?php echo $id?>">Xóa</a></td>
       </tr>
       <?php	
		} 
		 
	}
}
?>		
	<tr>
      <td height="36" colspan="3" align="right">Tổng cộng:</td>
      <td align="center"><?php echo(number_format($tongtien))?> VND</td>
      <td align="center">&nbsp;</td>
    </tr>  
   
  </tbody>
</table>
<a href="../websitebanhang/dangnhap.php" class="btnmua" style="margin-top: 20px;padding-top: 20px">Thanh toán</a>

	




