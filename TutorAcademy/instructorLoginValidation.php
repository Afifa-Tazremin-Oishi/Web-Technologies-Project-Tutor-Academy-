<?php 

$userNameErr = $passErr = "";
$userName = $pass ="";

if (empty($_POST["userName"])) {
    $userNameErr = "UserName is required";
}
else {
   $userName = test_input($_POST["userName"]);
   if (!preg_match("/^[a-zA-Z-.' ]*$/",$userName)) {
    $userNameErr = "Only letters white space, period & dash allowed";
  }    
}

   if (empty($_POST["pass"])) {
                $passErr = "PassWord is required";
             }
            else {
               $pass = test_input($_POST["pass"]);
                if (strlen($pass)<4) {
                $passErr = "Password must be 5 character";
               }
               else if (!preg_match("/[@,#,$,%]/",$pass)) {
                 $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
            }
     } 

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(empty($userNameErr) && empty($passErr) ){
    include('InstructorDashBoard.php');
}else{
    include('instructorLogin.php');
}

?>