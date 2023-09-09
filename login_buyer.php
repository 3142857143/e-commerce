<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["email"];
		$password_account = $_POST["password"];
		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "e-commerce";
		$conn = new mysqli($host, $username, $password, $db_name);
		if($conn ->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}
		$query = "SELECT * FROM buyer_account";
		$stmt = new mysqli_stmt($conn, $query);
		if($stmt){
			$stmt->execute();
			$result = $stmt->get_result();
			while($row = $result->fetch_assoc()){
				if($email == $row['email']){
					if($password_account == $row['password']){
						$_SESSION['email'] = $email;
						header("Location: buyerr_home.php");
						exit;
					}
				}
			}
			$_SESSION['error'] = "Invalid email or password!";
			$stmt->close();
			$conn->close();
			header("Location: buyer_login.php");
			exit;
		}
	}
?>