<?php
function isPowerOfTwo($num){
    $n = $num;
    if ($num == 0){
        return $num . " is not power of 2";
    }
    while($n != 1){
        if($n % 2 != 0){
            return $num . " is not power of 2";
        }
        $n = $n / 2;
    }
    return $num . " is power of 2";
}

echo isPowerOfTwo(8);
?>