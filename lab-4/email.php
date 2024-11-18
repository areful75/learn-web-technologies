<?php 

    if(isset($_GET['submit'])){
        $email = $_GET['email'];
    

        if($email == null){
            echo "Null Email";
        }
        // else if(strlen (username) <2)
        // {
        //     echo "Input less than 2 words"
        // }
        // elseif(ctype_alpha())
        

    
    }else{
        
        header('location: dob.html');
    }


?>