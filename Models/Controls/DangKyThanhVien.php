<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ThanhVien.php');
	
	$nhom = 1;
	$hoten = $_POST["hoten"];
	$email = $_POST["email"];
	$sdt = $_POST["sdt"];
	$mk = $_POST["matkhau"];
	$diachi = $_POST["diachi"];
	$ngay = date("Y-d-m");
	$tt = 1;
	$tv = new ThanhVien();
	
	$result = $tv->ThemThanhVien($nhom, $hoten, $email, $sdt, $mk, $diachi, $ngay, $tt);
	if($result){
		echo "Đăng ký thành viên thành công.!";
		echo "<script language=javascript> window.location = 'http://localhost/tgdd'; </script>";
	}
	else{
		echo "That bai";
		echo "<script language=javascript> window.location = 'http://localhost/tgdd/index.php?option=dangkythanhvien.html'; </script>";
	}
?>