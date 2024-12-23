<?php
session_start();
if(!isset($_SESSION['status2']))
{
  header('location:../login.php');
}
?>

<html>
    <head></head>
    <body>
       <h1>Hello <?= $_SESSION['name']?></h1>
       <a href="logout.php">Logout</a>

    </body>
</html>