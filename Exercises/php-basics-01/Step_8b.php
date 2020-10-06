<?php
$grocery1 = array(
    array("balade", "mazere3"),
    array("Fresh", "Taanayel"),
    array("Tanoureen", "Reem")
);

echo "Hey Sir, Please I need 1 pack of " . $grocery1[0][0] . " eggs and 3 " . $grocery1[2][1] . " Water Pack";

$grocery = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo"<br>";
echo "Hey Sir, Please I need 1 pack of " . $grocery1[0][0] . " " . $grocery[0] . " and 3 " . $grocery1[2][1] . " " . $grocery[3];
?>