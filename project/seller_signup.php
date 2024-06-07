<!DOCTYPE html>
<html>
<style type="text/css">
	h1{
		position: absolute;
		top: 135px;
		right: 565px;
		color: #000;
		font-family: Inria Sans, sans-serif;
		text-decoration: underline;
		font-size: 33px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
	}
	body{
		background-color: black;

	}
	label[for='username']{
		color: #000;
		font-family: Arial;
		font-size: 20px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
	}
	label[for='email']{
		color: #000;
		font-family: Arial;
		font-size: 20px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
	}
	form{
		width: 200px;
		position: absolute;
		top: 205px;
		right: 595px;
		display: flex;
		flex-direction: column;
		gap: 10px;
	}
	input[type='username']{
		width: 362px;
		height: 42px;
		font-size: 20px;
		position:relative;
		right: 3px;
		border-radius: 15px;
		background: #D9D9D9;
	}
	input[type='email']{
		width: 362px;
		height: 42px;
		font-size: 20px;
		position:relative;
		right: 3px;
		border-radius: 15px;
		background: #D9D9D9;
	}
	label[for='password']{
		color: #000;
		font-family: Arial;
		font-size: 20px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
		position: relative;
		top: 20px;
	}
	input[type='password']{
		width: 362px;
		height: 42px;
		position:relative;
		right: 3px;
		font-size: 20px;
		border-radius: 15px;
		background: #D9D9D9;
		position: relative;
		top: 20px;
	}
	button{
		color: #000;
		font-family: Helvetica;
		font-size: 20px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		width: 110px;
		height: 36px;
		border-radius: 15px;
		background: #00FFB2;
		position: relative;
		top: 30px;
		left: 120px;
	}
	button:hover {
		color: #00FFB2;
		background: #000;
	}
	@keyframes border_animation {

	}
	div {
		animation-name: border_animation;
		animation-duration: 2s;
		animation-iteration-count: infinite;
		position: absolute;
		top: 130px;
		right: 350px;
		width: 506px;
		height: 415px;
		border-radius: 20px;
		border: 10px solid #00FFB2;
		background: #FFF;
		box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
	}
	p {
		background-color: black;
		padding: 4px;
		color: #00FFB2;
		position: absolute;
		top: 550px;
		right: 510px;
	}
	a {
		color: #00FFB2;
		background-color: black;
		padding: 3px;
		font-family: Tahoma;
	}
	a:hover {
		background-color: #00FFB2;
		color: black;
		border-radius: 5%;
	}
	#button1 {
		position: absolute;
		top: 565px;
		right: 595px;
	}
</style>
<head>
	<title></title>
</head>
<body>
	<div></div>

	<h1>
		Sign Up
	</h1>
	<form action="signup_seller.php" method="POST" id="form1">
			<label for="username">Name:</label>
			<input type="username" name="name" required>
			<label for="email">Email:</label>
			<input type="email" name="email" required>
			<label for="password">Password:</label>
			<input type="password" name="password">
			<button type="submit">Signup</button>
	</form>
	<?php
		session_start();
		if(isset($_SESSION['error'])){
			echo "<p> ",$_SESSION['error'],"<a href='seller_login.php'>Login</a></p>";
			unset($_SESSION['error']);
		}
		else{
			echo "<a href='seller_login.php' id='button1'>Login</a>";
		}
	?>

</body>
</html>
