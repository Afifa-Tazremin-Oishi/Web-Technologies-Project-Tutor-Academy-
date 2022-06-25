<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>

    <h2 class="text-center mt-3 fw-bold form-heading">CONTACT US</h2>
    <div class="container my-5">
        <div class=" mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-info p-4">
                        <form class="">
                            <fieldset>
                                <legend>
                                    <h3 class="form-heading">Message Us!</h3>
                                </legend>
                                <table>
                                    <tr>
                                        <td>Name : </td>
                                        <td><input placeholder="Name" type="text" name="userName">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email : </td>
                                        <td><input placeholder="Email" type="text" name="email">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td> <input placeholder="Phone" type="password" name="pass">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Message:</td>
                                        <td>
                                            <textarea id="w3review" name="w3review" rows="4" cols="30">

                                            </textarea>
                                        </td>
                                    </tr <tr>
                                    <td><br>
                                    </td>
                                    </tr>
                                    <td>
                                        <input class="btn btn-sm btn-warning px-4" type="submit" name="submit"
                                            value="Send Message">
                                    </td>

                                </table>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <div class="col-md-6 p-4">
                    <h3 class=" form-heading ">Lets Get in touch</h3>
                    <div class="mt-5 mx-5 px-5 text-danger">
                        <div class="mt-5">
                            <div class="my-2">
                                <a href="https://www.facebook.com/kbutsho" target="_blank"><i
                                        class="fab fa-facebook h4">Facebook</i></a>
                            </div>
                            <div class="my-2">
                                <a href="https://www.linkedin.com/in/kbutsho/" target="_blank"> <i
                                        class="fab fa-linkedin h4">LinkedIn</i></a>
                            </div>
                            <div class="my-2">
                                <a href="https://www.github.com/Kbutsho" target="_blank"> <i
                                        class="fab h4 fa-github-square">GitHub</i></a>
                            </div>
                        </div>
                        <h5 class="mt-5">Bashundhara R/A <br>
                            Dhaka,Bangladesh</h5>
                        <a href="" class="btn btn-danger btn-sm">+8801749555864</a>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>