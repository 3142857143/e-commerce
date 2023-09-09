<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email2 = $_POST['email'];
		$password = $_POST['password'];
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db_name = "e-commerce";
		$conn = new mysqli($host, $user, $pass, $db_name);
		if($conn -> connect_error){
			echo "error";
		}
		if(isset($_SESSION['error'])){
			unset($_SESSION['error']);
		}
		$stmt = new mysqli_stmt($conn, "SELECT * FROM buyer_account");
		if($stmt){
			$stmt->execute();
			$result = $stmt->get_result();
			while($row = $result->fetch_assoc()){
				$email1 = $row['email'];
				if($email1 == $email2){
					$_SESSION['error'] = "account already exist";
				}
			}
		}
		if(!isset($_SESSION['error'])){

			$query = "INSERT INTO buyer_account(email, password) VALUES ('$email2', '$password')";
			if($conn->query($query) === TRUE){
				header("Location: buyer_login.php");
				exit();
			}
			else {
				$_SESSION['error'] = "failed";
			}
		}
		header("Location: buyer_signup.php");
		$conn->close();
	}
?>
