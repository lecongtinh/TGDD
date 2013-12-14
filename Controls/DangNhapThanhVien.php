<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ThanhVien.php');
	
	$email = $_POST["email"];
	$matkhau = $_POST["matkhau"];
	
	$tv = new ThanhVien();
	
	$result = $tv->DangNhap($email, $matkhau);
	if($result){
		$_SESSION["email"] = $email;	
		echo "<script language=javascript> window.location = 'http://localhost/tgdd'; </script>";
	}else{
		echo "<script language=javascript>
				alert('Đăng nhập thất bại');
				window.location = 'http://localhost/tgdd/index.php?option=dangnhapthanhvien.html';
			 </script>";
	}
?>