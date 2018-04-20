<?php
include('../config.php');
$tendongsp=$_POST['tendongsp'];
$id=$_GET['id'];
if(isset($_POST['them'])){
	///thêm
	$sql="insert into DONGSANPHAM (TENDONGSP) values ('$tendongsp')";
	$run=oci_parse($conn,$sql);
	oci_execute($run);
	header('location:../../index.php?quanly=quanlydanhmucsp&ac=them');
}
else if(isset($_POST['sua'])){
	 $sql="update DONGSANPHAM set TENDONGSP='$tendongsp' where ID=$id";
    $run=oci_parse($conn, $sql);
    oci_execute($run);
  header('location:../../index.php?quanly=quanlydanhmucsp&ac=sua&id='.$id);
}
else{
	
	$sql="delete from DONGSANPHAM where ID=$id";
	$run=oci_parse($conn,$sql);
	oci_execute($run);
	header('location:../../index.php?quanly=quanlydanhmucsp&ac=them');
}
?>
