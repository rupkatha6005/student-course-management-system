<?php 
session_start();
$userEmail ='';
$id ='';

   if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
    $userEmail = $_SESSION['user'];
    $id = $_SESSION['user_id'];
}

if($userEmail){
?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="styles/home.css">
            <style>
            .header-home{
                padding-bottom: 15px;
                }
            .body-class{
                background-color: rgb(13, 10, 55);
                background-image: url(template/homef.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            } 
            </style>
        </head>
        <body class="body-class">


            <div class="header-home">
            <?php include 'template/header.php'; ?>
            </div>
        
            <div class="page-box">
                <a href="studentprofile.php">
                    <button class="page-button">
                        Student Profile
                    </button>
                </a>
            </div>
            <div class="page-box">
                <a href="gradesheet.php">
                <button class="page-button">
                    Grade Sheet
                </button>
                </a>
            </div>
            <div class="page-box">
                <a href="advisedCourses.php">
                    <button class="page-button">
                        Advised Courses
                    </button>
                </a>
                
            </div>
            <div class="page-box">
                <a href="schedule.php">
                    <button class="page-button">
                        Schedule
                    </button>
                </a>
            </div>
            <div class="page-box"><a href="advising.php">
                <button class="page-button">
                    Advising
                </button></a>
            </div>
            <div class="page-box"><a href="dropping.php">
                <button class="page-button">
                    Drop Course
                </button></a>
                
            </div>
            <div class="page-box"><a href="dev.php">
            <button class="page-button">
                    Developers!
                </button>
            </a>
            </div>
           
        </body>
    </html>
 
<?php }else{
    header('location: index.php');
}?>