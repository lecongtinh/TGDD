
<div class="clear"></div> <!-- End .clear -->

<div class="content-box"><!-- Start Content Box -->
    
    <div class="content-box-header">
        
        <h3>Quản lý chung</h3>
        
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Quản lý slideshow ảnh</a></li> 
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Cập nhật hình ảnh</a></li>
        </ul>
        
        <div class="clear"></div>
        
    </div> <!-- End .content-box-header -->
    
    <div class="content-box-content">
   
        <div class="tab-content default-tab" id="tab1"> 
        <!-- This is the target div. id must match the href of this div's tab -->
            <table>	
                <thead>
                    <tr>
                       <th><input class="check-all" type="checkbox" /></th>
                       <th>Tiêu đề</th>
                       <th></th>
                       <th>Liên kết</th>
                       <th></th>
                       <th>Hình ảnh</th>
                       <th></th>
                       <th>Hành động</th>
                    </tr>
                    
                </thead>
                <tbody>	
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><input type="text" /></td>
                        <td></td>
                        <td><input type="text" /></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <!-- Icons -->
                             <a href="#" title="Edit"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                             <a href="#" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a>
                        </td>
                    </tr>
                </tbody>
                
            </table>
            
        </div> <!-- End #tab1 -->
        
        <div class="tab-content" id="tab2">
        
            <form action="slideshow.php" method="post">
                
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    
                    <p>
                        <label>Tiêu đề</label>
                            <input class="text-input small-input" type="text" id="small-input" name="small-input" /> 
                    </p>
                    <p>
                        <label>Liên kết</label>
                            <input class="text-input small-input" type="text" id="small-input" name="small-input" /> 
                    </p>
                    <p>
                        <label>Hình ảnh</label>
                            <input class="text-input small-input" type="file" id="small-input" name="small-input" /> 
                    </p>
                    <p>
                        <label>Tình trạng</label>              
                        <select name="dropdown" class="small-input">
                            <option value="option1">Bật</option>
                            <option value="option2">Tắt</option>
                        </select> 
                    </p>
                    <p>
                        <input class="button" type="submit" value="Đồng ý" />
                    </p>
                    
                </fieldset>
                
                <div class="clear"></div><!-- End .clear -->
                
            </form>
            
        </div> <!-- End #tab2 --> 
                
    </div> <!-- End .content-box-content -->
    
</div> <!-- End .content-box -->

<div class="clear"></div>
