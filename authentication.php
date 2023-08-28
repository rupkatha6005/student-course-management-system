<?php

    include 'connection.php';
    session_start();


    $email = $_POST['email'];
    $password = $_POST['password'];

    //check if email match
    $sql = "SELECT * FROM user WHERE email='$email'" ;


    //make query and get result
   $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

   

   if($result) {

      $sql1 = "SELECT * FROM user WHERE email='$email'"; 
      $result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

      $row1 = mysqli_fetch_assoc($result1);
      $storedPassword = $row1['password'];
     
      //check if password matches
      $flag = false;
      if($storedPassword==$password){
        $flag = true;
      } else{
        echo "wrong password";
      }
    
      // if matches store id in session and go to home page
      if($flag){
        $_SESSION['user_id'] = $row1['id'];
        $_SESSION['user'] = $email;
        header("Location: home.php"); 
        exit();

      }else{
        echo 'invalid password'; 
      header("Location: index.php");
        exit();
      }
   
    }
  
?>