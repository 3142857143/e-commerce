<!DOCTYPE html>
<html>
<style type="text/css">
	body {
		background: #383535;
	}
	h1 {
		width: 611px;
		height: 179px;
		color: #FFF;
		font-family: Alata;
		font-size: 130px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		flex-shrink: 0;
		position: absolute;
		top: 160px;
		right: 350px;
		animation: fade-in-out 3s ease-in-out;

	}
	@keyframes fade-in-out {
    0%, 70% {
        opacity: 0;
    }
    35%, 100% {
        opacity: 1;
    }
}
	#one {
		position: absolute;
		top: 430px;
		right: 700px;
		border-radius: 10px;
		background: #6B37FF;
		flex-shrink: 0;
		font-family: Alata, sans-serif;
		font-size: 40px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#one:hover {
		background: white;
	}#two {
		position: absolute;
		top: 430px;
		right: 450px;
		border-radius: 10px;
		background: #00FFB2;
		flex-shrink: 0;
		font-family: Alata, sans-serif;
		font-size: 40px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#two:hover {
		background: white;
	}
</style>
<script type="text/javascript">
	function Buyer() {
		window.location.href = "buyer_login.php"
	}
	function Seller() {
		window.location.href = "seller_login.php"
	}
</script>
<head>
	<title></title>
</head>
<body>
	<h1>
		WELCOME!
	</h1>
	<button id="one" onclick="Buyer()">Buyer</button>
	<button id="two" onclick="Seller()">Seller</button>
</body>
</html>
