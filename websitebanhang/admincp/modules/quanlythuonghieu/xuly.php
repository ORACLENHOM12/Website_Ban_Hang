<?php
include('../config.php');
$tenthuonghieu=$_POST['tenthuonghieu'];
$id=$_GET['id'];
if(isset($_POST['them'])){
	///thêm
	$sql="insert into THUONGHIEU (TENTHUONGHIEU) values ('$tenthuonghieu')";
	$run=oci_parse($conn,$sql);
	oci_execute($run);
	header('location:../../index.php?quanly=quanlythuonghieu&ac=them');
}
else if(isset($_POST['sua'])){
	 $sql="update THUONGHIEU set TENTHUONGHIEU='$tenthuonghieu' where ID=$id";
    $run=oci_parse($conn,$sql);
	oci_execute($run);
  header('location:../../index.php?quanly=quanlythuonghieu&ac=sua&id='.$id);
}
else{
	
	$sql="delete from THUONGHIEU where ID=$id";
	$run=oci_parse($conn,$sql);
	oci_execute($run);
	header('location:../../index.php?quanly=quanlythuonghieu&ac=them');
}
?>