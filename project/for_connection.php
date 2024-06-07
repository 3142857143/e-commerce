<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "e-commerce";
	$conn = new mysqli($host, $user, $pass, $db_name);
	if($conn->connect_error){

	}
	else{
		$query = "SELECT * FROM seller_account";
		if($conn->query($query)){
			$result = $conn->query($query);
			while($row = $result->fetch_assoc()){
				echo $row['seller_id'];
			}
		}

	}
?>
