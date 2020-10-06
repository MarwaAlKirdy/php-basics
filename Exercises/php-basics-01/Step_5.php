<?php
$course_name = "PHP";
$enrolled_students = 50;
$price = 10.53;
$on_discount = true;

echo "Course title: " . $course_name;
echo "<br>";
echo "Enrolled Students: " . $enrolled_students;
echo "<br>";
echo "Course price: " . $price . " $ USD";
echo "<br>";
if ($on_discount == true){
    echo "Course on discount: Yes";
}
else{
    echo "Course on discount: No";
}
?>