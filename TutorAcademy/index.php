<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="fontAwesome/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tutor Academy</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    img {
        width: 100%;
        min-hight: 90vh;
    }

    #header {
        height: 90vh;
        background-image: url('images/banner.jpg');
        background-size: cover;
    }

    .textArea {
        padding-top: 230px;
        padding-left: 240px;
        color: red;
        font-size: 18px;
        font-style: italic;
    }
    </style>
</head>

<body>

    <div class="menu">
        <?php include 'navBar.php';?>
    </div>

    <div id="header">
        <div class="textArea">
            <h1>Welcome to <br> Tuition Academy</h1>
        </div>
    </div>
    <div class="about-area">
        <h2 class="text-center mt-5 fw-bold">ABOUT US</h2>
        <hr style="color: red; width: 15%; margin: 20px auto; height: 3px">
        <div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/banner2.jpg" style="height: 500px; width: 100%" alt="">
                    </div>
                    <div class="col-md-6">

                        <h3>Tuition Academy</h3>
                        <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dicta, animi
                            incidunt natus aspernatur iste est architecto perferendis sit, rem saepe beatae harum iusto
                            delectus quidem labore eius. Atque aspernatur natus perferendis laborum, asperiores unde aut
                            delectus assumenda tempora temporibus velit odit molestias perspiciatis beatae quo
                            exercitationem. Omnis possimus tenetur consequatur voluptatum eaque exercitationem
                            distinctio sapiente quod earum. Cum ullam quis consequuntur. Corporis perferendis dolore qui
                            magnam ad laborum quae vero explicabo, consequatur tenetur beatae voluptatem repellat
                            expedita animi nam accusantium, nulla facilis? Nostrum, culpa vero? Fugit velit ducimus
                            alias asperiores adipisci voluptatibus ad quibusdam eaque aperiam! Provident, velit
                            veritatis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti error fugiat
                            modi ipsam dignissimos laborum, harum provident quod distinctio beatae totam placeat animi,
                            molestias nemo dolor sit amet dolor sit amet inventore minus maxime! Pariatur, numquam.
                            dolor sit amet Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-area container mb-5 pb-5">
        <h2 class="text-center fw-bold">SPECIAL COURSES</h2>
        <hr class="mb-5 " style="color: red; width: 15%; margin: 20px auto; height: 3px">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 bg-info p-4 form">
                    <img src="images/s1.png" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Physics</h5>
                        <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                            neque sequi necessitatibus consequatur?</p>
                    </div>
                    <div class="card-footer">
                        <small class="">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-info p-4 form">
                    <img src="images/s3.png" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Biology</h5>
                        <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                            neque sequi necessitatibus consequatur?</p>
                    </div>
                    <div class="card-footer">
                        <small class="">Last updated 30 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-info p-4 form">
                    <img src="images/s2.png" class="card-img-top w-25 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chemistry</h5>
                        <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum minima cupiditate
                            neque sequi necessitatibus consequatur?</p>
                    </div>
                    <div class="card-footer">
                        <small class="">Last updated 10 mins ago</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="blog-area">
        <h2 class="fw-bold text-uppercase" style="text-align:center; margin-top:20px">latest Blog Coming Soon!</h2>
        <hr style="color: red; width: 15%; margin: 20px auto; height: 3px">

        <div class="container my-4">
            <h3>BLOG 1</h3>
            <?php
                $myFile = fopen("blog/blog.txt", "r") or die("Unable to open file!");
                echo fread($myFile,filesize("blog/blog.txt"));
                fclose($myFile);
            ?>
        </div>
        <div class="container my-4">
            <h3>BLOG 2</h3>
            <?php
        $myFile = fopen("blog/blog2.txt", "r") or die("Unable to open file!");
        echo fread($myFile,filesize("blog/blog.txt"));
        fclose($myFile);
            ?>
        </div>
        <div class="container my-4">
            <h3>BLOG 3</h3>
            <?php
        $myFile = fopen("blog/blog3.txt", "r") or die("Unable to open file!");
        echo fread($myFile,filesize("blog/blog.txt"));
        fclose($myFile);
            ?>
        </div>
        <div>
        </div>

        <div class="contact">
            <h2 class="text-center mt-3 fw-bold">CONTACT US</h2>
            <hr style="color: red; width: 15%; margin: 20px auto; height: 3px">
            <div class="container  my-5">
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
                            <div class="">
                                <h3 class="text-center form-heading">Lets Get in touch</h3>
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

            </div>

        </div>
        <div>
            <?php include 'footer.php';?>
        </div>
</body>

</html>