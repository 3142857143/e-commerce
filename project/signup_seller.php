<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();
      if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
      }
      $name1 = $_POST['name'];
      $email1 = $_POST['email'];
      $password1 = $_POST['password'];
      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $db_name = 'e-commerce';
      $conn = new mysqli($host, $user, $pass, $db_name);
      if($conn->connect_error){
          die("error");
          exit;
      }
      echo "successful";
      $query = "SELECT * FROM seller_account ORDER BY seller_id";
      $stmt = new mysqli_stmt($conn, $query);
      #if($stmt){
#        $stmt->execute();
#        $result = $stmt->get_result();
#        if($result){
#          while($row = $result->fetch_assoc()){
#            echo $row['email'];
#          }
#        }
  #    }
      if($conn->query($query)){
        $result = $conn->query($query);
        $last_id = 0;
        if($result){
          while($row = $result->fetch_assoc()){
            $email2 = $row['email'];
            $last_id = $row['seller_id']+1;
            if($email1 == $email2){
              $_SESSION['error'] = 'account_already_exist';
            }

          }
        }
      }
      if(!isset($_SESSION['error'])){
        $query = "INSERT INTO seller_account VALUES('$email1', '$password1', '$last_id', '$name1')";
        $result = $conn->query($query);
        if($result){
          $_SESSION['id'] = $last_id;
          header('Location: seller_home.php');
          exit();
        }
        else{
          $_SESSION['error'] = "Error while inserting values";
        }
      }
      $conn->close();
      header('Location: seller_signup.php');
      exit();
  }
?>
