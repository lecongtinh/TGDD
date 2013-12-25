<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Database/connect.php');
	class NhanVien extends database{
		public function DangNhap($user, $pass){
			$query = "SELECT * FROM `nhan_vien` WHERE `NV_USER` = '".$user."' AND `NV_PASS` = '".$pass."'";
			$result = $this->executeQuery($query);
			$kt = mysql_num_rows($result);
			return $kt;
		}
	}
?>