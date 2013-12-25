<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Models/DatHang.php');
	if(isset($_POST["id"])){
		$id = mysql_escape_String($_POST['id']);
		$tt_dh = mysql_escape_string($_POST['tt_dh']);
		$hoten = mysql_escape_String($_POST['hoten']);
		$email = mysql_escape_String($_POST['email']);
		$sdt = mysql_escape_String($_POST['sdt']);
		$ghichu = mysql_escape_String($_POST['ghichu']);
		$dh = new DatHang();
		$dh->suaDatHang($id, $tt_dh, $hoten, $email, $sdt, $ghichu);
	}
?>