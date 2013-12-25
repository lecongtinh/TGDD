
<div class="clear"></div> <!-- End .clear -->
<div class="content-box"><!-- Start Content Box -->				
    <div class="content-box-header">
        
        <h3>Quản lý Nhân Viên</h3>
        
        <ul class="content-box-tabs">
            <li><a href="#tab2">Thêm Nhân Viên</a></li>
             <li><a href="#tab1" class="default-tab">Danh sách Nhân Viên</a></li>  
            <!-- href must be unique and match the id of target div -->
        </ul>
        
        <div class="clear"></div>
        
    </div> <!-- End .content-box-header -->
				
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1"> 
        <table>	
            <thead>
                <tr>
                   <th><input class="check-all" type="checkbox" /></th>
                   <th>Tên đăng nhập</th>
                   <th>Email</th>
                   <th>Chức Vụ</th>
                   <th>Ngày tạo</th>
                   <th>Hành động</th>
                </tr>
                
            </thead>
            <tfoot>
                        <tr>
                            <td colspan="6">                                                               
                                <?php
									include("../../admin_template/views/page.php");
								?>
                            </td>
                        </tr>
                    </tfoot>
            <tbody>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>lecongtinh</td>
                    <td>lecongtinh@gmail.com</td>
                    <td>Nhân Viên</td>
                    <td>01/01/2013</td>
                    <td>
                        <!-- Icons -->
                         <a href="#" title="Edit"><img src="../../admin_template/views/resources/images/icons/pencil.png" alt="Edit" /></a>
                         <a href="#" title="Delete"><img src="../../admin_template/views/resources/images/icons/cross.png" alt="Delete" /></a>
                    </td>
                </tr>
            </tbody>
            
        </table>
        
    </div> <!-- End #tab1 -->
    
    <div class="tab-content" id="tab2">
    
        <form action="QuanLyNguoiDung.php" method="post">
            
            <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                <table>
                    <tr>
                        <td>
                        <p>
                            <label>Tên đăng nhập</label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" /> 
                        </p>
                        <p>
                            <label>Họ tên</label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" /> 
                        </p>
                        <p>
                            <label>Email</label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" /> 
                        </p>
                        </td>
                        <td>
                        <p>
                            <label>Mật khẩu</label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" /> 
                        </p>
                        <p>
                            <label>Nhập lại mật khẩu</label>
                                <input class="text-input large-input" type="password" id="small-input" name="small-input" /> 
                        </p>
                        <p>
                            <label>Chức Vụ</label>              
                            <select name="dropdown" class="large-input">
                                <option value="option1">Nhân Viên</option>
                                <option value="option2">Quản Trị</option>
                            </select> 
                        </p>
                        </td>
                    </tr>
                </table>
                <p>
                    <input class="button" type="submit" value="Đồng ý" />
                </p>
                </fieldset>
            
            <div class="clear"></div><!-- End .clear -->
            
        </form>
        
    </div> <!-- End #tab2 --> 
</div>	
</div> <!-- End .content-box -->
			
			