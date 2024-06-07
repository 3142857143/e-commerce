<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style media="screen">
	h1 {
		color: #FFF;
		font-family: Inter, sans-serif;
		font-size: 70px;
		position: absolute;
		top: 220px;
		right: 435px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#inputradio{
		width: 16px;
		height: 16px;
		position: relative;
		top: 20px;
	}
	#inputradio2{
		width: 16px;
		height: 16px;
		position: relative;
		bottom:26.5px;
		left: 120px;
	}
	input[type="file"]{
		color: black;
font-family: Inter, sans-serif;
	}
	label[for="file"] {
		color: #00FFB2;
font-family: Inter, sans-serif;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: normal;
	}
	label[for="category"] {
		position: relative;
		bottom: 25px;
		color: #00FFB2;
font-family: Inter, sans-serif;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: normal;
	}
	#radiotwo {
		position: relative;
		bottom: 47px;
		left: 141px;
		color: #00FFB2;
		font-family: Inter, sans-serif;
		font-size: 15px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#radioone {
		position: relative;
		bottom: 1px;
		left: 21px;
		color: #00FFB2;
		font-family: Inter, sans-serif;
		font-size: 15px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#form_product_add {
		size: 100px;
		color: #6B37FF;
		z-index: 9999;
		position: absolute;
		bottom:50px;
		left: 240px;
		display: none;
		flex-direction: column;
		align-items: baseline;
		gap: 5px;
		max-width: 1000px;
		margin-bottom: 20px;
		background-color: #5A5A5A;
		padding: 60px;
		align-content: center;
		align-self: center;
		padding-right: 80px;
		padding-left: 40px;
		/*padding-top: 145px;
		padding-bottom: 145px;
		*/border-radius: 30px;
		border: solid 8px white ;
		/*margin: 20px;
		margin-left: 20px;
		margin-right: 20px;
*/
	}
	select {
		background: #FFF;
		position: relative;
		top: -20px;
		width: 200px;
		height: 30px;
		border-radius: 10px;
	}
	button[type="submit"]:hover {
		border-radius: 4px;
		background: #FFF;
		color: #00FFB2;
		font-family: Inter, sans-serif;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
	}
	button[type="submit"] {
		border-radius: 4px;
		background: #00FFB2;
		width: 84px;
		height: 36px;
		color: #FFF;
		position: relative;
		top: 20px;
		font-family: Inter, sans-serif;
		font-size: 16px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
	}
	button[type="button"]:hover {
		background-color: #FFF;
		color: #00FFB2;
	}
	option {
		z-index: 1;
		color: white;
		background-color: black;
	}
	option:checked {
		size: 20px;
		background-color: black;
	}
	body {
		background: #383535;

	}
	/*div {
		display: block;
		z-index: 5000;
		width:1000px;
		height:550px;
		position: absolute;
		top: 50px;
		left: 80px;
		border-radius: 10px;
		background-color: grey;
	}*/
	label[for='p_name']{
		color: #00FFB2;
		font-family: Inter, sans-serif;
		font-size: 22px;
		position: relative;
		bottom: 10px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;

	}
	button[type="button"]{
		border-radius: 10px;
		background: #00FFB2;
		padding: 7px;
		padding-left: 11px;
		padding-right: 11px;
		color: #FFF;
		font-family: Inter, sans-serif;
		font-size: 16px;
		font-style: normal;
font-weight: 600;
line-height: normal;
		flex-shrink: 0;
		position: relative;
		top: 460px;
		left: 150px;
		margin-right: 325px;
	}
	img {
		image-resolution: from-image;
		height: 300px;
	}
	label[for='p_price']{
		color: #00FFB2;
		font-family: Inter, sans-serif;
		font-size: 22px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		position: relative;
		top: 4px;
	}
	#inputone {/*
		background-color: #6B37FF;*/
		position: relative;
		right: 04px;
		border-radius: 20px;
		background: #FFF;
		font-size: 20px;
		width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-color: none;
		size: 50px;
		width: 516px;
		height: 20px;
	}
	#addtext {
		color: #FFF;
		font-family: Inter, sans-serif;
		font-size: 24px;
		position: absolute;
		top: 400px;
		text-decoration-style: dashed;
		right: 930px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#managetext {
		color: #FFF;
		font-family: Inter, sans-serif;
		font-size: 24px;
		position: absolute;
		top: 400px;
		text-decoration-style: dashed;
		right: 500px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#deletetext {
		color: #FFF;
		font-family: Inter, sans-serif;
		font-size: 24px;
		position: absolute;
		top: 400px;
		text-decoration-style: dashed;
		right: 130px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	#inputtwo {
		border-radius: 20px;
		position: relative;
		right: 04px;
		top: 8px;
		background: #FFF;
		font-size: 20px;
		width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-color: none;
		size: 50px;
		width: 516px;
		height: 20px;
	}
	#button2 {
		position: relative;
		right: 160px;
	}
	#button3 {
		position: relative;
		right: 30px;
	}
	.shape_1 {
		background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
    color: white;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
		z-index: 5000;
		display: none;
	}
	.close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
						color: #FFF;
						padding-left: 4px;
						padding-right: 4px;
						background-color: #00FFB2;
						border-radius: 5px;
        }
