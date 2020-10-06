<?php
function isPrime($num){
    if ($num == 0 || $num == 1){
        return $num . " is not a prime number.";
    }
    else{
        for($i = 2; $i <= $num/2; $i++){
            if ($num % $i == 0){
                return $num . " is not a prime number";
            }
        }
        return $num . " is a prime number";
    }
}
?>