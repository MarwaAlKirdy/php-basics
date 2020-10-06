<?php
function calculateArea($height, $width){
    $area = $height * $width;
    return "Area is " . $area;
}

echo calculateArea(5, 3);
?>