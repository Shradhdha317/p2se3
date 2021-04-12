<?php

	function get_price($product)
	{
		$conn=mysqli_init(); 
	mysqli_ssl_set($conn, NULL, NULL, "C:/Users/shrad/Desktop/Github for cloud management/DigiCertGlobalRootG2.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "patels18.mysql.database.azure.com", "patels18@patels18", "Krishna@0115", "patels18_db", 3306);

		
		$sql = "SELECT price FROM products WHERE product = '$product'";

       $result = $conn->query($sql);
	

         if ($result->num_rows > 0) {
             
             while($row = $result->fetch_assoc()) {
                      $price = $row["price"];
      }
    } 
else {
                     $price = null;
        }

    $conn->close();

    return $price;
}

	function get_designer($product)
	{
		$conn=mysqli_init(); 
	mysqli_ssl_set($conn, NULL, NULL, "C:/Users/shrad/Desktop/Github for cloud management/DigiCertGlobalRootG2.crt.pem", NULL, NULL); 
	mysqli_real_connect($conn, "patels18.mysql.database.azure.com", "patels18@patels18", "Krishna@0115", "patels18_db", 3306);

		$sql1 = "SELECT designer FROM products WHERE product = '$product'";

       	$result1 = $conn->query($sql1);

         if ($result1->num_rows > 0) {
             
             while($row = $result1->fetch_assoc()) {
                      $designer = $row["designer"];
      }
    } 
else {
                     $designer = null;
        }

    $conn->close();

    return $designer;
}



?>

