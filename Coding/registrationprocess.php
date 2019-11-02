<?php
include_once("./start.php");
include"includes/dbconnect.php";


$con = $_GLOBALS['conn'];
function checkEmailExist($email){
    global $con;
    $sql = "SELECT * FROM users WHERE user_email='".$email."'";
    $data = mysqli_query($con, $sql);
    
    if($data->num_rows){
        return true;
    }else{
        return false;
    }
}
    if(checkEmailExist($_POST["email"])){
        $_SESSION["failed"] = "Email already exist. Please try another email for registration.";
        header("Location: index.php");
        exit();
    }
    $email = $_POST["email"];
    $name = $_POST ["name"];
    $phone = $_POST["phone"];
    $password = md5($_POST["password"]);
    

    
       $sql="insert into users (user_name, user_phone, user_email, user_pass)
       values('$name', '$phone','$email','$password')";
         if(mysqli_query($con,$sql)){
             $_SESSION["success"] = "Registration successful. ";
         }else{
             $_SESSIOn["failed"] = "Registration failed.";
         }
 
    
    header("Location: bookCourses.php");

?>