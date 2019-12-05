<?php

function pal($string){


    if (strrev($string) == $string){
        return 1;
    }
    else{
        return 0;
    }
}
$k = "wow";
if (pal($k)){
echo "palindron";
}
else{
    echo "not palindron";
}


?>