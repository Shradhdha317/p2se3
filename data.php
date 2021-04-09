<?php

function get_price($product)
{
        
	try {
    	$conn = new PDO("sqlsrv:server = tcp:localhost17.database.windows.net,1433; Database = patels18_db", "patels18", "Cloudif9bre");
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
    	print("Error connecting to SQL Server.");
    	die(print_r($e));
	}

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
        
       
	try {
    	$conn = new PDO("sqlsrv:server = tcp:localhost17.database.windows.net,1433; Database = patels18_db", "patels18", "Cloudif9bre");
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
    	print("Error connecting to SQL Server.");
    	die(print_r($e));
	}

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

