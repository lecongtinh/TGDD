
<div id="sidebar">
	<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
        <h1 id="sidebar-title"><a href="#">Thế Giới Di Động</a></h1>
      
        <!-- Logo (221px wide) -->
        <a href="#"><img id="logo" src="../Libraries/images/logo/logo1.png" alt="Thế Giới Di Động"  width="220"/></a>
      
        <!-- Sidebar Profile links -->
        <div id="profile-links">
            Chào , <a title="Edit your profile" href="#messages" rel="modal">lecongtinh</a>, Bạn đã viết <a href="#messages" rel="modal" title="3 Messages">2 bài mới</a><br />
            <br />
            <a href="#" title="View the Site">Xem trang chủ</a> | <a href="<?php echo $direct."dangxuat"?>" title="Sign Out">Đăng xuất</a>
        </div>        
        
        <ul id="main-nav">  <!-- Accordion Menu -->
            
            <li>
                <a href="<?php echo $direct."../../admin_template/views/column_right" ?>" class="nav-top-item no-submenu current" > <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Quản trị chung
                </a>       
            </li>
            
            <li> 
                <!-- Add the class "current" to current menu item -->
                <a href="<?php echo $direct."../../admin_template/views/add_product" ?>" class="nav-top-item">Quản lý Sản phẩm</a>
                <ul>
                    <li><a href="<?php echo $direct."../../admin_template/views/add_product" ?>">Danh sách Sản phẩm</a></li>
                    <li><a href="<?php echo $direct."../../admin_template/views/add_product" ?>">Thêm Sản phẩm</a></li> <!-- Add class "current" to sub menu items also -->
                    <li><a href="<?php echo $direct."../../admin_template/views/add_product" ?>">Thêm Thuộc tính</a></li>
                </ul>
            </li>
            
            <li>
                <a href="<?php echo $direct."../../admin_template/views/order_product" ?>" class="nav-top-item">
                    Quản lý Đặt hàng
                </a>
                <ul>
                    <li><a href="<?php echo $direct."../../admin_template/views/order_product" ?>">Danh sách Đặt hàng</a></li>
                    <li><a href="<?php echo $direct."../../admin_template/views/order_product" ?>">Lập Hóa đơn</a></li>
                    <li><a href="<?php echo $direct."../../admin_template/views/order_product" ?>">Thông kê hóa đơn</a></li>
                    <li><a href="<?php echo $direct."../../admin_template/views/order_product" ?>">Xuất thống kê</a></li>               
                </ul>
            </li>
            
            <li>
                <a href="<?php echo $direct."../../admin_template/column_left" ?>" class="nav-top-item">
                    Quản lý Menu
                </a>
                <ul>
                    <li><a href="<?php echo $direct."../../admin_template/views/header" ?>">Menu header</a></li>
                    <li><a href="column_left.php"<?php echo $direct."footer" ?>"">Menu footer</a></li>
                    <li><a href="column_left.php"<?php echo $direct."column_left" ?>"">Menu column-left</a></li>
                    <li><a href="column_left.php"<?php echo $direct."slideshow" ?>"">Banner ảnh</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-top-item">
                    Quản lý Hình ảnh
                </a>
                <ul>
                    <li><a href="#">Upload hình</a></li>
                    <li><a href="#">Quản lý hình</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $direct."../../admin_template/views/admin" ?>" class="nav-top-item">
                    Quản lý Người dùng
                </a>
                <ul>
                    <li><a href="<?php echo $direct."../../admin_template/views/admin" ?>">Nhân viên</a></li>
                    <li><a href="<?php echo $direct."../../admin_template/views/admin" ?>">Khách hàng</a></li>
                    <li><a href="<?php echo $direct."../../admin_template/views/admin" ?>">Người dùng</a></li>
                </ul>
            </li>      
            
        </ul> <!-- End #main-nav -->
	</div>
</div>