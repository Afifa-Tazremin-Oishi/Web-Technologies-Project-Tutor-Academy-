<?php
    $myUserName = "kaushik";
    $myPass = "@1234";

    if(isset($_POST['Login'])){
        $userName = $_POST['userName'];
        $pass = $_POST['pass'];
       
        if($userName == $myUserName && $pass == $myPass){
            if(isset($_POST['remember'])){
                setcookie('userName', $userName, time()+60*60*7);
                setcookie('pass', $pass, time()+60*60*7);
            }
            session_start();
            $_SESSION['userName'] = $userName;
            header("location: AdminDashBoard.php");
        }
        else{
            include('adminLogin.php');
            echo '<script>alert("Invalid Email OR PassWord!!\nHints for Checking Purpose:\nUserName: kaushik, PassWord: @1234")</script>';
        }
    }
    else{
        header("location: adminLogin.php");
    }
?>