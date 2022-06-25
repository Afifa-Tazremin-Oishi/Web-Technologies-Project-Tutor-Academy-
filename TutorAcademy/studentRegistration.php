<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        font-weight: bold;
    }

    ul {
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>

    <div class="menu">
        <?php include 'navBar.php';?>
    </div>
    <div class="content form">
        <form class="form-border" method="POST" action="studentRegValidation.php">
            <fieldset>
                <legend>
                    <h3 class="form-heading">Student Registration Form</h3>
                </legend>
                <table>
                    <tr>
                        <td>UserName : </td>
                        <td><input placeholder="UserName" type="text" name="userName">
                            <span class="error">*
                                <?php if(isset($userNameErr)){ ?>
                                <p class="error"><?php echo $userNameErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><input placeholder="Email" type="text" name="email">
                            <span class="error">*
                                <?php if(isset($emailErr)){ ?>
                                <p><?php echo $emailErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>PassWord:</td>
                        <td> <input placeholder="PassWord" type="password" name="pass">
                            <span class="error">*
                                <?php if(isset($passErr)){ ?>
                                <p><?php echo $passErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <span class="error">*
                                <?php if(isset($genderErr)){ ?>
                                <p><?php echo $genderErr ?></p>
                                <?php } ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <td>
                        <input class="btn btn-sm btn-warning px-4" type="submit" name="submit" value="Register">
                    </td>
                    <td>

                    </td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Already have an Account?</td>
                        <td><a class="btn-sm btn btn-danger ms-3 px-4" href="studentLogin.php">Login</a></td>
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