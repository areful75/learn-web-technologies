<?php
require_once('../model/usermodel.php');
$users = getAllUser(); 
?>
<html>
<head>
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['password'] ?></td>
            <td>
                <a href="update.php?id=<?= $user['id'] ?>">Update</a> | 
                <a href="../controller/delete.php?id=<?= $user['id'] ?>" >Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="../controller/logout.php"><button>Logout</button></a>




</body>
</html>
