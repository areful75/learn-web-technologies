<?php
session_start();
if(!isset($_SESSION['flag']))
{
    header('location: 1login.php');
}
?>




<html>
    <head>
        <title>Home</title>
    </head>
    <body>
    <h1>Welcome Home! </h1> 
    <h3>Name : <?=$_SESSION['username']?></h3>
    <h3>Email :<?=$_SESSION['email']?></h3>
    <h3>Gender :<?=$_SESSION['gender']?></h3>
    <h3>Date Of Birth <?=$_SESSION['dob']?></h3>
        <a href="logout.php">Logout</a>
    </body>
</html>