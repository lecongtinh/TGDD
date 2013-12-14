<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Database/connect.php');
	class DatHang extends database{
		public function thongTinDatHang($start, $display){
			$query = "SELECT * FROM `dat_hang` LIMIT $start, $display";
			return $this->executeQuery($query);
		}
		public function countRow(){
			$query = "SELECT COUNT(*) AS TONG FROM `dat_hang`" ;
			$result = $this->executeQuery($query);
			$kq = mysql_fetch_array($result);
			return $kq["TONG"];
		}
		public function xoaDatHang($id){
			$query = "DELETE FROM `dat_hang` WHERE `DH_ID` = ".$id;
			return $this->executeQuery($query);
		}
		public function suaDatHang($id, $hotenkh){
			$query = "UPDATE `dat_hang` SET `HOTEN`= '".$hotenkh."' WHERE `DH_ID` = ".$id;
			return $this->executeQuery($query);
		}
	}
?>