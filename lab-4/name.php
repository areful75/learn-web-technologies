<?php 

    if(isset($_GET['submit'])){
        $username = $_GET['username'];
    

        if($username == null){
            echo "Null username";
        }

        // elseif (strlen($username) <2)
        // {
        //     echo "Input less than 2 words"
        // }
    

    
    }else{
        
        header('location: email.html');
       //echo "valid user"
    }


?>




