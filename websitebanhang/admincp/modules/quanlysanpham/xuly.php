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
	$sql="insert into sanpham (TenSP,XuatXu,HinhAnh,MoTa,Gia,SoLuongTon,IDDongSP,IDThuongHieu) values ('$tensp','$xuatxu','$hinhanh','$mota','$gia','$soluongton','$iddong','$idthuonghieu')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlysanpham&ac=them');
}
elseif(isset($_POST['sua'])){
	//sua
	$sql="UPDATE sanpham SET TenSP='$tensp',XuatXu='$xuatxu',HinhAnh='$hinhanh',MoTa='$mota',Gia='$gia',SoLuongTon='$soluongton',IDDongSP='$iddong',IDThuongHieu='$idthuonghieu' where ID='$id";
    mysqli_query($conn,$sql);
  header('location:../../index.php?quanly=quanlysanpham&ac=sua&id='.$id);
}	
else{
	//xoa
	$sql="delete from sanpham where ID=$id";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlysanpham&ac=them');
	
}
?>
