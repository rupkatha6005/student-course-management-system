<?php
include 'connection.php';
session_start();
$userEmail = '';
$id = '';

if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
    $userEmail = $_SESSION['user'];
    $id = $_SESSION['user_id'];
}
$semester = 'Summer 2023';
$courseCode = 'CSE260';
$id = '2';
$scNumber = 1;


echo 'lol';

if ($result){
    echo 'lol';
    $sql4 = "UPDATE section SET Seat_status = Seat_status + 1 WHERE Course_code='$courseCode' and Number='$scNumber';";
    $result4 = mysqli_query($conn, $sql4);
}


// $sql1 = "SELECT c.prerequisite FROM courses c WHERE c.course_code='$courseCode';";
//     $result1 = mysqli_query($conn, $sql1);
//     $row1 = mysqli_fetch_array($result1);
//     //echo $row1["prerequisite"];

//     if ($row1["prerequisite"]){
//         $preq = $row1["prerequisite"];
//         // echo $preq;
//         $sql2 = "SELECT c.C_code FROM advisedcourse2 c WHERE c.C_code = '$preq';"; 
//         $result2 = mysqli_query($conn, $sql2);
//        // $row2 = mysqli_fetch_array($result2);
//         if (!$result2){
//             echo "<script>alert('You have not completed the prerequisite course yet');</script>";
//             echo "<script>window.location.href = 'advising.php';</script>";
//         }
//     }


    // $sql1 = "SELECT C_code FROM advised_course2 WHERE C_code = '$courseCode' and Semester='$semester' and st_id='$id';"; 
    // $result1 = mysqli_query($conn, $sql1);
    // if (mysqli_fetch_assoc($result1)){
    //     echo "<script>alert('You have already taken this course in this semeter');</script>";
    //    echo "<script>window.location.href = 'advising.php';</script>";
    // }else{
    //     echo 'done';
    // }

// $sql3 = "SELECT Seat_status FROM section where Course_code='$courseCode' and Number='$scNumber';";
// $result3 = mysqli_query($conn, $sql3);
// $row3 = mysqli_fetch_assoc($result3);
// echo $row3['Seat_status'];
    

Insert into Class_Schedule values 

('8.00-9.20', 'Sunday-Tuesday', 2, 'UB20504', 'CSE101'),
('11.00-12.20', 'Monday-Wednesday', 1 , 'UB80201', 'CSE110'),
('11.00-12.20', 'Monday-Wednesday', 2 , 'UB80202', 'CSE110'),
('11.00-12.20', 'Monday-Wednesday', 1, 'UB80301', 'CSE111'),
('11.00-12.20', 'Monday-Wednesday', 2, 'UB80302', 'CSE111'),
('11.00-12.20', 'Monday-Wednesday', 1, 'UB10104', 'CSE260'),
('8.00-9.20', 'Sunday-Tuesday', 2, 'UB10103', 'CSE260'),
('11.00-12.20', 'Sunday-Tuesday', 1, 'UB10103', 'CSE320');
