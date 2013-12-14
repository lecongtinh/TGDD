<?php
	include("Database/connect.php");
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
        include("Views/Template.php");
		//unset($_SESSION["cart"]);
    ?>
</head>

<body>
	<div id="background">
        <!--<div id="banner_left">
            <img src="Libraries/images/banner/banner.jpg" width="155"/>
        </div>
       
        <div id="banner_right">
            <img src="Libraries/images/banner/banner1.jpg" width="155"/>
        </div>-->
        <div id="wrapper">
            <?php
                include("Views/header.php");
                include("Views/DanhMuc.php");
                switch($nav){
                    case 'trangchu.html' : 
                        if(is_file('Views/SanPham.php'))
                            include('Views/SanPham.php'); break;
							
					case 'dangkythanhvien.html' :
                        if(is_file("Views/DangKyThanhVien.php"))
                            include("Views/DangKyThanhVien.php"); break;
					case 'dangkythanhvien' : 
                        if(is_file('Controls/DangKyThanhVien.php'))
                            include('Controls/DangKyThanhVien.php'); break;
							
                    case 'dangnhapthanhvien.html' : 
                        if(is_file('Views/DangNhapThanhVien.php'))
                            include('Views/DangNhapThanhVien.php'); break;
					case 'dangnhapthanhvien' : 
						if(is_file('Controls/DangNhapThanhVien.php'))
							include('Controls/DangNhapThanhVien.php'); break;
					case 'dangxuat' : 
						if(is_file('Controls/DangXuatThanhVien.php'))
							include('Controls/DangXuatThanhVien.php'); break;
					
					case 'thongtinthanhvien.html' : 
                        if(is_file('Views/ThongTinThanhVien.php'))
                            include('Views/ThongTinThanhVien.php'); break;
					case 'thongtinthanhvien' : 
                        if(is_file('Controls/ThongTinThanhVien.php'))
                            include('Controls/ThongTinThanhVien.php'); break;
					
					case 'chitietsanpham' :
                        if(is_file("Views/ChiTietSanPham.php"))
                            include("Views/ChiTietSanPham.php"); break;
					case 'test1' :
						if(is_file("Views/Test1.php"))
                            include("Views/Test1.php"); break;
                    
                    case 'giohang.html' :
                        if(is_file("Views/GioHang.php"))
                            include("Views/GioHang.php"); break;
							
					case 'gioithieu.html' :
                        if(is_file("Views/GioiThieu.php"))
                            include("Views/GioiThieu.php"); break;
					case 'tintuc.html' :
                        if(is_file("Views/TinTuc.php"))
                            include("Views/TinTuc.php"); break;
					case 'lienhe.html' :
                        if(is_file("Views/LienHe.php"))
                            include("Views/LienHe.php"); break;
					case 'tuyendung.html' :
                        if(is_file("Views/TuyenDung.php"))
                            include("Views/TuyenDung.php"); break;	
					case 'timkiem' :
                        if(is_file("Controls/TimKiem.php"))
                            include("Controls/TimKiem.php"); break;                    
                }
                include("Views/Footer.php");
            ?>
        </div>
    </div>
</body>

</html>

<?php
    //include("admin_template/connection/close_connect.php");
?>	