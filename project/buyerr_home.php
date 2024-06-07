<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: buyer_login.php");
		exit();
	}
	echo "hello";
?>