</style>
<script type="text/javascript">
		function function_1(){
			const f1 = document.getElementById('form_product_add');
			f1.style.display = 'flex';
			document.getElementsByClassName('shape_1')[0].style.display = 'block';
		}
		function function_2(){
			window.location.href = "manage_product.php"
		}
		function function_3(){
			window.location.href = "delete_product.php"
		}

		function closeForm() {
			const f1 = document.getElementById('form_product_add');
			f1.style.display = 'none';
			document.getElementsByClassName('shape_1')[0].style.display = 'none';
		}
</script>
<?php
	if(!isset($_SESSION['id'])){
		header("Location: seller_login.php");
		exit();
	}
	$GLOBAL['hello'] = $_SESSION['id'];
 ?>
<body>
	<h2 id="addtext">Add New Product</h2>
	<h2 id="managetext">Manage your Products</h2>
	<h2 id="deletetext">Delete a Product</h2>
	<button id="button1" onclick="function_1()" type="button" name="button">Add</button>
	<button id="button2" onclick="function_2()" type="button" name="button">Manage</button>
	<button id="button3" onclick="function_3()" type="button" name="button">Delete</button>
	<div class="shape_1">
	</div>
	<form id="form_product_add" action="add_product.php" enctype="multipart/form-data" method="post">
			<span class="close-button" onclick="closeForm()">&times;</span>
			<label for="p_name">Product Name:</label>
			<input type="text" id="inputone" name="p_name" value="">
			<label for="p_price">Price:</label>
			<input type="number" id="inputtwo" name="p_price" value="">
			<input type="radio" id="inputradio" name="one" value="True">
			<label for="one" id="radioone">First Hand</label>
			<input type="radio" id="inputradio2" name="one" value="False">
			<label for="one" id="radiotwo">Second Hand</label>
			<label for="category">Select a Category:</label>
        <select id="category" name="category">
            <option value="appliances">Appliances</option>
            <option value="books">Books</option>
            <option value="electronics">Electronics</option>
            <option value="industrial">Industrial &amp; Scientific</option>
            <option value="pets">Pet Supplies</option>
            <option value="apps">Apps &amp; Games</option>
            <option value="cds">CDs &amp; Vinyl</option>
            <option value="garden">Garden &amp; Outdoor</option>
            <option value="kindle">Kindle</option>
            <option value="sports">Sports &amp; Outdoors</option>
            <option value="arts">Arts, Crafts, &amp; Sewing</option>
            <option value="cellphones">Cell Phones &amp; Accessories</option>
            <option value="grocery">Grocery &amp; Gourmet Food</option>
            <option value="luggage">Luggage &amp; Travel Gear</option>
            <option value="tools">Tools &amp; Home Improvement</option>
            <option value="automotive">Automotive Parts &amp; Accessories</option>
            <option value="clothing">Clothing, Shoes and Jewelry</option>
            <option value="handmade">Handmade</option>
            <option value="movies">Movies &amp; TV</option>
            <option value="toys">Toys &amp; Games</option>
            <option value="baby">Baby</option>
            <option value="collectibles">Collectibles &amp; Fine Art</option>
            <option value="health">Health, Household &amp; Baby Care</option>
            <option value="musical">Musical Instruments</option>
            <option value="video">Video Games</option>
            <option value="beauty">Beauty &amp; Personal Care</option>
            <option value="computers">Computers</option>
            <option value="home">Home &amp; Kitchen</option>
            <option value="office">Office Products</option>
        </select>
				<label for="file">Add Product Image:</label>
				<input type="file" name="image1" accept="image/*" value="">
				<input type="hidden" name="seller_id" value="<?php echo $GLOBAL['hello']; ?>">
				<button type="submit" name="button">Submit</button>

	</form>
	<h1>Hello, Seller
	<?php
			$conn = new mysqli('localhost', 'root', '', 'e-commerce');
			$id = $_SESSION['id'];
			$query = "SELECT name from seller_account WHERE seller_id = '$id'";
			$result = $conn->query($query);
			if($result){
				$row = $result->fetch_assoc();
			}
	 ?>
	</h1>
</body>
</html>
