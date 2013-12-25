	
<div class="clear"></div> <!-- End .clear -->
	<div class="content-box"><!-- Start Content Box -->
		<div class="content-box-header">
            <h3>Quản lý danh mục</h3>
            <ul class="content-box-tabs">
            	<li><a href="#tab2">Cập nhật danh mục</a></li>
                <li><a href="#tab1" class="default-tab">Quản lý danh mục</a></li> 
            </ul>       
            <div class="clear"></div>
		</div> <!-- End .content-box-header -->
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab1"> 
                <table>	
                    <thead>
                        <tr>
                           <th><input class="check-all" type="checkbox" /></th>
                           <th>Danh mục chính</th>
                           <th></th>
                           <th>Danh mục con</th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th>Hành động</th>
                        </tr>
                        
                    </thead>
                    <tbody>	
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Thương hiệu</td>
                            <td></td>
                            <td>Nokia</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <!-- Icons -->
                                 <a href="#" title="Edit"><img src="../resources/images/icons/pencil_48.png" alt="Edit" /></a>
                                 <a href="#" title="Delete"><img src="/resources/images/icons/cross.png" alt="Delete" /></a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Thương hiệu</td>
                            <td></td>
                            <td>Apple</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <!-- Icons -->
                                 <a href="#" title="Edit"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                                 <a href="#" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Hệ điều hành</td>
                            <td></td>
                            <td>Android</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <!-- Icons -->
                                 <a href="#" title="Edit"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                                 <a href="#" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Hệ điều hành</td>
                            <td></td>
                            <td>Apple iOS</td>
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
                <form action="category.php" method="post">
                    <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                        <p>
                            <label>Danh mục chính</label>              
                            <select name="dropdown" class="small-input">
                                <option value="option1">Thương hiệu</option>
                                <option value="option2">Hệ điều hành</option>
                            </select> 
                        </p>
                        <p>
                            <label>Tên danh mục con</label>
                                <input class="text-input small-input" type="text" id="small-input" name="small-input" /> 
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
