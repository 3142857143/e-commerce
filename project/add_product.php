<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $product_name = $_POST['p_name'];
      $price = $_POST['p_price'];
      $radio = $_POST["one"];
      $category = $_POST['category'];
      $image = file_get_contents($_FILES['image1']['tmp_name']); // Read image as binary data
      $id =  $_POST["seller_id"];
      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $db_name = 'e-commerce';
      $conn = new mysqli($host, $user, $pass, $db_name);
      $image = $conn->real_escape_string($image); // Escape binary data to prevent SQL injection
      if($conn->connect_error){
        die("Error");
        exit();
      }
      if($radio === 'True'){
        $radio = 1;
      }
      else{
        $radio = 0;
      }
      $query = "SELECT seller_id FROM product_table ORDER BY seller_id";
      $arrayName = array();
      $result = $conn->query($query);
      $temp = 0;
      if($result){
        while($row = $result->fetch_assoc()){
          if($row['seller_id'] == $id){
              $temp = 1;
              break;
          }
        }
        if($temp == 1){
          $query = "SELECT product_id FROM product_table where seller_id='$id' ORDER BY product_id DESC";
          $result = $conn->query($query);
          if($result){
            $row = $result->fetch_assoc();
            $p_id = $row['product_id'];
            $p_id = $p_id+1;
          }
        }
        else{
          $p_id = 1;
        }
      }
      $query = "INSERT INTO product_table(product_name, price, used, category, seller_id, image, product_id) VALUES ('$product_name', '$price', '$radio', '$category', '$id', '$image', '$p_id')";
      $result = $conn->query($query);
      if($result){
        header('Location: seller_home.php');
      }
  }
 ?>
