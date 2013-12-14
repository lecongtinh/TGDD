<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Models/DatHang.php');
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$dh = new DatHang();
		$dh->xoaDatHang($id);
	}
?>