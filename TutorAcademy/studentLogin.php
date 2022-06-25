<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>
    <div class="content form">
        <form class="form-border" method="POST" action="studentLoginValidation.php">
            <fieldset>
                <legend>
                    <h3 class="form-heading">Student Login Form</h3>
                </legend>
                <br>
                <table>
                    <tr>
                        <td><label for="userName">UserName:</label></td>
                        <td>
                            <input id="userName" name="userName" type="text">
                            <span class="error">*
                                <?php if(isset($userNameErr)){ ?>
                                <p><?php echo $userNameErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>
                            <input id="pass" name="pass" type="password">
                            <span class="error">*
                                <?php if(isset($passErr)){ ?>
                                <p><?php echo $passErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="remember" id="remember"></td>
                        <td><label for="remember">Remember Me</label></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login"></td>
                        <td><a class="text-danger" style="margin-left: 20px;" href="#">Forget Password? </a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>
<?php
     if(isset($_COOKIE['userName']) && isset($_COOKIE['pass'])){
         $userName = $_COOKIE['userName'];
         $pass = $_COOKIE['pass'];
         echo "<script>
            document.getElementById('userName').value = '$userName';
            document.getElementById('pass').value = '$pass';
         </script>";
     }

?>