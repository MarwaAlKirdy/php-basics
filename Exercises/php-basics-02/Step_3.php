<?php

function swap($var1, $var2){
    $var = $var1;
    $var1 = $var2;
    $var2 = $var;
    return $var1 . "<br>" . $var2;
}

echo swap(32, 45);

?>