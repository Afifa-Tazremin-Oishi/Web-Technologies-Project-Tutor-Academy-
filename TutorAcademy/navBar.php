<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    /* body{
	        background-color: #dfe6e9;
	        font-family:Arial, Helvetica, sans-serif;
	        font-size:16px;
	        margin:0;
            font-weight: bold;
        }
        #navBar {
            background-color:coral;
            font-size: 20px;
        }
        #navBar li{
            display:inline;
            padding: 0 20px;
            cursor: pointer;
        }
        #navBar ul{
	        padding:20px 0;
	        list-style: none;
            float: right;
            color: white;
        }
        .container{
	        width:80%;
	        margin:auto;
            overflow:hidden;
        }
        a{
            text-decoration: none;
        } */
    </style>
</head>

<body>
    <?php
    //     echo '
    //     <div id="navBar">
    //         <div class="container">
    //             <ul>
    //                 <li><a href="index.php">Home</a></li>   
    //                 <li><a href="about.php">About</a></li>
    //                 <li><a href="contact.php">Contact</a></li>
    //                 <li><a href="blog.php">Blog</a></li>
    //                 <li><a href="login.php">Login</a></li>
    //             </ul>
    //         </div>
    //     </div>
        
    // ';
    ?>
    <div class="bg-info">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand text-danger h5 fw-bold">Tuition Academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link px-3 h5 text-danger fw-bold" href="index.php">Home</a>
                        <a class="nav-link px-3 h5 text-danger fw-bold" href="about.php">About</a>
                        <a class="nav-link px-3 h5 text-danger fw-bold" href="contact.php">Contact</a>
                        <a class="nav-link px-3 h5 text-danger fw-bold" href="blog.php">Blog</a>
                        <a class="nav-link px-3 h5 text-danger fw-bold" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>