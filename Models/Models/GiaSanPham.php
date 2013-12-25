<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class GiaSanPham extends database{
		
		public function ThemGiaSanPham($gia, $sx){
			$query = "INSERT INTO `gia_san_pham`(`GIA_TRI`, `SAPXEP`) VALUES (".$gia.",".$sx.")";
			return $this->executeQuery($query);
		}
		public function CapNhatGiaSanPham($id, $gia, $sx){
			$query = "UPDATE `gia_san_pham` SET `GIA_TRI`=".$gia.",`SAPXEP`=".$sx." WHERE `ID_GIA` = ".$id;
			return $this->executeQuery($query);
		}
		public function getGia(){
			$query = "SELECT `ID_GIA`,`GIA_TRI` FROM `gia_san_pham`";
			return $this->executeQuery($query);
		}
	}
?>