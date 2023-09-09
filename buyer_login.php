<!DOCTYPE html>
<html>
<style type="text/css">
	h1{
		position: absolute;
		top: 160px;
		right: 580px;
		color: #000;
		font-family: Inria Sans;
		font-size: 33px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
	}
	body{
		background-color: black;

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
		top: 250px;
		right: 595px;
		display: flex;
		flex-direction: column;
		gap: 10px;
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
		background: #7000FF;
		position: relative;
		top: 50px;
		left: 120px;
	}
	button:hover {
		color: #7000FF;
		background: #000;
	}
	div {
		position: absolute;
		top: 150px;
		right: 350px;
		width: 506px;
		height: 395px;
		border-radius: 20px;
		border: 10px solid #7000FF;
		background: #FFF;
		box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
	}
	p {
		background-color: black;
		padding: 4px;
		color: #7000FF;
		position: absolute;
		top: 510px;
		right: 510px;
	}
	a {
		color: #7000FF;
		background-color: black;
		padding: 3px;
		font-family: Tahoma;
	}
	a:hover {
		background-color: #7000FF;
		color: black;
		border-radius: 5%;
	}
	#button1 {
		position: absolute;
		top: 565px;
		right: 590px;
	}
</style>
<head>
	<title></title>
</head>
<body>
	<div></div>

	<h1>
		Login
	</h1>
	<form action="login_buyer.php" method="POST" id="form1">
		
			<label for="email">Email:</label>
			<input type="email" name="email" required>
			<label for="password">Password:</label>
			<input type="password" name="password">
			<button type="submit">Login</button>
	</form>
	<?php
		session_start();
		if(isset($_SESSION['error'])){
			echo "<p> Invalid Email or Password!<a href='buyer_signup.php'>Signup</a></p>";
			unset($_SESSION['error']);
		}
		else{
			echo "<a href='buyer_signup.php' id='button1'>Signup</a>";
		}
	?>
	
</body>
</html>