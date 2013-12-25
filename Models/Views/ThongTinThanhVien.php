<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ThanhVien.php');
	
	if(isset($_SESSION["email"])){
		$email = $_SESSION["email"];
		
		$tv = new ThanhVien();
		
		$ds = $tv->ThongTinThanhVien($email);
		$row = mysql_fetch_array($ds);
	?>
	<div class="wrap3" id="cotphai">
		<div class="benphai">
		<div class="box1">
		<div class="box-heading1">Thông tin thành viên</div>
			<form action="<?php echo "index.php?option=thongtinthanhvien"; ?>" method="post">
				<table width="700" height="300" border="0" cellpadding="10" cellspacing="20" class="TableSanPham">
					<tr>
						<td width="141" align="right">
							<p><label>Họ và tên:	  </label></p>
						</td>
						<td align="left">
							 <p>
								<label><input class="text-input medium-input" type="text" id="hoten" name="hoten" onchange="return validation();" value="<?php echo $row["HOTEN"]; ?>"/><font color="#FF0000" id="tbht"></font></label>
							</p>
						</td>
					</tr>
					<tr>
						<td width="141" align="right">
							<p><label>Email:	  </label></p>
						</td>
						<td align="left">
							 <p>
								<label><input class="text-input medium-input" type="text" id="email" name="email" onchange="return validation();" value="<?php echo $row["EMAIL"]; ?>" readonly="true" /><font color="#FF0000" id="tbemail"></font></label>
							</p>
						</td>
					</tr>
					<tr>
						<td width="141" align="right">
							<p><label>Mật khẩu mới:	  </label></p>
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
								<label><input class="text-input medium-input" type="text" id="sdt" name="sdt" onchange="return validation();" value="<?php echo $row["SDT"]; ?>"/><font color="#FF0000" id="tbsdt"></font></label>
							</p>
						</td>
					</tr>
					<tr>
						<td width="141" align="right">
							<p><label>Địa chỉ:	  </label></p>
						</td>
						<td align="left">
							 <p>
								<label><input class="text-input medium-input" type="text" id="diachi" name="diachi" onchange="return validation();" value="<?php echo $row["DIACHI"]; ?>"/><font color="#FF0000" id="tbdc"></font></label>
							</p>
						</td>
					</tr>                   
					<tr>
						<td width="141" align="right">
						</td>
						<td align="left">
							<label><input class="button" type="submit" value="Cập nhật" />&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="Làm lại" /></label>
						</td>                    
					</tr>
				</table>
			</form>
		</div>
		</div>
		</div>
	</div>
<?php
	}else{
?>
		<div class="wrap3">
            <div class="benphai">
                <div class="box1">
                    <div class="box-heading1">Thông tin thành viên</div>
                        Bạn chưa đăng nhập.
                    </div>
                </div>
            </div>
		</div>
<?php	
	}
?>
