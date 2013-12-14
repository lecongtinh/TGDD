<div class="wrap3">
    <div class="benphai">
        <div class="box1">
        	<div class="box-heading1">Tin Tức</div>
			<?php 
				$dom=new DOMDocument('1.0','utf-8');//tao doi tuong dom 
				$dom->load('http://vnexpress.net/rss/tin-moi-nhat.rss')    ;//muon lay rss tu trang nao thi ban khai bao day 
				$items = $dom->getElementsByTagName("item");//lay cac element co tag name la item va gan vao bien $items 
				foreach($items as $item)//lap 
				{ 
					$titles=$item->getElementsByTagName('title');//lay cac element co tag name la title va gan vao bien $titles 
					$title=$titles->item(0);//lay ra gia tri dau tuien trong array $titles 
					$descriptions=$item->getElementsByTagName('description'); 
					$des=$descriptions->item(0); 
					 
							 
					 
					$links=$dom->getElementsByTagName('link'); 
					$link=$links->item(0); 
				
			?> 
            <table width="600" border="1"> 
  				<tr> 
    				<td style="color:#FF0000; font-weight:bold; text-decoration:none"><a href="<?php  echo $link->nodeValue ;?>" /><?php echo $title->nodeValue ?></td> 
  				</tr> 
  				<tr> 
    				<td><?php echo $des->nodeValue ?></td> 
  				</tr> 
			</table> 
 <?php
				}
?>
            </div>
        </div>
    </div>
</div>