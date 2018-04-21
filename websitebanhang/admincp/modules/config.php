<?php

$taikhoan='hr';
$pass='123456';
$csdl='localhost:1521/qlbanhang';
$conn=oci_connect($taikhoan,$pass,$csdl) or die('khong ket noi duoc voi csdl!!!');
?>