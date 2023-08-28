<?php
  include 'connection.php';
  $email = $_POST['email'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST["pass2"];
  $id = $_POST['id'];



  if($pass1===$pass2){

    //if id and email match then retrieve data
    $sql = "SELECT * FROM student WHERE st_id = '$id' AND email='$email';";
    $result = mysqli_query($conn, $sql) or die("Error invalid input");

    if ($result){
      $row = mysqli_fetch_assoc($result);
      if ($row['st_id'] == $id){

        //insert into user table *new user account created*
        $sql1 = "INSERT INTO `user` (`email`,`password`, `id`) VALUES ('$email', '$pass1', '$id');";

        $result1 = mysqli_query($conn, $sql1) or die("Error invalid input");
        if ($result){
          echo "success";
        }
        else{
          echo "error";
        }
      }
      else{
        $sql1 = "INSERT INTO `user` (`email`,`password`, `id`) VALUES ('$email', '$pass1', '$id');";
        echo $sql;
        $result1 = mysqli_query($conn, $sql1) or die("Error invalid input");
        if ($result){
          echo "success";
        }
        else{
          echo "error";
        }
      }
    }
  } else{
    echo "<span> password doesn't match</span>";
  }

  header("Location: index.php");
?>