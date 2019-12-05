<?php

//$e = 70;

function grade($e){


    if ($e>=70 && $e<100){

        echo "GRADE A";
    }

elseif ($e>=63 && $e <70) {
    echo "GRADE B";
   
}
elseif ($e>=51 && $e <62) {
    echo "GRADE C";
}

elseif ($e>=44 && $e <61) {
    echo "GRADE D";
}
elseif ($e>=0 && $e <43) {
    echo "FAIL BAD REFERED";
}

}
echo grade(58);

?>