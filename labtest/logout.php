<?php
session_start();
unset($_SESSION['flag']);
header('location: 1login.php');
?>