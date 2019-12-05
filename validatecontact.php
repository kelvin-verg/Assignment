<?php

$con="+258717083809";

switch($con){

    case strlen($con) >13 || strlen($con) <13;
     

        echo "invalid";
    break;

    case strlen ($con) == 13;
        echo "valid";
break;
default:
break;

}
switch ($con){

    case substr($con,0,4) == +254 && strlen($con) ==13:    
        echo"kenya";

        echo "<br>";

       break;

       case substr($con,0,4) == +257 && strlen($con) ==13: 

        echo "<br>";

        echo"TZ";
       break;

       case substr($con,0,4) == +256 && strlen($con) ==13: 

        echo "<br>";

        echo"UGANDA";
       break;

       case substr($con,0,4) == +258 && strlen($con) ==13: 

        echo "<br>";

        echo"RWANDA";
       break;

}
?>