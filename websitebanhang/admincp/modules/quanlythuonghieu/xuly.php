<?php
include('../config.php');
$tenthuonghieu=$_POST['tenthuonghieu'];
$id=$_GET['id'];
if(isset($_POST['them'])){
	///thêm
	$sql="insert into thuonghieu (TenThuongHieu) values ('$tenthuonghieu')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlythuonghieu&ac=them');
}
else if(isset($_POST['sua'])){
	 $sql="update thuonghieu set TenThuongHieu='$tenthuonghieu' where ID=$id";
    mysqli_query($conn, $sql);
  header('location:../../index.php?quanly=quanlythuonghieu&ac=sua&id='.$id);
}
else{
	
	$sql="delete from thuonghieu where ID=$id";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlythuonghieu&ac=them');
}
?>