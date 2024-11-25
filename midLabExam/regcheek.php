<?php
session_start();
if(isset($_POST['submit']))
{
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);
    $cpassword=trim($_POST['cpassword']);
    $gender=trim($_POST['gender']);
    $dob=trim($_POST['dob']);
    $reset=trim($_POST['reset']);
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['email']=$email;
    $_SESSION['gender']=$gender;
    $_SESSION['dob']=$dob;
   
     if(empty($username))
    {
        echo "Null Username";
    }
    else if(!ctype_alpha($username[0]))
    {
        echo "Start with a latter character";
    }
    else if(strlen($username)<2)
    {
        echo "Username must be att least two character ";
    }
    
    
    else if(empty($email))
    {
        echo "NUll Email";
    }
    

    
    else if(empty($password))
    {
        echo "NUll Password";
    }
    else if(strlen($password)<8)
    {
        echo "Password Must be at least 8 character";
    }
    else if(empty($cpassword))
    {
        echo "NUll Confirm Password";
    }
    elseif($password != $cpassword)
    {
        echo "Password & Confirm Password must be same";
    }
   
    else if(empty($gender))
    {
        echo "Null Gender";
    }
    
    else if(empty($dob))
    {
      echo "NUll Date Of birth";
    }

    else
    {
        $_SESSION['status']= true;
       
        header('location: 1login.php');
    }

}
if(isset($_POST['reset']))
{
  header('location: reg.html'); 
}

?>