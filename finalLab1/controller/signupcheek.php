<?php
session_start();
require_once('userModel.php');
if(isset($_REQUEST['submit']))
{
    $username=trim($_REQUEST['name']);
    $email=trim($_REQUEST['email']);
    $password=trim($_REQUEST['password']);

    $_SESSION['name']=$username;
    $_SESSION['password']=$password;

    
     if($username == null || empty($email) || empty($password))
     {
        echo "NUll Input...!";
     }


     else{
            
      $status = addUser($username, $password, $email);

     }

     if($status)
     {
      header('location:../login.php');
  } 
  else
  {
      header('location:../signup.html');
  }
}





?>

