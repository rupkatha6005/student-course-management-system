<?php 
session_start();
$userEmail ='';
$id ='';
    include 'connection.php';
   if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
    $userEmail = $_SESSION['user'];
    $id = $_SESSION['user_id'];

   }
   //Update the cgpa-->
$sql1 = "UPDATE student AS s SET cgpa = ( SELECT SUM(gpa) / COUNT(*) FROM gradesheet AS g WHERE g.st_id = s.st_id );";
$result1 = mysqli_query($conn, $sql1);


//calculate credit-->
$sql2 = "SELECT count(*)*3 as credit FROM gradesheet WHERE st_id='$id';";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$sql="SELECT * from student WHERE st_id = $id;";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

   if($userEmail){
    
?>


<!DOCTYPE html>
    <html>

    <head>
        <title>Student Profile</title>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <style>
            .body-class{
                background-color: rgb(12, 10, 45);
                background-image: url(template/bg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                color: white;
            } 
            .container{
                display: flex;
                flex: 1f;
                flex-direction: column;
                justify-content: space-between;
                margin: 10px;

            }
            .content-container{
                border-style: groove;
                border-width: 5px;
                border-color: rgba(0,0,0,0.5);
                width: 100%;
                background-color: rgba(0,0,0,0.5);
                height: 60px;
                margin-top: 8px;
                font-size: 22px;
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            .title{
                padding-right: 20px;
                font-weight: 700;
                width: 180px;
            }
            .update-button{
                background-color: rgb(240,248,255);
                color: black;
                height: 50pxpx;
                width: 110px ;
                cursor: pointer;
                border:none;
                font-size: 15px;
                font-weight: 600;
                margin-top: 15px;
                margin-left: 40px;
                transition: box-shadow 0.15s;
                border-width: 5px;
                border-style: groove;
                border-color: rgb(240,248,255);

            }
            .update-button:hover{
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>

        <body class="body-class">
            <div class="container">
                <div class='content-container'>
                    <div class="title">Student Name:</div> 
                    <div><?php echo $row['name']?></div>               
                </div>
                <div class='content-container'>
                    <div class="title">Student ID:</div> 
                    <div><?php echo $row['st_id']?></div>               
                </div>
                <div class='content-container'>
                    <div class="title">Credits Completed:</div> 
                    <div><?php echo $row2['credit']?></div>               
                </div>
                <div class='content-container'>
                    <div class="title">CGPA:</div> 
                    <div><?php echo $row['CGPA']?></div>               
                </div>
                <div class='content-container'>
                    <div class="title">Phone:</div> 
                    <div><?php echo $row['Phone']?></div>               
                </div>
                <div class='content-container'>
                    <div class="title">Address:</div> 
                    <div><?php echo $row['Address']?></div>               
                </div>
            </div>

            <div><a href="update.php">
                <button class="update-button">Update Profile</button>
            </a></div>


            </div>

        
        </body>
    </html>

<?php }else{
   header('location: index.php');
}?>