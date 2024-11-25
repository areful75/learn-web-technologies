<?php
session_start();

if(isset($_POST['submit']))
{
  $Username=$_POST['uname'];
  $Password=$_POST['pass'];
  
  if(empty($Username) && empty($Password) )
  {
    header('location: 1login.php');

  }

  elseif($_SESSION['username']== $Username && $_SESSION['password']== $Password)
  {
      $_SESSION['flag']=true;
      header('location: home.php');


}



else{

   header('location: 1login.php');
}
 }
?>