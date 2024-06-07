<?php

  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<script type="text/javascript">
    function function_get_product(sellerId, productId){

    }
    function closeForm() {
			const f1 = document.getElementById('form_product_add');
			f1.style.display = 'none';
			document.getElementsByClassName('shape_1')[0].style.display = 'none';
		}
</script>
<style media="screen">
  body {
    background-color: #383535;
  }
  img {
    height: 200px;
    border-radius: 10px; /* Add rounded corners */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.1s ease-in-out, filter 0.1s ease-in-out;
  filter: brightness(90%);
}

img:hover {
  transform: scale(1.05);
  border: 4px solid #00FFB2;
  filter: brightness(100%);
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
  .alignment {
    position: relative;
    top: 20px;
    left: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 80px;
    max-width: 900px; /* Adjust the width as needed */
    margin: 0 auto; /* Center the items horizontally */
  }
  .item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  button {
    padding: 0px;
    shape-outside: none;
    background: none;
    outline: none;
    border: none;
    background-color: none;
    color: black;
    text-decoration: none;
  }
  #for_image {
    display: none;
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
  #for_name {
    display: none;
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
        #for_experiment {
          display: none;
        }
</style>
  <body>
<script type="text/javascript">
  function function_1(sellerId){

    if(sellerId == 1){
      const newone = document.getElementById('for_image');
      newone.style.display = 'flex';
      document.getElementsByClassName('shape_1')[0].style.display = 'block';
      document.getElementById('sid_name').value = sellerId;
    }
    if(sellerId == '2'){
      const newone = document.getElementById('for_name');
      newone.style.display = 'flex';
      document.getElementsByClassName('shape_1')[0].style.display = 'block';

    }
    if(sellerId == '3'){
      const newone = document.getElementById('for_name');
      newone.style.display = 'flex';
      document.getElementsByClassName('shape_1')[0].style.display = 'block';

    }

  }
  function function_2(sellerId, productId){
    const f1 = document.getElementById('for_experiment');
            f1.style.display = 'none'; // Or use 'inline-block'

            // Set the hidden input values
            document.getElementById('findone').value = sellerId;
            document.getElementById('findtwo').value = productId;
            document.getElementById('buttonnitrogen').click();
  }
  function closeForm() {
    const f1 = document.getElementById('for_name');
    const f2 = document.getElementById('for_image');
    const f3 = document.getElementById('for_price');
    if(f1.style.display == 'flex'){
      f1.style.display = 'none';
    }
    else if (f2.style.display == 'flex') {
      f2.style.display = 'none';
    }
    else {
      f3.style.display = 'none';
    }
    document.getElementsByClassName('shape_1')[0].style.display = 'none';
  }
</script>
<?php
  if(isset($_SESSION['id'])){
    $conn = new mysqli('localhost', 'root', '', 'e-commerce');
    if($conn->connect_error){
      echo "error";
      exit();
    }
    $id = $_SESSION['id'];
    $query = "SELECT * from product_table where seller_id = $id";
    $result = $conn->query($query);
    if($result){
      echo "<div class='alignment'>";
      while($row = $result->fetch_assoc()){
        $hey = 'one';
        $sellerId = $row['seller_id'];
        $ProductId = $row['product_id'];
        echo "<div class='item'>";
        echo "<button onclick='function_2($sellerId, $ProductId)'><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' ></button>";
        echo "<button onclick='function_2($sellerId, $ProductId)'><h2 id='$hey'>", $row['product_name'], " </h2></button>";
        echo "<button onclick='function_2($sellerId, $ProductId)'>", $row['price'], "</button>\n";
        echo "</div>";

      }
      echo "</div>";
    }
  }
  $_SESSION['yash'] = 0;
?>
<div class="shape_1">
</div>
<form id="for_experiment" action="get_product0.php" method="POST">
  <input type="hidden" id="findone" name="sId" value="">
  <input type="hidden" id="findtwo" name="pId" value="">
   <input type="submit" id="buttonnitrogen" value="Submit">
</form>

<form id='for_image' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
  <input type="hidden" name="val" value="2">
  <span class="close-button" onclick="closeForm()">&times;</span>
  <label for="file">Add Product Image:</label>
  <input type="file" name="image" accept="image/*" value="">
  <button type="submit" name="button">Submit</button>

</form>
<form id='for_name' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
  <input type="hidden" name="val" value="2">
  <span class="close-button" onclick="closeForm()">&times;</span>
  <label for="p_name">Product Name:</label>

  <input type="text" id="inputone" name="p_name" value="">
  <button type="submit" name="button">Submit</button>

</form>
<form id='for_name' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
  <input type="hidden" name="val" value="2">
  <span class="close-button" onclick="closeForm()">&times;</span>
  <label for="p_name">Product Name:</label>

  <input type="text" id="inputone" name="p_name" value="">
  <button type="submit" name="button">Submit</button>

</form>
</body>
</html>
