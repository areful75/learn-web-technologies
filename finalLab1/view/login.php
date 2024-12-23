<?php
session_start();
if(!isset($_SESSION['status']))
{
  header('location: signup.html');
}
?>



<html>
    <head>

    </head>
    <body>
        
      <form action="logincheek.php" method="post">
        Name: <input type="text" name="lname" id=""> <br>
        Password: <input type="password" name="lpass" id=""> <br>
        <input type="submit" value="Submit" name="submit">
      </form>
    </body>
</html>