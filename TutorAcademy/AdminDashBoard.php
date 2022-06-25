<?php
// 	if(isset($_POST['uploadBlog'])){
// 	$image_name = $_FILES['image']['name'];
// 	$image_type = $_FILES['image']['type'];
// 	$image_size = $_FILES['image']['size'];
// 	$image_tmp_name= $_FILES['image']['tmp_name'];
// 	$desc = $_POST['desc'];
		

// 	move_uploaded_file($image_tmp_name,"uploadFiles/$image_name");
// 	echo "<img src='uploadFiles/$image_name' width='400' height='250'><br>$desc";			
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        font-weight: bold;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: auto;
    }
    </style>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>
    <div class="container">
        <fieldset>
            <legend style="text-align:center;">
                <h1>Admin DashBoard</h1>
            </legend>
            <div style="font-size:20px; text-align:center; font-weight:bold; margin-top: 30px;">
                <?php
                    session_start();
                    echo "Welcome " . $_SESSION['userName'];
                    echo '<br>';
                    echo '<a href="login.php">Logout</a>';
                ?>
            </div>
        </fieldset>
        <div class="text-center mt-4">
            <h5>Upload Profile Photo</h5>
            <?php
                if(isset($_POST['submit'])){
                    $file = $_FILES['file'];

                    $fileName = $_FILES['file']['name'];
                    $fileTmpName = $_FILES['file']['tmp_name'];
                    $fileSize = $_FILES['file']['size'];
                    $fileError = $_FILES['file']['error'];
                    $fileType = $_FILES['file']['type'];
                    $desc = $_POST['desc'];

                    $fileExt = explode('.', $fileName);
                    $fileActualExt = strtolower(end($fileExt));

                    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

                    if(in_array($fileActualExt, $allowed)){
                        if($fileError === 0){
                            if($fileSize< 10000000){
                                $fileNameNew = uniqid('', true).".".$fileActualExt;
                                $fileDestination = 'uploadFiles/' .$fileNameNew;
                            
                                if( move_uploaded_file($fileTmpName, $fileDestination)){
                                    
                                    echo "<img src='$fileDestination' width='150' height='150' style='border-radius: 70%;'><br>$desc";
                                    echo '<script>alert("Upload SuccessFully!")</script>';
                                }
                            } else{
                                echo "Your file is too Big!";
                            }
                        }else {
                            echo "There was an error uploading this file!";
                        }
                    }else{
                        echo "You cannot upload files of this type";
                    }
                }
            ?>
        </div>
        <div class="mx-auto w-50 p-4 bg-info">
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="">Choose Photo</label></td>
                        <td><input class="my-2" type="file" name="file" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="">Nickname</label></td>
                        <td><input placeholder="Optional" class="my-2" type="text" name="desc"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">Upload</button> </td>
                    </tr>
                </table>
            </form>
        </div>
        <h5 class="text-danger text-center my-5">Others Functionality Coming Soon!</h5>
    </div>
    <!-- Blog -->
    <!-- <form action="AdminDashBoard.php" method="post" enctype="multipart/form-data">
            Select Image:<input type="file" name="image"><br /><br />
            Description:<input type="text" name="desc"><br /><br />
            <input type="submit" name="uploadBlog" value="Upload Now">
	    </form> -->

    <div class="menu">
        <?php include 'footer.php';?>
    </div>
</body>

</html>