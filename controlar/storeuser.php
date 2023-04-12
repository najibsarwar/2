<?php
session_start();
include_once "../inc/env.php";
//*validation rules


$name = $_REQUEST ['name'];
$email = $_REQUEST['email'];
$phone= $_REQUEST['phone'];
$password= $_REQUEST['password'];
$comfirm_password= $_REQUEST['comfirm_password'];
$errors=[];



if (empty($name)) {
    $errors['name_error']="Please Enter Your Name";
}
if(empty($email)){
    $errors['email_error']="Please Enter Your Email";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email_error']="Please Enter A Valid Email";
}
 if (strlen($phone) != 11) {
$errors['phone_error']="Please Enter A Valid Phone Number";
}
 if (empty($password)) {
    $errors['password_error']="Please Enter Your Password";
 }else if (strlen($password)<8) {
$errors['password_error']="Your Password Is Tooo Short";
 }

 if (empty($comfirm_password)) {
    $errors['c_password_error']="Please Enter Your Password Again";
}elseif ($password != $comfirm_password) {
    $errors['c_password_error']="Did Not Matched";
}
// check for errors

if(count($errors)> 0) {
  //redirect back
$_SESSION['form_errors']= $errors;
$_SESSION['old']=$_REQUEST;
  header("Location: ../signup.php");
 
}
else {
    $query = "INSERT INTO users( name, email,phone,password) VALUES ('$name','$email','$phone','$password')";
    
   $response = mysqli_query($conn,$query);
}
?> 