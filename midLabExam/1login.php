<?php
session_start();
if(!isset($_SESSION['status']))
{ 
    header('location: reg.html');

}
?>

<html>
    <head>
        <title>LogIn</title>
    </head>
    <body>
        <form method="post" action="log.php">
            <fieldset>
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="uname" id=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" id=""></td>
                    </tr>
                     
                </table>
                <input type="submit" name="submit" value="Login">
            </fieldset>
        </form>
    </body>
</html>