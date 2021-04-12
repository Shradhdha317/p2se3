		
<?php

function get_price($product)
{
        
	$servername = "patels18.mysql.database.azure.com";
	$username = "patels18@patels18";
	$password = "Krishna@0115";
	$dbname = "patels18_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL); 
        
        if ($conn->connect_error) 
	{
            die("Connection failed: " .$conn->connect_error);
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
        
	$servername = "patels18.mysql.database.azure.com";
	$username = "patels18@patels18";
	$password = "Krishna@0115";
	$dbname = "patels18_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL); 
        
        if ($conn->connect_error) 
	{
            die("Connection failed: " .$conn->connect_error);
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

