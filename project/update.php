<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if($_POST['sId']){
			$conn = new mysqli('localhost', 'root', '', 'e-commerce');
			$product_array = [];
			if($_POST['change_id'] == 1){
				$new_name = $_POST['name'];
				$p_id = $_POST['pId'];
				$s_id = $_POST['sId'];
				$query = "UPDATE `product_table` SET `product_name`='$new_name' WHERE `product_id` = '$p_id'";
				$result = $conn->query($query);
				if($result){
					header("Location: manage_product.php");
				}
			}
			elseif($_POST['change_id'] == 2){
				$new_name = $_POST['name'];
				$p_id = $_POST['pId'];
				$s_id = $_POST['sId'];
				$query = "UPDATE `product_table` SET `price`='$new_name' WHERE `product_id` = '$p_id'";
				$result = $conn->query($query);
				if($result){
					header("Location: manage_product.php");
				}
			}
			elseif($_POST['change_id'] == 3){
				$p_id = $_POST['pId'];
				$s_id = $_POST['sId'];
				$query = "SELECT `used` FROM `product_table` WHERE `product_id` = '$p_id'";
				$result = $conn->query($query);
				while($row = $result->fetch_assoc()){
					$used = $row['used'];
				}
				if($used == 1){
					$query = "UPDATE product_table SET used=0 WHERE product_id='$p_id'";
					$result = $conn->query($query);
				}
				else{
					$query = "UPDATE product_table SET used=1 WHERE product_id='$p_id'";
					$result = $conn->query($query);
				}
				if($result){
					header("Location: manage_product.php");
				}
			}
			elseif($_POST['change_id'] == 4) {
				$new_name = $_POST['category'];
				$p_id = $_POST['pId'];
				$s_id = $_POST['sId'];
				$query = "UPDATE `product_table` SET `category`='$new_name' WHERE `product_id` = '$p_id'";
				$result = $conn->query($query);
				if($result){
					header("Location: manage_product.php");
				}
			}
			elseif($_POST['change_id'] == 5){
				if (isset($_FILES['image_1']) && $_FILES['image_1']['error'] == UPLOAD_ERR_OK) {
                $image = file_get_contents($_FILES['image_1']['tmp_name']);
                $image = $conn->real_escape_string($image);
				$p_id = $_POST['pId'];
				$s_id = $_POST['sId'];
				$query = "UPDATE `product_table` SET `image`='$image' WHERE `product_id` = '$p_id'";
				$result = $conn->query($query);
				if($result){
					header("Location: manage_product.php");
				}
			}
			}
		}
	}
?>