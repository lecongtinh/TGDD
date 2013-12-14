			
<div class="clear"></div> <!-- End .clear -->
			
<div class="content-box"><!-- Start Content Box -->
				
    <div class="content-box-header">
        
        <h3>Quản lý đặt hàng</h3>
        
        <ul class="content-box-tabs">
        	<li><a href="#tab4" >Xuất thống kê</a></li>
        	<li><a href="#tab3" >Thống kê hóa đơn</a></li> 
        	<li><a href="#tab2" >Lập hóa đơn</a></li> 
            <li><a href="#tab1" class="default-tab">Danh sách đặt hàng</a></li>            
            <!-- href must be unique and match the id of target div -->
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
                       <th>Mã sản phẩm</th>
                       <th>Tên sản phẩm</th>
                       <th>Tên khách hàng</th>
                       <th>Số điện thoại</th>
                       <th>Số lượng</th>
                       <th>Tổng tiền</th>
                       <th>Ngày đặt hàng</th>
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
                            </td>
                        </tr>
                    </tfoot>
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lumia920</td>
                        <td>Lumia 920</td>
                        <td>Lê Công Tính</td>
                        <td>01687682070</td>
                        <td>1</td>
                        <td>13.999.999 VNĐ</td>
                        <td>01/01/2013</td>
                        <td>Còn hàng</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Lập hóa đơn"><img src="../../resources/images/icons/tick_circle.png" alt="Edit"/></a>
                             <a href="#" title="Xóa"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                        </td>
                    </tr>
                </tbody>
                
            </table>
            
        </div> <!-- End #tab1 -->
        <div class="tab-content" id="tab2"> 
        <!-- This is the target div. id must match the href of this div's tab -->
       <form>
           <table align="center" width="100%">
            <tr>
                <td width="50%">
                    <p>
                        <label>Mã sản phẩm: </label>
                        <select name="dropdown" class="medium-input">
                            <option value="option1">Lumia920</option>
                            <option value="option2">GalaxyI9300</option>
                        </select> 
                    </p>
                    <p>
                        <label>Tên sản phẩm: </label>
                            <input class="text-input medium-input" type="text" id="small-input" name="small-input" disabled="disabled" />
                    </p>
                     <p>
                        <label>Só lượng: </label>
                        <input class="text-input medium-input" type="text" id="small-input" name="small-input" />
                    </p>
                </td>
                <td width="50%">
                      <p>
                        <label>Tên khách hàng: </label>
                            <input class="text-input medium-input" type="text" id="small-input" name="small-input" disabled="disabled" />
                    </p>
                    <p>
                        <label>Số điện thoại: </label>
                            <input class="text-input medium-input" type="text" id="small-input" name="small-input" disabled="disabled" />
                    </p>
                     <p>
                        <label>Địa chỉ: </label>
                        <input class="text-input medium-input" type="text" id="small-input" name="small-input" />
                    </p>                                                 
                </td>              
            </tr>
        </table>
        <br />
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="Thêm vào hóa đơn" />&nbsp;&nbsp;
            <input class="button" type="submit" value="In hóa đơn" />&nbsp;&nbsp;
            <input class="button" type="submit" value="Thêm thông tin khách hàng" />
        </p> 
         <table>	
                <thead>
                    <tr>
                       <th><input class="check-all" type="checkbox" /></th>
                       <th>Mã hóa đơn</th>
                       <th>Mã hàng</th>
                       <th>Tên hàng</th>
                       <th>Giá</th>
                       <th>Số lượng</th>
                       <th>Tổng tiền</th>
                       <th>Hành động</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>HD00000001</td>
                        <td>Lumia920</td>
                        <td><a href="#" title="title">Lumia 920</a></td>
                        <td>13.999.999 VNĐ</td>
                        <td>1</td>
                        <td>13.999.999 VNĐ</td>
                        <td>
                            <!-- Icons -->
                             <a href="#" title="Sửa"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                             <a href="#" title="Xóa"><img src="../resources/images/icons/cross.png" alt="Delete" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2"><strong>Khách hàng: <font color="#FF0000" size="7">Lê Công Tính</font></strong></td>
                        <td><strong>Thành tiền: <font color="#FF0000" size="7">13.999.999 VNĐ</font></strong> </td>
                        <td></td>
                    </tr>
                </tbody> 
            </table> 	
    </form>			
        </div> <!-- End #tab2 -->
        
        <div class="tab-content" id="tab3"> 
        <!-- This is the target div. id must match the href of this div's tab -->
       <form>
         <table>	
                <thead>
                    <tr>
                       <th><input class="check-all" type="checkbox" /></th>
                       <th>Mã hóa đơn</th>
                       <th></th>
                       <th>Số lượng mặt hàng</th>
                       <th></th>
                       <th>Tổng tiền</th>
                       <th>Hành động</th>
                    </tr>
                    
                </thead>
                 <tfoot>
                        <tr>
                            <td colspan="6">                                                               
                                <?php
									include("page.php");
								?>
                            </td>
                        </tr>
                    </tfoot>
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>HD00000001</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td>13.999.999 VNĐ</td>
                        <td>
                            <!-- Icons -->
                             <input class="button" type="submit" value="In" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody> 
            </table> 
             <p>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input class="button" type="submit" value="In thống kê" />&nbsp;&nbsp;
        </p> 	
    </form>			
        </div> <!-- End #tab3 -->
        
        <div class="tab-content" id="tab4"> 
        <!-- This is the target div. id must match the href of this div's tab -->
       <form>
           <table align="center" width="100%">
            <tr>
                <td width="50%">
                    <p>
                        <label>Mã sản phẩm: </label>
                        <select name="dropdown" class="medium-input">
                            <option value="option1">Lumia920</option>
                            <option value="option2">GalaxyI9300</option>
                             <option value="option2">Tất Cả</option>
                        </select> 
                    </p>
                    <p>
                        <label>Từ ngày:</label>
                            <input class="text-input medium-input" type="text" id="small-input" name="small-input" />(dd/mm/yyyy)
                    </p>
                     <p>
                        <label>Đến ngày:</label>
                        <input class="text-input medium-input" type="text" id="small-input" name="small-input" /> (dd/mm/yyyy)
                    </p>
                    <p>
                    	<input class="button" type="submit" value="Thống kê" />
                    </p>
                </td>
                <td width="50%">
                    <p>
                        <label>Mã hóa đơn: </label>
                        <select name="dropdown" class="medium-input">
                            <option value="option1">HD00000001</option>
                            <option value="option2">GalaxyI9300</option>
                             <option value="option2">Tất Cả</option>
                        </select> 
                    </p>
                    <p>
                        <label>Từ ngày:</label>
                            <input class="text-input medium-input" type="text" id="small-input" name="small-input" />(dd/mm/yyyy)
                    </p>
                     <p>
                        <label>Đến ngày:</label>
                        <input class="text-input medium-input" type="text" id="small-input" name="small-input" /> (dd/mm/yyyy)
                    </p>
                    <p>
                    	<input class="button" type="submit" value="Thống kê" />
                    </p>
                </td>
              </tr>
        </table>       
    </form>			
        </div> <!-- End #tab4 -->
        
    </div> <!-- End .content-box-content -->
    
</div> <!-- End .content-box -->
			
<div class="clear"></div>
