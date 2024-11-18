<?php 

    if(isset($_GET['submit'])){
        $dob = $_GET['dob'];
    

        if($dob == null){
            echo "Null username";
        }
        // else if(strlen (username) <2)
        // {
        //     echo "Input less than 2 words"
        // }
        // elseif(ctype_alpha())
        

    
    }else{
        
        header('location: gender.html');
    }


?>