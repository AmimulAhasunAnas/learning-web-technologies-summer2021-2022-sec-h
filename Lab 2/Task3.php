<?php

function check($number){
    if($number % 2 == 0){
        echo $number." Even";
    }
    else{
        echo $number." Odd";
    }
}

$number = 13;
check($number)

?>