<?php 

include 'connection.php';

    $address = $_POST['address'];
    $phone = $_POST['phn'];
    $id = $_POST['id'];

    $sql = "UPDATE `student` SET `address` = '$address', `phone` = '$phone' WHERE `st_id` = '$id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header('location: studentprofile.php');
    
?>