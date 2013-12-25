<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Database/connect.php');
	class TrangThaiDatHang extends database{
		public function getTTDatHang(){
			$query = "SELECT * FROM TRANG_THAI_DAT_HANG";
			return $this->executeQuery($query);
		}
		public function getTenTTDH($id){
			$query = "SELECT `TT_DH_TEN` FROM `trang_thai_dat_hang` WHERE `TT_DH_ID` = ".$id;
			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			return $row["TT_DH_TEN"];
		}
	}
?>