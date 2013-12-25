<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Database/connect.php');
	class DatHang extends database{
		public function thongTinDatHang($start, $display){
			$query = "SELECT
					  `dat_hang`.`DH_ID`,
					  `dat_hang`.`TT_DH_ID`,
					  `dat_hang`.`HOTEN`,
					  `dat_hang`.`EMAIL`,
					  `dat_hang`.`SDT`,
					  `dat_hang`.`GHICHU`,
					  `dat_hang`.`TONGTIEN`,
					  `trang_thai_dat_hang`.`TT_DH_TEN`
					FROM
					  `dat_hang`
					INNER JOIN `trang_thai_dat_hang` ON `dat_hang`.`TT_DH_ID` =
						`trang_thai_dat_hang`.`TT_DH_ID`
					LIMIT $start, $display";
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
		public function suaDatHang($id, $tt_dh, $hotenkh, $email, $sdt, $ghichu){
			$query = "UPDATE `dat_hang` SET `TT_DH_ID`= ".$tt_dh.",`HOTEN`= '".$hotenkh."', `EMAIL` = '".$email."', `SDT` = '".$sdt."', `GHICHU` = '".$ghichu."' WHERE `DH_ID` = ".$id;
			return $this->executeQuery($query);
		}
	}
?>