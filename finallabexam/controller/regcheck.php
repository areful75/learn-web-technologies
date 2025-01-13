<?php
session_start();
require_once('../model/usermodel.php');
if(isset($_POST["signup"])) {
    $ename=$_POST['ename'];
    $contract=$_POST['contract'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if (empty($ename) || empty($contract) || empty($username) || empty($password)  ) {
        echo "all fields are required.";
        exit;
    }

    
    else{
            
        $status = addUser($ename,$contract,$username, $password);
        if($status){
            header('location: ../view/login.html');
        } else{
            header('location: ../view/registration.html');
        }
    }

}else{
    header('location: ../view/registration.html');


   
}
?>
