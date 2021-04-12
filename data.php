<?php

	function get_price($product)
	{
		$conn=mysqli_init(); 
	mysqli_ssl_set($conn, NULL, NULL, "C:/Users/shrad/Desktop/Github for cloud management/DigiCertGlobalRootG2.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "patels18.mysql.database.azure.com", "patels18@patels18", "Krishna@0115", "patels18_db", 3306);

		
		$sql = ("SELECT price FROM products WHERE product = '$product'");
		$stmt = $conn->query("$sql");
		$row = $stmt->fetch();
		$price = $row["price"];
		$conn = NULL;
	 	return $price;	
		
	}
	
	function get_designer($product)
	{
		$conn=mysqli_init(); 
	mysqli_ssl_set($conn, NULL, NULL, "C:/Users/shrad/Desktop/Github for cloud management/DigiCertGlobalRootG2.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "patels18.mysql.database.azure.com", "patels18@patels18", "Krishna@0115", "patels18_db", 3306);

		$sql = ("SELECT designer FROM products WHERE product = '$product'");
		$stmt = $conn->query("$sql");
		$row = $stmt->fetch();
		$designer = $row["designer"];
		$conn = NULL;
	 	return $designer;	
		
	}


?>

