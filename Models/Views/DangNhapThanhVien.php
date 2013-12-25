<script>
	function check_input(){
		var email = document.dangnhaptv.email.value;
		var matkhau = document.dangnhaptv.matkhau.value;
		
		if(email == ""){
			document.getElementById("tbemail").innerHTML = " (*) Vui lòng nhập email";
			document.dangnhaptv.email.focus();
			return false;
		}else if(matkhau == ""){
			document.getElementById("tbmk").innerHTML = " (*) Vui lòng nhập mật khẩu";
			document.dangnhaptv.matkhau.focus();
			return false;
		}esle
			return true;
	}
	function validation(){
		var email = document.dangnhaptv.email.value;
		var matkhau = document.dangnhaptv.matkhau.value;
		
		if(email != ""){
			document.getElementById("tbemail").innerHTML = "";
		}else if(matkhau != ""){
			document.getElementById("tbmk").innerHTML = "";
		}
	}
</script>
<div class="wrap3" id="cotphai">
    <div class="benphai">
    <div class="box1">
    <div class="box-heading1">Đăng nhập</div>
        <form name="dangnhaptv" action="<?php echo "index.php?option=dangnhapthanhvien"; ?>" onsubmit="return check_input()" method="post">
            <table width="700" height="100" border="0" cellpadding="10" cellspacing="20" class="TableSanPham">
                <tr>
                    <td width="141" align="right">
                        <p><label>Email đăng nhập:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="text" id="email" name="email" onchange="return validattion();"/><font color="#FF0000" id="tbemail"></font></label>
                        </p>
                    </td>
                </tr>
                <tr>
                   <td width="141" align="right">
                        <p><label>Mật khẩu:	  </label></p>
                    </td>
                    <td align="left">
                         <p>
                            <label><input class="text-input medium-input" type="password" id="matkhau" name="matkhau" onchange="return validattion();"/><font color="#FF0000" id="tbmk"></font></label>
                        </p>
                    </td>
                </tr> 
                <tr>
                    <td width="141" align="right">
                    </td>
                    <td align="left" colspan="2">
                        <input class="button" type="submit" value="Đăng nhập" />&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="Quên mật khẩu?" />
                    </td>
                     
                </tr>
            </table>
        </form>
    </div>
    </div>
    </div>
</div>
