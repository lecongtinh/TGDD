<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	class DatHang extends database{
		public function themDatHang($tt, $hoten, $email, $sdt, $ghichu, $tongtien){
			$query = "INSERT INTO `dat_hang`(`TT_DH_ID`, `HOTEN`, `EMAIL`, `SDT`, `GHICHU`, `TONGTIEN`) VALUES ($tt,'$hoten','$email','$sdt','$ghichu','$tongtien')";
			return $this->executeQuery($query);
		}
		public function xoaDatHang($iddh){
			$query = "DELETE FROM `dat_hang` WHERE `DH_ID` = ".$iddh;
			return $this->executeQuery($query);
		}
		public function getDatHang(){
			$query = "SELECT * FROM `dat_hang`";
			return $this->executeQuery($query);
		}
	}
?>