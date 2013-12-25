<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/SanPham.php');
	
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$sp = new SanPham();
		$tensp = $sp->getTenSP($id);
	}
	else
		$id = "";
	if(isset($_GET["option"])){
		$nav = $_GET["option"];
	}else
		$nav = "trangchu.html";
	$direct = "index.php?option=";
	
	switch($nav){
		case "trangchu.html": echo "<title>Buôn bán điện thoại online </title>"; break;
		case "dangkythanhvien.html": echo "<title>Đăng ký thành viên </title>"; break;
		case "dangnhapthanhvien.html": echo "<title>Đăng nhập thành viên </title>"; break;
		case "chitietsanpham": if($tensp != "") echo "<title>".$tensp."</title>"; else echo ""; break;
		case "giohang.html": echo "<title>Giỏ hàng</title>"; break;
		case "gioithieu.html": echo "<title>Giới thiệu</title>"; break;
		case "tintuc.html": echo "<title>Tin tức</title>"; break;
		case "tuyendung.html": echo "<title>Tuyển dụng</title>"; break;
		case "lienhe.html": echo "<title>Liên hệ</title>"; break;
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Libraries/css/global.css"/>
<script language="javascript" type="text/javascript" src="javascript/flexcroll.js"></script>
<script language="javascript" type="text/javascript" src="javascript/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="javascript/jquery.js"></script>
<script language="javascript" type="text/javascript" src="javascript/script.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script>
$(function() {
$( "#tabs" ).tabs();
});
</script>