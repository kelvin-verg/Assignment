<?php

for($x = 255; $x>=155; $x--){

    if($x%7 == 0){
        echo $x.""."baba"."<br>";
    }elseif($x % 9 == 0){
        echo $x.""."lao"."<br>";    
    }else{
        echo $x."<br>";
    }
}


?>