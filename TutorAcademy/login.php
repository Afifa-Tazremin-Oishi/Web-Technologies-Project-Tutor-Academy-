<?php 
        session_start();
        session_destroy();
        if(isset($_COOKIE['userName']) && isset($_COOKIE['pass'])){
            $userName = $_COOKIE['userName'];
            $pass = $_COOKIE['pass'];
            setcookie('userName', $userName, time()-1);
            setcookie('pass', $pass, time()-1);
        }  
        // echo '<script>alert("You Successfully Logout")</script>';
        // echo "You Successfully Logout";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    body {
        font-weight: bold;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .loginSection li {
        display: inline;
        padding: 0 20px;
        cursor: pointer;
    }

    .loginSection ul {
        padding: 20px 0;
        list-style: none;
    }

    .text {
        color: black;
        margin-top: 60px;
        font-weight: bold;
        text-align: center;
    }

    .content {
        width: 50%;
        margin: 50px auto;
        overflow: hidden;
        border: 3px solid red;
        padding: 10px;
        border-radius: 15px;
        box-shadow: 5px 5px 10px rgb(110, 93, 93);
    }
    </style>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>
    <h1 style="text-align:center; margin-top:20px">Login Page</h1>
    <div class="loginSection">
        <div class="content">
            <div class="text">
                <div class="">
                    <h3>Who You Are?</h3>
                    <ul>
                        <li><a href="adminLogin.php">Admin</a></li>
                        <li><a href="tutorRegistration.php">Tutor</a></li>
                        <li><a href="instructorRegistration.php">Instructor</a></li>
                        <li><a href="studentRegistration.php">Student</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>