<?php 

    if(isset($_GET['submit'])){
        $blood = $_GET['blood'];
    

        if($blood == null){
            echo "Null username";
        }
        // else if(strlen (username) <2)
        // {
        //     echo "Input less than 2 words"
        // }
        // elseif(ctype_alpha())
        

    
    }else{
        
        header('location: blood.html');
    }


?>