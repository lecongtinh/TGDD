
<div class="pagination">
	<?php
		if($page > 1) { //neu can hien thi so trang
                
                $next = $start + $display;
                $prev = $start - $display;
                $current = ($start/$display)+1;
                
                //Hien thi trang Previous
                if($current !=1) {
                echo "<a href='?start=$prev&page=$page'>Previous</a>";
                }
                //Hien thi so link
                for($i=1;$i<=$page;$i++) {
                    if($current != $i) {
                    echo "<a href='?start=".($display*($i-1))."&page=$page'>$i</a>";
                } else {
                    echo "<a class='number'>$i</a>";
                }
                } //End: FOR
                
                //Hien thi trang Next
                
                if($current != $page) {
                    echo "<a href='?start=$next&page=$page'>Next</a>";
                }
                
            }//End: $page > 1 IF
	?>
</div>