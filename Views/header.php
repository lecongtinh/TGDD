<?php
	include_once($_SERVER['DOCUMENT_ROOT']."/TGDD/Models/ThanhVien.php");
	
	//Link hình ảnh
	$url_logo = "Libraries/images/logo/";
?>
<script language="javascript">
	function xacnhan(){
		var kt = confirm("Bạn có chắc muốn thoát không?");
		if(kt == true)
			return true;
		else
			return false;
	}
	$(document).ready(function() {
        $("#filter_name").keyup(function(e){
			var kw = $("#filter_name").val();
			if(e.keyCode == 13){
				if(kw != ""){
				$.post(
				"Controls/TimKiem.php",
				{
					data: kw,
					
				},
				function(data,status){
					$("#cotphai").html(data);
				});
				}else
					$("#cotphai").html("");
			}
		})
    });
	//Goi y san pham
	$( "#filter_name" ).autocomplete({
		source: "Controls/autoTimSanPham.php",minLength: 2
	});
	function find_sanpham() //ham lay thong tin ten cua can bo bang ma so
	{
		keyword = document.getElementById('filter_name').value;
		if(keyword == "Tìm kiếm") {
			document.getElementById("filter_name").value = ""; 
			return false;
		}
		var xmlhttp;
		if (window.XMLHttpRequest)
		  { //code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  { //code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			 if(xmlhttp.responseText==''){
				alert('Lỗi');
			 }
			 else{             
					document.getElementById('filter_name').innerHTML =xmlhttp.responseText;
			   }
			   xmlhttp = null;          
			   
			}
		  }
		 xmlhttp.open("GET","&keyword="+keyword+"&q="+Math.random(),true);
		 xmlhttp.send();
		
		return false;
	}    
</script>
<div id="wrap3">
	<div id="header1">
    
    	<div id="logo">
        <img src="Libraries/images/logo/logo1.png" width="300" height="72" align="middle"/>
        </div>
        
    	<div id="search">
        <div class="button-search"></div>
        	<input type="text" name="filter_name" id="filter_name" value="Tìm kiếm" onclick="return find_sanpham()"/>
      	</div>
        
         <div id="welcome">
         <?php
		 	if(isset($_SESSION["email"])){
				$tv = new ThanhVien();
				$email = $_SESSION["email"];
				$hoten = $tv->getHoTen($email);
				echo "Xin chào <strong>".$hoten."</strong>.!&nbsp;<a name='dangxuat' onclick='return xacnhan();' href=".$direct."dangxuat"."><font color='#FF0000'><strong>Đăng xuất</strong></font></a>";
			}else{
				echo "<a href=".$direct."dangnhapthanhvien.html"."><font color='#FF0000'><strong>ĐĂNG NHẬP</strong></font></a>";
			}
		 ?>
        	
      	</div>
        
        <div class="links">
            <a href="<?php echo $direct."trangchu.html" ?>"><strong>Trang chủ</strong></a>
            <a href="<?php echo $direct."dangkythanhvien.html" ?>"><strong>Đăng ký</strong></a>
            <!--<a href="<?php echo $direct."dangnhapthanhvien.html" ?>"><strong>Đăng nhập</strong></a>-->
            <a href="<?php echo $direct."thongtinthanhvien.html" ?>"><strong>Tài khoản</strong></a>
            <a href="<?php echo $direct."giohang.html" ?>"><strong id="cart">
				<?php 
					if(isset($_SESSION["cart"]))
                		echo "Giỏ hàng(".count($_SESSION["cart"]).")";
					else
						echo "Giỏ hàng(0)"; 
                ?>
            </strong></a>
            <a href="<?php echo $direct."gioithieu.html" ?>"><strong>Giới thiệu</strong></a>
            <a href="<?php echo $direct."tintuc.html" ?>"><strong>Tin tức</strong></a>
            <a href="<?php echo $direct."lienhe.html" ?>"><strong>Liên hệ</strong></a>
            <a href="<?php echo $direct."tuyendung.html" ?>"><strong>Tuyển dụng</strong></a>
      	</div>
      
    </div>
</div>
  
<!--Begin slide images-->
<div id="wrap3">
    <div class="main-slider-content" style="width:900px; height:230px;">
    <img src="Libraries/images/quangcao/htc_preoeder2.png" width="950" height="220" />
</div>

<!--End slide images-->