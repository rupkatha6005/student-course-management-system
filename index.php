 
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="styles/loginpage.css">
        <style>
            .body-class{
                background-color: rgb(13, 10, 55);
                background-image: url(template/log3.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
            .login-box{
                height: 95px;
                width: 50%;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
                height: 200px;
                margin-top: 180px;
                padding-bottom: 30px;
                padding-left: 20px;
                padding-right: 20px;
                background-color: rgba(0, 0, 0, 0.7);
                border-style: groove;
                border-width: 3px;
                border-color: rgba(0, 0, 0, 0.7);
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                color: white;

            }       
           
        </style>
    </head>

    <body class="body-class">

            <form class="login-box" action="authentication.php" method="POST">

                Your Email: <input type="email" name="email" placeholder="Email"><br>
                Password: <input type="password" name="password" placeholder="Password"><br>

                <div >
                    <input type="submit" name="submit" class="login-button">
                </div>

                <div class="signup">
                    Don't have an account yet?
                    <a href="signup.html" style="color: white;">
                        Create an account
                    </a>
                </div>
            </form>
    </body>
</html>


<?php
header('loginn.php');
exit();    
?>
