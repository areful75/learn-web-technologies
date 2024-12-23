<?php
session_start();
require_once('userModel.php');
if(isset($_REQUEST['submit']))
{
    $uname=trim(($_REQUEST['lname']));
    $upa=trim(($_REQUEST['lpass']));

    if($uname == null || $upa == null)
    {
        echo "NUll value";
    }
    else{
            
        $status = login($username, $password);
    }
    if($status){
        setcookie('status', 'true', time()+3600, '/');
        $_SESSION['username'] = $username;
        header('location:home.php');
    }

    else{
        echo "invalid user!";
    }


    

    // else {
    //     echo "Please fill up ther registration form";
    // }
}

?>