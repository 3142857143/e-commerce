<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "e-commerce";
	$conn = new mysqli($host, $user, $pass, $db_name);
	if($conn-> connect_error){
		die("error");
		exit;
	}
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM seller_account";
	$result = $conn->query($query);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			if($row['email'] == $email){
				if($row['password'] == $password){
					session_start();
					$_SESSION['id'] = $row['seller_id'];
					header("Location: seller_home.php");
					exit;
				}
			}
		}
	}
	session_start();
	$_SESSION['error'] = "Incorect email or password";
	header("Location: seller_login.php");
?>
