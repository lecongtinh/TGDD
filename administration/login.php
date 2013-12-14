<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
	<script language="javascript">
	function createOject(){
		var request_type;
		var browser = navigator.appName;
		if(browser == "Microsoft Internet Explorer"){
			request_type = new ActiveXObject("Microsoft.XMLHTTP");
		}else{
			ActiveXObject("Microsoft.XMLHTTP");
		}
		return request_type;
		var http = createObject();
		var nocache = 0;
	}
	function login(){
		var user = encodeURI(document.getElementById("user").value);
		var pass = encodeURI(document.getElementById("pass").value);
		nocache = Math.random();
		
		http.open('get','login.php?user='+user+'&pass='+pass+'&nocach='+nocache);
		alert("dsfsadf");
		http.onreadystatechange = loginRely;
		http.send(null);
	}
	function loginRely(){
		if(http.readState == 4){
			var respone = http.responeText;
			if(respone == 0){
				alert("Đăng nhập thất bại!");
			}else
				window.location('http://localhost/tgdd/administration');
		}
	}
	</script>
    <title>Thế Giới Di Động Adminstration</title>
    <?php 
		include("views/template.php"); 
		session_start();
		include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Models/NhanVien.php');
		if(isset($_GET["user"]) && isset($_GET["pass"])){
			$user = $_GET["user"];
			$pass = $_GET["pass"];
			
			$nv = new NhanVien();
			
			$result = $nv->DangNhap($user, $pass);
			if($result){
				$_SESSION["user"] = $user;	
				echo "<script language=javascript> window.location = 'http://localhost/tgdd/administration'; </script>";
			}else{
				echo "<script language=javascript>
						alert('Đăng nhập thất bại');
						window.location = 'http://localhost/tgdd/administration/login.php';
					 </script>";
			}
		}
	?>
    
</head>

<body id="login">
   <div id="login-wrapper" class="png_bg">
		<div id="login-top">
            <h1>Đăng nhập Quản trị viên</h1>
            <img id="logo" src="resources/images/logo1.png" alt="Thế Giới Di Động Adminstration" />
		</div> <!-- End #logn-top -->
		<div id="login-content">
            <form action="Controllers/DangNhapNhanVien.php" method="post">					
                <p>
                    <label>Tài khoản</label>
                    <input class="text-input" type="text" id="user" name="user"/>
              	</p>
                <div class="clear"></div>
                <p>
                    <label>Mật khẩu</label>
                    <input class="text-input" type="password" id="pass" name="pass"/><br />
                </p>
               
                <div class="clear"></div>
                <p>
                    <input class="button" type="submit" name="submit" value="Đăng nhập" id="dangnhap"/>
                </p>
                
          	</form>
             
		  </div
		></div>	
</body> 
</html>
