<script language="javascript">
	function check_input(){
		
		var hoten = document.dangkytv.hoten.value;
		var email = document.dangkytv.email.value;
		var matkhau = document.dangkytv.matkhau.value;
		var re_matkhau = document.dangkytv.re_matkhau.value;
		var sdt = document.dangkytv.sdt.value;
		var diachi = document.dangkytv.diachi.value;
		var dieukhoan = document.getElementById("dieukhoan").checked;
		
		var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
		
		if( hoten == "")
		{
			document.getElementById("tbht").innerHTML = "(*) Vui lòng nhập họ tên";
			document.dangkytv.hoten.focus();
			return false;
		}else if(email == ""){
			document.getElementById("tbemail").innerHTML = "(*) Vui lòng nhập email";
			document.dangkytv.email.focus();
			return false;
		}else if(reg_mail.test(email) == false){
			document.getElementById("tbemail").innerHTML = "Email không đúng định dạng";
			document.dangkytv.email.focus();
			return false;
		}else if(matkhau == ""){
			document.getElementById("tbmk").innerHTML = "(*) Vui lòng nhập mật khẩu";
			document.dangkytv.matkhau.focus();
			return false;
		}else if(re_matkhau == ""){
			document.getElementById("tbrmk").innerHTML = "(*) Vui lòng nhập mật khẩu";
			document.dangkytv.re_matkhau.focus();
			return false;
		}else if(matkhau != re_matkhau){
			document.getElementById("tbrmk").innerHTML = "(*) Mật khẩu không khớp";
			document.dangkytv.re_matkhau.focus();
			return false;
		}else if(sdt == ""){
			document.getElementById("tbsdt").innerHTML = "(*) Vui lòng nhập số điện thoại";
			document.dangkytv.sdt.focus();
			return false;
		}else if(diachi == ""){
			document.getElementById("tbdc").innerHTML = "(*) Vui lòng nhập địa chỉ";
			document.dangkytv.diachi.focus();
			return false;
		}else if(dieukhoan == false){
			alert("Bạn phải nhấn vào đồng ý với điều khoản");
			return false;
		}else
			return true;
	}
	function validation(){
		
		var hoten = document.dangkytv.hoten.value;
		var email = document.dangkytv.email.value;
		var matkhau = document.dangkytv.matkhau.value;
		var re_matkhau = document.dangkytv.re_matkhau.value;
		var sdt = document.dangkytv.sdt.value;
		var diachi = document.dangkytv.diachi.value;
		
		var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
		
		if( hoten != ""){
			document.getElementById("tbht").innerHTML = "";
		}else if(email != ""){
			document.getElementById("tbemail").innerHTML = "";
		}else if(reg_mail.test(email) == true){
			document.getElementById("tbemail").innerHTML = "";
		}else if(matkhau != ""){
			if(matkhau.length < 6)
				document.getElementById("tbmk").innerHTML = "Mật khẩu phải lớn hơn 6 ký tự";
			else
				document.getElementById("tbmk").innerHTML = "";
		}else if(re_matkhau != ""){
			document.getElementById("tbrmk").innerHTML = "";
		}else if(sdt != ""){
			document.getElementById("tbsdt").innerHTML = "";
		}else if(diachi != ""){
			document.getElementById("tbdc").innerHTML = "";
		}
	}
	function clear_input(){
		document.getElementById("tbht").innerHTML = "";
		document.getElementById("tbemail").innerHTML = "";
		document.getElementById("tbmk").innerHTML = "";
		document.getElementById("tbrmk").innerHTML = "";
		document.getElementById("tbdc").innerHTML = "";
		document.getElementById("tbsdt").innerHTML = "";		
	}
</script>
<div class="wrap3" id="cotphai">
    <div class="benphai">
    <div class="box1">
    <div class="box-heading1">Đăng ký thành viên</div>
        <form name="dangkytv" onsubmit="return check_input();" action="<?php echo "index.php?option=dangkythanhvien"; ?>" method="post" enctype="multipart/form-data">
            <table width="700" height="300" border="0" cellpadding="10" cellspacing="20" class="TableSanPham">
                <tr>
                    <td width="141" align="right">
                        <p><label>Họ và tên:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="text" id="hoten" name="hoten" onchange="return validation();"/><font color="#FF0000" id="tbht"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="141" align="right">
                        <p><label>Email:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="text" id="email" name="email" onchange="return validation();"/><font color="#FF0000" id="tbemail"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="141" align="right">
                        <p><label>Mật khẩu:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="password" id="matkhau" name="matkhau" onchange="return validation();"/><font color="#FF0000" id="tbmk"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                   <td width="141" align="right">
                        <p><label>Nhập lại mật khẩu:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="password" id="re_matkhau" name="re_matkhau" onchange="return validation();"/><font color="#FF0000" id="tbrmk"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="141" align="right">
                        <p><label>Số điện thoại:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="text" id="sdt" name="sdt" onchange="return validation();"/><font color="#FF0000" id="tbsdt"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="141" align="right">
                        <p><label>Địa chỉ:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="text" id="diachi" name="diachi" onchange="return validation();"/><font color="#FF0000" id="tbdc"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="141" align="right">
                       
                    </td>
                    <td align="left">
                            <font color="#FF0000"><strong>Chú ý: các thông tin trên phải được điền đầy đủ</strong></font><br /><br />
                            <label><input type="checkbox" id="dieukhoan" name="dieukhoan"/>  Đồng ý với <a href="#"><font color="#0000FF">điều khoản thegioididong.com</font></a></label>
                    </td>
                </tr>                    
                <tr>
                    <td width="141" align="right">
                    </td>
                    <td align="left">
                        <label><input class="button" type="submit" value="Đăng ký" />&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="Làm lại"/></label>
                    </td>                    
                </tr>
            </table>
        </form>
    </div>
    </div>
    </div>
</div>
