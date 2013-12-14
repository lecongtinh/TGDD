<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Models/DatHang.php');
	if(isset($_POST["id"])){
		$id = mysql_escape_String($_POST['id']);
		$hoten = mysql_escape_String($_POST['hoten']);
		$dh = new DatHang();
		$dh->suaDatHang($id, $hoten);
	}
?>