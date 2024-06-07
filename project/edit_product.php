<style media="screen">
body{
  background-color: black;
}
h1 {
  color: white;
}
</style>

<?php


 ?>

<?php
  session_start();
  $s_id = $_SESSION['seller_id'];
  $id = $_SESSION['product_id'];
  $conn = new mysqli('localhost', 'root', '', 'e-commerce');
  if($conn->connect_error){
    die("error");
  }
  $query = "SELECT * from product_table where seller_id='$s_id' and product_id='$id'";
  if($conn->query($query)){
    $result = $conn->query($query);
    if($row=$result->fetch_assoc()){
      $pd_name = $row['product_name'];
      $price = $row['price'];
      $used = $row['used'];
      $category = $row['category'];
      $image = $row['image'];

      echo "<h1> $pd_name </h1>";
      echo "<h1> $price </h1>";
      if($used == 1)
        echo "<h1> yes </h1>";
      else{
        echo "<h1> no </h1>";
      }
      echo "<img src='data:image\jpeg;base64, " . base64_encode($image) . "' >";
    }
  }
  $query = "UPDATE 'product_table' set  where seller_id='$s_id' and product_id='$id'"
 ?>
