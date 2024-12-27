<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }

    
    $user = getUser($_REQUEST['id']);
    $_SESSION['update_id'] = $_REQUEST['id'];
?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
        <h2>Edit User</h2>
        <form method="post" action="../controller/update.php" enctype=""> 
            Name: <input type="text" name="username" value="<?=$user['username']?>" /> <br>
            password: <input type="password" name="password" value="<?=$user['password']?>" /><br>
            Email: <input type="email" name="email" value="<?=$user['email']?>" /><br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>