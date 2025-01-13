<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'labtest');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
        
    }

    function addUser($ename, $contract,$username, $password){
        $conn = getConnection();
        $sql = "INSERT INTO users  (ename,contract,username, password)  VALUES ('$ename','$contract','$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    function updateUser($id, $username, $password){
        $con = getConnection();
        $sql = "UPDATE users SET username='$username', password='$password' where id='$id'";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }


    function deleteUser($id){
        $con = getConnection();
        $sql = "DELETE FROM users where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from users where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);

        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        
        return $users;
    }

?>