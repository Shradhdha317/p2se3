<?php

	function get_price($product)
	{
		$host = "tcp:localhost17.database.windows.net,1433";
		$user = "patels18@localhost17";
		$pwd  = "Cloudif9bre";
		$db   = "patels18_db";
	    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
	    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = ("SELECT price FROM products WHERE product = '$product'");
		$stmt = $conn->query("$sql");
		$row = $stmt->fetch();
		$price = $row["price"];
		$conn = NULL;
	 	return $price;	
		
	}
	
	function get_designer($product)
	{
		$host = "tcp:localhost17.database.windows.net,1433";
		$user = "patels18@localhost17";
		$pwd  = "Cloudif9bre";
		$db   = "patels18_db";
	    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
	    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = ("SELECT designer FROM products WHERE product = '$product'");
		$stmt = $conn->query("$sql");
		$row = $stmt->fetch();
		$designer = $row["designer"];
		$conn = NULL;
	 	return $designer;	
		
	}


?>

