<?php
function pattern($num) {
    for($i = 1; $i <= $num; $i++) {
        for($j = 1; $j <= $num; $j++) {
            if(($i >= 2 && $i <= $num - 1) && $j != $i) {
                echo " ";
            }
            else {
                echo "*";
            }
        }
        echo "<br>";
    }       
}
pattern(7);
?>