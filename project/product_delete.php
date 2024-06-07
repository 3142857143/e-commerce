<style type="text/css">
	body {
    background-color: #383535;
  }
  h1 {
		color: #FFF;
		font-family: Inter, sans-serif;
		font-size: 3s0px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}
	img {
		object-position: 
	}
</style>

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(isset($_POST['delete'])){
			$conn = new mysqli("localhost", "root", "", "e-commerce");
			if($conn->connect_error){
				echo "failed";
				exit();	
			}
			$p_id = $_POST["pid"];
			$query = "DELETE FROM product_table WHERE product_id='$p_id' ";
			if($conn->query($query)){
				header("Location: delete_product.php");
			}
		}
		$conn = new mysqli("localhost", "root", "", "e-commerce");
		if($conn->connect_error){
			echo "failed";
			exit();
		}
		$p_id = $_POST["pId"];
		$query = "SELECT * FROM product_table WHERE product_id = '$p_id'";
		if($conn->query($query)){
			$result = $conn->query($query);
			if($row = $result->fetch_assoc()){

				echo "<form method='POST' action='product_delete.php'>";
				echo "<input type='hidden' name='delete' value=''></input>";
				echo "<input type='hidden' name='pid' value='$p_id'></input>";
				echo "<h1>", $row["product_name"], " </h1>";
				echo "<h1>", $row["price"], " </h1>";
				echo "<h1>", $row["used"], " </h1>";
				echo "<h1>", $row["category"], " </h1>";
				echo "<img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "'</img>";
				echo "<button type='submit'>Delete</button>";
				echo "</form>";
			}
		}
	}
?>