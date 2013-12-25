<?php
	session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Models/NhanVien.php');
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	$nv = new NhanVien();
	
	$result = $nv->DangNhap($user, $pass);
	if($result){
		$_SESSION["user"] = $user;	
		echo "<script language=javascript> window.location = 'http://localhost/tgdd/administration'; </script>";
	}else{
		echo "<script language=javascript>
				alert('Đăng nhập thất bại');
				window.location = 'http://localhost/administration/views/login.php';
			 </script>";
	}
	
?>