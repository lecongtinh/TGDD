<?php
	session_start();
	$check = "0";
	if (isset($_SESSION['cart'])) 
	{
		for($i=0;$i<count($_SESSION['cart']);$i++)
		{	
			if ($_SESSION['cart'][$i]["idsp"] == $_POST['idsp']) 
			$check = "1"; 
		}
		//chua co thi them vao gio hang
		if ($check != "1") 
		{
			$j = count($_SESSION['cart']);
			$_SESSION['cart'][$j]["idsp"] = $_POST['idsp'];
			echo "Giỏ hàng(".count($_SESSION["cart"]).")";
		}else
			echo "Giỏ hàng(".count($_SESSION["cart"]).")";
	}else{
		//truong hop dau tien .
		$_SESSION['cart'][0]["idsp"] = $_POST['idsp'];
		echo "Giỏ hàng(".count($_SESSION["cart"]).")";
	}
?>