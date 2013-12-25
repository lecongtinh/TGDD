<?php
	session_start();
	if(isset($_SESSION["user"])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Bảng quản trị</title>
	<?php 
		include("Views/template.php"); 
	?>
</head>

<body>

<div id="body-wrapper"> 
	<?php 
	//navigate cua m de o dau zay
		if(isset($_GET['menu'])){
			$nav = $_GET['menu'];	
		}else 
			$nav="column_right";
		$direct = "index.php?menu="; 
		include("Views/MenuTrai.php");
	?>	
    <div id="main-content">
    	<h2>Xin chào Quản trị viên</h2>
        
        <?php
			include("Views/header.php");
			
			switch($nav){
				case 'category':if(is_file('Views/category.php')) include('Views/category.php'); break;
				case 'quanlychung':if(is_file('Views/QuanLyChung.php')) include('Views/QuanLyChung.php'); break;
				case 'quanlysanpham':if(is_file('Views/QuanLySanPham.php')) include('Views/QuanLySanPham.php'); break;
				case 'quanlydathang':if(is_file('Views/QuanLyDatHang.php')) include('Views/QuanLyDatHang.php'); break;
				case 'column_left':if(is_file('Views/MenuTrai.php')) include('Views/MenuTrai.php'); break;
				case 'menu_header':if(is_file('Views/header.php')) include('Views/header.php'); break;
				case 'menu_footer':if(is_file('Views/footer.php')) include('Views/footer.php'); break;
				case 'slideshow':if(is_file('Views/slideshow.php')) include('Views/slideshow.php'); break;
				case 'quanlynguoidung':if(is_file('Views/QuanLyNguoiDung.php')) include('Views/QuanLyNguoiDung.php'); break;
				case 'dangxuat':if(is_file('Controllers/DangXuatNhanVien.php')) include('Controllers/DangXuatNhanVien.php'); break;
				
				default: include('Views/QuanLyChung.php');break;
			}      
		?>	
        	
        <?php include("Views/footer.php"); ?>
    </div> 
</div>

</body>
</html>
<?php
	}else{
		header('Location:http://localhost/tgdd/administration/login.php');
	}
?>
