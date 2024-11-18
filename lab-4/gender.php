<?php 

    if(isset($_GET['submit'])){
        $gender = $_GET['gender'];
    

        if($gender == null){
            echo "Null username";
        }
        // else if(strlen (username) <2)
        // {
        //     echo "Input less than 2 words"
        // }
        // elseif(ctype_alpha())
        

    
    }else{
        
        header('location: degree.html');
    }


?>