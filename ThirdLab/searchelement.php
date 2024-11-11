<?php
$array=[10,20,30,40,50];
$element=11;
for($i=0;$i<=sizeof($array);$i++)
{
    if($array[$i]=== $element)
    {
        echo "The Element is Exist";
        break;
        
    }

    else{
        echo "Element Not Exist";
        break;
    }
}
?>