<?php

function getConnection(){
    $con = mysqli_connect('127.0.0.1', 'root', '', 'areful');
    return $con;
}

function login($username, $password){
    $con = getConnection();
    $sql = "select * from omi where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count ==1){
        return true;
    }else{
        return false;
    }
}

function addUser($username, $password, $email){
    $con = getConnection();
    $sql = "insert into omi VALUES('', '{$username}', '{$password}', '{$email}')";
    if(mysqli_query($con, $sql)){
        return true;
    } else{
        return false;
    }
}

?>
