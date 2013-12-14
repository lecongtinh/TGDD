
<div class="clear"></div> <!-- End .clear -->
<div class="content-box"><!-- Start Content Box -->
	<div class="content-box-header">					
        <h3>Quản lý sản phẩm</h3>
        
        <ul class="content-box-tabs">
        	<li><a href="#tab3">Thêm thuộc tính</a></li> 
        	<li><a href="#tab2">Thêm sản phẩm</a></li> 
            <li><a href="#tab1" class="default-tab">Danh sách sản phẩm</a></li> 
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
                       <th>Mã hàng</th>
                       <th>Tên hàng</th>
                       <th>Nhà sản xuất</th>
                       <th>Giá</th>
                       <th>Tình trạng</th>
                       <th>Hành động</th>
                    </tr>
                    
                </thead>
             
                <tfoot>
                    <tr>
                        <td colspan="6">
							<?php
                                include("page.php");
                            ?>	                            
                            <div class="clear"></div>
                        </td>
                    </tr>
                </tfoot>
             
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lumia920</td>
                        <td><a href="#" title="title">Lumia 920</a></td>
                        <td>Nokia</td>
                        <td>13.999.999 VNĐ</td>
                         <td>Còn hàng</td>
                        <td>
                            <!-- Icons -->
                             <a href="#" title="Edit"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                             <a href="#" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>GalaxyI9300</td>
                        <td><a href="#" title="title">Galaxy SIII</a></td>
                        <td>SamSung</td>
                        <td>12.999.999 VNĐ</td>
                         <td>Còn hàng</td>
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
            <form action="add_product.php" method="post">
                 <table align="center" width="100%">
                    <tr>
                        <td width="65%">
                            <p>
                                <label>Mã sản phẩm: </label>
                                    <input class="text-input medium-input" type="text" id="small-input" name="small-input" />
                            </p>
                            <p>
                                <label>Tên sản phẩm: </label>
                                    <input class="text-input medium-input" type="text" id="small-input" name="small-input" />
                            </p>
                             <p>
                            	<label>Giá: </label>
                                <input class="text-input medium-input" type="text" id="small-input" name="small-input" />
                            </p>
                                                      
                            <p>
                                <label>Hình ảnh: </label>
                                <input class="text-input medium-input" type="file" id="small-input" name="small-input"/>
                            </p>
                        </td>
                        <td width="35%">
                            <p>
                            	<label>Bảo hành: </label>
                                <select name="dropdown" class="medium-input3">
                                    <option value="option1">12 Tháng</option>
                                    <option value="option2">24 Tháng</option>
                           		</select> 
                            </p>
                            <p>
                            <label>Nhà sản xuất</label>              
                            <select name="dropdown" class="medium-input3">
                                <option value="option1">Nokia</option>
                                <option value="option2">Apple</option>
                            </select> 
                            </p>                            
                            <p>
                            <label>Hệ điều hành</label>              
                            <select name="dropdown" class="medium-input3">
                                <option value="option1">Android</option>
                                <option value="option2">Apple iOS</option>
                            </select> 
                            </p>
                            <p>
                                <label>Tình trạng</label>              
                                <select name="dropdown" class="medium-input">
                                    <option value="option1">Còn hàng</option>
                                    <option value="option2">Hết hàng</option>
                                </select> 
                            </p>   
                      	</td>              
                   	</tr>
                </table>				
                <p>
                    <label>Mô tả sản phẩm</label>
                    <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
                </p>
                
                <p>
                    <input class="button" type="submit" value="Đồng ý" />
                    &nbsp;&nbsp;
                    <input class="button" type="submit" value="Thêm thuộc tính" />
                </p>  
            </fieldset>
        	<div class="clear"></div><!-- End .clear -->
        </form>				
    	</div> <!-- End #tab2 --> 
        <div class="tab-content" id="tab3"> 
            <form action="add_product.php" method="post">
                 <table align="center" width="100%">
                    <tr>
                        <td width="50%">
                            <p>
                            	<label>Mã sản phẩm: </label>
                                <select name="dropdown" class="large-input">
                                    <option value="option1">Lumia920</option>
                                    <option value="option2">GalaxyI9300</option>
                           		</select> 
                            </p> 
                             <p>
                            	<label>Kích thước: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" />
                            </p>
	                        <p>
                            	<label>Trọng lượng: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" />
                            </p>
                            <p>
                            	<label>CPU: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" />
                            </p>   
                            <p>
                            	<label>GPS: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" />
                            </p>                           
                            <p>
                                <label>Bộ nhớ: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input"/>
                            </p>
                        </td>
                        <td width="50%">
                        	<p>
                                <label>Tên sản phẩm: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input" disabled="disabled"/>
                            </p>
                           <p>
                                <label>WLAN: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input"/>
                            </p>
                           <p>
                                <label>Camera: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input"/>
                            </p>                           
                            <p>
                                <label>3G: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input"/>
                            </p>
                            <p>
                                <label>Bluetooth: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input"/>
                            </p>
                            <p>
                                <label>Phụ kiện: </label>
                                <input class="text-input large-input" type="text" id="small-input" name="small-input"/>
                            </p>  
                      	</td>              
                   	</tr>
                </table>				
                <p>
                    <input class="button" type="submit" value="Đồng ý" />&nbsp;&nbsp;
                    <input class="button" type="submit" value="Đặt lại" />
                </p>  
            </fieldset>
        	<div class="clear"></div><!-- End .clear -->
        </form>				
    	</div> <!-- End #tab3 -->       
    </div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->
<div class="clear"></div>
