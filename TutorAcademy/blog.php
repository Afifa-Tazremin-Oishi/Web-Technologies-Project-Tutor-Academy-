<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="style.css">
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
    <h1 class=" form-heading" style="text-align:center; margin-top:20px">latest Blog Coming Soon!</h1>

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
        <?php include 'footer.php';?>
    </div>
</body>

</html>