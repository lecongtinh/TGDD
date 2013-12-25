<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ThanhVien.php');
	
	$hoten = $_POST["hoten"];
	$email = $_POST["email"];
	$sdt = $_POST["sdt"];
	$mk = $_POST["matkhau"];
	$diachi = $_POST["diachi"];

	$tv = new ThanhVien();
	
	$result = $tv->CapNhatThanhVien($hoten, $email, $sdt, $mk, $diachi);
	if($result){
		echo "<script language=javascript>  
				alert('Cập nhật thông tin thành công');
				window.location = 'http://localhost/tgdd/index.php?option=thongtinthanhvien.html'; 
			  </script>";
	}
	else{
		echo "<script language=javascript>  
				alert('Cập nhật thông tin thất bại');
				window.location = 'http://localhost/tgdd/index.php?option=thongtinthanhvien.html'; 
			  </script>";
	}
?>