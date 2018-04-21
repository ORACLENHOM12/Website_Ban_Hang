<?php
include('../config.php');
$tensp=$_POST['tensp'];
$xuatxu=$_POST['xuatxu'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
move_uploaded_file($hinhanh_tmp,'hinhanhsp/'.$hinhanh);
$mota=$_POST['mota'];
$gia=$_POST['gia'];
$soluongton=$_POST['soluongton'];
$iddong=$_POST['dongsp'];
$idthuonghieu=$_POST['thuonghieu'];
$id=$_GET['id'];
if(isset($_POST['them'])){
	///thêm
	$sql="insert into sanpham (TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values ('$tensp','$xuatxu','$hinhanh','$mota','$gia','$soluongton','$iddong','$idthuonghieu')";
	$run=oci_parse($conn,$sql);
	oci_execute($run);
	header('location:../../index.php?quanly=quanlysanpham&ac=them');
}
elseif(isset($_POST['sua'])){
	//sua
	if($hinhanh!=''){
		$sql="update SANPHAM set TENSP='$tensp', XUATXU='$xuatxu', HINHANH='$hinhanh', MOTA='$mota', GIA='$gia', SOLUONGTON='$soluongton', IDDONG='$iddong', IDTHUONGHIEU='$idthuonghieu' where ID='$id'";
	}else{
		$sql="update SANPHAM set TENSP='$tensp', XUATXU='$xuatxu', MOTA='$mota', GIA='$gia', SOLUONGTON='$soluongton', IDDONG='$iddong', IDTHUONGHIEU='$idthuonghieu' where ID='$id'";
	}
    $run=oci_parse($conn,$sql);
    oci_execute($run);
  header('location:../../index.php?quanly=quanlysanpham&ac=sua&id='.$id);
}	
else{
	//xoa
	$sql="delete from SANPHAM where ID=$id";
	$run=oci_parse($conn,$sql);
	oci_execute($run);
	header('location:../../index.php?quanly=quanlysanpham&ac=them');
	
}
?>
