<?php 

    if(isset($_GET['submit'])){
        $degree = $_GET['degree'];
    

        if($degree == null){
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