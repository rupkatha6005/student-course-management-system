<?php 
//session_start();
$userEmail ='';
$id ='';
include 'connection.php';
   if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
    $userEmail = $_SESSION['user'];
    $id = $_SESSION['user_id'];
}
$sql="SELECT * from student WHERE st_id = $id;";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

if($userEmail){
?>



<!DOCTYPE html>
<html>
    <head>
        <style>
            .header{
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                font-size: 25px;
                display: flex;
                flex-direction: row;
                height: 50px; 
                align-items: center;
                border-style: groove;
                border-width: 4px;
                border-color: rgba(0, 0, 0, 0.5);
            }
            .logout-button{
                background-color: rgb(13, 10, 65);
                color: white;
                height: 34px;
                width: 85px ;
                cursor: pointer;
                border:none;
                font-size: 15px;
                font-weight: 600;
                margin-left: 40px;
                transition: box-shadow 0.15s;
                border-width: 4px;
                border-style: groove;
                border-color: rgb(13, 10, 65);
                margin-right: 5px;
            }
            
            .logout-button:hover{
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            }


            .site-name{
                flex: 1;
                font-size: 25px; 
            }

            .std-name{
                width: 100px;
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <div class="site-name">
                Student Course Management System
            </div>
            <div class="std-name">
                <?php echo $row['name']?>
            </div>
            <div >
                <a href="index.php">
                    <button class="logout-button">
                    Log out
                    </button>
                </a>
            </div>


        </div>
    </body>
</html>

<?php }else{
   // header('location: index.php');
}?>