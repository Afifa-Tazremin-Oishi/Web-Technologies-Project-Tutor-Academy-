<?php 
$userNameErr = $emailErr = $genderErr = $passErr = "";
$userName = $email = $gender  = $pass ="";

if (empty($_POST["userName"])) {
    $userNameErr = "UserName is required";
}
else {
   $userName = test_input($_POST["userName"]);
   if (!preg_match("/^[a-zA-Z-.' ]*$/",$userName)) {
    $userNameErr = "Only letters white space, period & dash allowed";
  }    
}
   if (empty($_POST["email"])) {
      $emailErr = "Email is required";
   }else {
      $email = test_input($_POST["email"]);
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format"; 
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

   if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
   }else {
      $gender = test_input($_POST["gender"]);
   }
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
if(empty($userNameErr) && empty($passErr) && empty($emailErr) && empty($genderErr) ){
    include('TutorDashBoard.php');
}else{
    include('tutorRegistration.php');
}
?>