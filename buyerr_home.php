<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
		header("Location: buyer_login.php");
		exit();
	}
	echo "hello";
?>